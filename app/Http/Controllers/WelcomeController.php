<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ProfilePhoto;
use App\Models\ProfilePicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Socialite;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WelcomeController extends Controller
{
    public function welcome()
    {
        
        return view('layouts.welcome');
    }

    public function signup()
    {
        return view('login.signup');
    }
    public function register(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:15',
            'gender' => 'required|string',
            'date_of_birth' => 'required|date',
            'password' => 'required|string|min:6',
            'agree' => 'required|accepted',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // limit size to 5MB
        ]);
        // dd($validator);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the user in the database
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'password' => bcrypt($request->password),
            'google_id' => NULL,
        ]);

        if ($request->hasFile('profile_picture')) {
            $uploadedFile = $request->file('profile_picture');
            
            $originalName = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME); 
            $customFilename = $originalName . '_' . time() . '.' . $uploadedFile->getClientOriginalExtension();

            
            $filePath = $uploadedFile->storeAs('profile_picture', $customFilename, 'public');
        
            DB::table('profile_pictures')->insert([
                'user_id' => $user->id,
                'photo_path' => $filePath, 
                'created_at'=> now(),
            ]);
        }

        // Generate a random 6-digit OTP
        $otp = rand(100000, 999999);

        // Store OTP and user ID in the session for later verification
        Session::put('otp', $otp);
        Session::put('user_id', $user->id);

        // Code to send the OTP to the user's phone number via SMS (e.g., Twilio)
        // SmsService::send($user->phone_number, "Your OTP is: $otp");

        return redirect()->route('login')->with('message', 'An OTP has been sent to your phone number.');
    }

    

    public function login()
    {
        return view('login.login');
    }
    public function auth(Request $request)
    {
        // Validate the input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'g-recaptcha-response' => 'required' // Ensure reCAPTCHA is filled
        ]);

        // Verify reCAPTCHA response
        $recaptchaResponse = $request->input('g-recaptcha-response');
        $recaptchaVerification = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET'),
            'response' => $recaptchaResponse
        ]);

        // Decode response from reCAPTCHA
        $recaptchaResult = json_decode($recaptchaVerification->getBody());

        if (!$recaptchaResult->success) {
            return redirect()->back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
        }

        // Find user by email
        $user = User::where('email', $request->email)->first();

        // Check if the user exists and password is correct
        if ($user && Hash::check($request->password, $user->password)) {
            // Check if "remember me" option is selected
            $remember = $request->has('remember');

            // Log the user in
            Auth::login($user, $remember);

            // Redirect to the home page after successful login
            return redirect()->route('dashboard');
        }

        // Email or password is incorrect
        return redirect()->back()->with('error', 'Incorrect email or password. Please try again.');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            
            
            $findUser = User::where('email', $user->email)->first();
    
            
            if (!$findUser) {
                $findUser = new User();
                $findUser->first_name = $user->name;
                $findUser->email = $user->email;
                $findUser->password = bcrypt('1234dummy'); 
                $findUser->google_id = $user->id;
                $findUser->save();
            }
    
            
            session()->put('id', $findUser->id);
    
            
            return redirect()->route('dashboard');
    
        } catch (\Exception $e) {
            
            dd($e->getMessage());
        }
    }
    public function logout()
    {
        // Log the user out
        Auth::logout();

        // Clear any specific session data if needed
        Session::flush();

        // Redirect to the login page
        return redirect()->route('login')->with('message', 'You have been successfully logged out.');
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->stateless()->user();
            
            // Check if the user already exists in your database
            $user = User::where('email', $facebookUser->getEmail())->first();
            
            if ($user) {
                // Log the user in
                Auth::login($user);
            } else {
                // Create a new user if one doesn't exist
                $user = User::create([
                    'name' => $facebookUser->getName(),
                    'email' => $facebookUser->getEmail(),
                    'facebook_id' => $facebookUser->getId(),
                    'password' => bcrypt(str()->random(16)), // set a random password
                ]);

                Auth::login($user);
            }

            // Redirect to the home or dashboard page
            return redirect()->route('home');

        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Failed to log in with Facebook. Please try again.');
        }
    }
   


}
