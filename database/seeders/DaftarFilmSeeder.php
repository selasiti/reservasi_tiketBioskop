<?php

// database/seeders/DaftarFilmsSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DaftarFilm;

class DaftarFilmsSeeder extends Seeder
{
    public function run()
    {
        $films = [
            ["judul" => "vina", "deskripsi" => "horror"],
            ["judul" => "badarawuhi", "deskripsi" => "horror"],
            // tambahkan data lainnya sesuai kebutuhan
        ];

        foreach ($films as $film) {
            DaftarFilm::create([
                'judul' => $film['judul'],
                'deskripsi' => $film['deskripsi'],
            ]);
        }
    }
}
