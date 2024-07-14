<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Auth;

// Rute untuk halaman utama aplikasi
Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', UserController::class);
Route::resource('tiket', TiketController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
