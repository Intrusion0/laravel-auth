<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home'); 

Route::get('/', 'GuestController@home')->name('home');

// Register Route
Route::post('/register', 'Auth\RegisterController@register')->name('register');

// Login Route
Route::post('/login', 'Auth\LoginController@login')->name('login');

// Logout Route
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');