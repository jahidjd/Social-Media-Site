<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    protected $table = 'subscribers';
    protected $fillable=['first_name','last_name','email','date_of_birth','sex','city','country','ip_address','password'];
    
}
