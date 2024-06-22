<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manajemenFilm extends Model
{
    use HasFactory;

    protected $table = 'manajemenFilms';

    protected $fillable =[
        'title',
        'description',
        'director',
         'year',
    ];
}
