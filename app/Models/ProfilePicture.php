<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilePicture extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'photo_path',
    ];

    /**
     * Get the user that owns the profile photo.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
