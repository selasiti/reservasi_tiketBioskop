<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManajemenFilmController;

// Rute untuk halaman utama aplikasi
Route::get('/', function () {
    return view('welcome');
});

// Rute khusus untuk `manajemenFilm`
Route::get('/Film', function () {
    return view('manajemenFilm');
});

// Rute untuk CRUD manajemen film
Route::resource('manajemenFilms', ManajemenFilmController::class);
