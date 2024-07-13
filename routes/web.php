<?php

use App\Http\Controllers\DaftarFilmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('daftarfilm', DaftarFilmController::class);