<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrondEnd;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [FrondEnd::class,'index'])->name('index');
Route::post('/signup', [FrondEnd::class,'subscriberRegistration'])->name('signup');
Route::post('/signin', [FrondEnd::class,'subsLogin'])->name('signin');
Route::get('/profile', [FrondEnd::class,'profile'])->name('profile');
Route::get('/about', [FrondEnd::class,'about'])->name('about');
Route::post('/logout', [FrondEnd::class,'logout'])->name('logout');
Route::get('/album', [FrondEnd::class,'album'])->name('album');
Route::get('/friends', [FrondEnd::class,'friends'])->name('friends');
Route::get('/editAbout', [FrondEnd::class,'editAbout'])->name('editAbout');
Route::post('/saveAbout', [FrondEnd::class,'saveAbout'])->name('saveAbout');
Route::put('/updateAbout', [FrondEnd::class,'updateAbout'])->name('updateAbout');
Route::post('/uploadingPost', [FrondEnd::class,'post'])->name('post');
Route::post('/comment', [FrondEnd::class,'comment'])->name('comment');
Route::get('/newsfeed', [FrondEnd::class,'newsfeed'])->name('newsfeed');
Route::get('/message', [FrondEnd::class,'message'])->name('message');
Route::get('/findFriend', [FrondEnd::class,'findFriend'])->name('findFriend');
Route::get('/friendRequest/{id}', [FrondEnd::class,'friendRequest'])->name('friendRequest');
Route::get('/friend', [FrondEnd::class,'friend'])->name('friend');

Auth::routes(['register'=>false,'login'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
