<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\ProfilePicture;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // Personal Information
        'first_name', 'last_name', 'gender', 'date_of_birth', 'bio', 'marital_status', 'height', 'weight',

        // Contact Information
        'email', 'phone_number', 'is_phone_verified', 'address', 'city', 'state', 'country', 'zip_code',

        // Religion and Cultural Background
        'religion', 'caste', 'sub_caste', 'mother_tongue', 'ethnicity',

        // Educational and Professional Information
        'education_level', 'education_field', 'occupation', 'annual_income', 'employer_name',

        // Family Details
        'family_type', 'father_occupation', 'mother_occupation', 'siblings_count', 'sibling_details',

        // Lifestyle and Interests
        'diet_preference', 'smoke', 'drink', 'hobbies', 'likes', 'dislikes',

        // Partner Preferences
        'preferred_age_range', 'preferred_height_range', 'preferred_religion', 'preferred_caste',
        'preferred_education_level', 'preferred_occupation', 'preferred_country',

        // Account Information
        'username', 'password', 'account_status', 'is_premium_member', 'membership_expiry_date',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'membership_expiry_date' => 'date',
        'date_of_birth' => 'date',
        'is_phone_verified' => 'boolean',
        'smoke' => 'boolean',
        'drink' => 'boolean',
        'likes' => 'integer',
        'dislikes' => 'integer',
        'password' => 'hashed',
    ];

    /**
     * Relationship with UserImage model to manage user photos.
     */
    public function images()
    {
        return $this->hasMany(UserImage::class);
    }

    /**
     * Relationship for the profile photo if applicable.
     */
    
    public function profilePicture()
    {
        return $this->hasOne(ProfilePicture::class);
    }
}
