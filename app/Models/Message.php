<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $tabel = 'messages';
    protected $fillable =[ 
        'subscriber_id',
        'message'
        ];
}