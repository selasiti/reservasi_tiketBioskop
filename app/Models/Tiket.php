<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pelanggan', 
        'flim',
        'genre',
        'studio',
        'tempat_duduk',
        'jumlah_tiket', 
        'jam_tayang', 
        'tanggal_pemesanan',
        'total_harga'
    ];
}
