<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table ='posts';
    protected $fillable=[
        'subscriber_id',
        'post_details',
        'about_subscriber_id',
        'photo',
        'video',
        'likes',
        'dislikes',
        'status'
    ];
}
