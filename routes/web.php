<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ WelcomeController::class,'welcome'])->name('welcome');
Route::get('/signup',[WelcomeController::class,'signup'])->name('signup');
Route::post('/register',[WelcomeController::class,'register'])->name('register');
Route::get('/login',[WelcomeController::class,'login'])->name('login');
Route::post('/login', [WelcomeController::class, 'auth'])->name('auth');
Route::get('/logout', [WelcomeController::class, 'logout'])->name('logout');

Route::get('/auth/facebook', [WelcomeController::class, 'redirectToFacebook'])->name('facebook.login');
Route::get('/auth/facebook/callback', [WelcomeController::class, 'handleFacebookCallback']);

Route::get('auth/google', [WelcomeController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [WelcomeController::class, 'handleGoogleCallback']);
Route::get('/plans', [HomeController::class, 'plans'])->name('plans');

Route::get('/verify-otp', [WelcomeController::class, 'showOtpForm'])->name('otp.verify');
Route::post('/verify-otp', [WelcomeController::class, 'verifyOtp'])->name('otp.submit');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
});
