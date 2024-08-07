<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tiket', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelanggan');
            $table->string('flim');
            $table->string('genre');
            $table->string('studio');
            $table->string('tempat_duduk');
            $table->integer('jumlah_tiket');
            $table->time('jam_tayang');
            $table->date('tanggal_pemesanan');
            $table->decimal('total_harga', 10, 3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiket');
    }
};
