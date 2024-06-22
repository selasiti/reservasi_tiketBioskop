<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\manajemenFilm;

class manajemenFilmsTableSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan data film menggunakan factory
        manajemenFilm::factory()->count(10)->create();
    }
}
