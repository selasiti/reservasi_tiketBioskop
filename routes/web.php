<?php

use App\Http\Controllers\DaftarFilmController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

Route::get('/', function () {
    return view('welcome');
});

Route::resource('daftarfilm', DaftarFilmController::class);
=======
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
>>>>>>> 33d94675dee48ee1d185098fadba780dec1edd50
