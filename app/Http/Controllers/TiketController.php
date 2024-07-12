<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
}
