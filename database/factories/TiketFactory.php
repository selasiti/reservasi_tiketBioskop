<?php

namespace Database\Factories;

use App\Models\Tiket;
use Illuminate\Database\Eloquent\Factories\Factory;

class TiketFactory extends Factory
{
    protected $model = Tiket::class;

    public function definition()
    {
        return [
            'nama_pelanggan' => $this->faker->name,
            'flim' => $this->faker->sentence(3),
            'genre' => $this->faker->word,
            'studio' => $this->faker->word,
            'tempat_duduk' => $this->faker->word,
            'jumlah_tiket' => $this->faker->numberBetween(1, 10),
            'jam_tayang' => $this->faker->time('H:i'),
            'tanggal_pemesanan' => $this->faker->date,
            'total_harga' => $this->faker->randomFloat(2, 50, 500),
        ];
    }
}