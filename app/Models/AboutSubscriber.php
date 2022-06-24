<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSubscriber extends Model
{
    use HasFactory;
    protected $table = 'about_subscribers';
    protected $fillable = [
        'subscriber_id',
        'profile_pic',
        'cover_pic',
        'school',
        'school_start',
        'school_end',
        'college',
        'college_starts',
        'college_end',
        'university',
        'university_starts',
        'university_end',
        'work',
        'about_details',
        'nike_name'
    ];
}
