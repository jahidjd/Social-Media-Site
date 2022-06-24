<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table ='comments';
    protected $fillable =[
        'subscriber_id',
        'post_id',
        'about_subscriber_id',
        'comment'
    ];
}
