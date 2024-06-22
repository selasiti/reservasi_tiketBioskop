<?php
namespace App\Http\Controllers;

use App\Models\ManajemenFilm;
use Illuminate\Http\Request;

class ManajemenFilmController extends Controller
{
    public function index()
    {
        $manajemenFilms = ManajemenFilm::all();
        return view('manajemenFilms.index', compact('manajemenFilms'));
    }
}
