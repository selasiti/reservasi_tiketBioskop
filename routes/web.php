<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

// Rute untuk halaman utama aplikasi

Route::get('/', function () {
    return view('home');
})->name('home');

// Rute untuk CRUD manajemen film
Route::resource('user', UserController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
