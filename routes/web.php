<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/event', function () {
    return view('event.event');
})->name('event');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/login', function () {
    return view('Auth.login');
})->name('login');


Route::get('/register', function () {
    return view('Auth.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('Auth.forgot_password');
})->name('forgot-password');


Route::get('/event', function () {
    return view('event.event');
})->name('event');

Route::get('/news', function () {
    return view('news.news');
})->name('news');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/profile', function () {
    return view('profile.profile');
})->name('profile');

