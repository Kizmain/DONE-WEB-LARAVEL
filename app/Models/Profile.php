<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'mobile',
        'address',
        'job_title',
        'location',
        'website',
        'github',
        'twitter',
        'instagram',
        'facebook',
        'avatar',
    ];
}
