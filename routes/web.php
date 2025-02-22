<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
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

// Nova rota para a descrição detalhada do evento
Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');

// Rota para a descrição detalhada da notícia
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

// Rotas para criar e armazenar eventos
Route::get('/events/create', function () {
    return view('event.event_create');
})->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');

// Rotas para criar e armazenar notícias
Route::get('/newss/create', function () {
    return view('news.news_create');
})->name('newss.create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');

Route::get('/admin', function () {
    return view('adm.admin');
})->name('admin');

Route::get('/welcomeadm', function () {
    return view('adm.welcomeAdm');
})->name('admin');