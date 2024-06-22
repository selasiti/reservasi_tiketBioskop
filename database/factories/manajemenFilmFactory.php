<?php

namespace Database\Factories;

use App\Models\manajemenFilm; // Sesuaikan dengan namespace yang benar untuk model manajemenFilm
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\manajemenFilm>
 */
class manajemenFilmFactory extends Factory
{
    protected $model = manajemenFilm::class; // Sesuaikan dengan model yang benar dan tambahkan titik koma
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(3),
            'director' => $this->faker->name,
            'year' => $this->faker->numberBetween(1990, 2023),
        ];
    }
}


