<?php

namespace App\Http\Controllers;

use App\Models\DaftarFilm;
use Illuminate\Http\Request;

class DaftarFilmController extends Controller
{
    public function index()
    {
        $daftarfilms = DaftarFilm::all();
        return view('daftarfilm.index', compact('daftarfilms'));
    }
}
