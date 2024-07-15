<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKursiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Kursis', function (Blueprint $table) {
            $table->id();
            $table->string('seat_number'); // Nomor kursi, misalnya A1, A2, dll.
            $table->string('row'); // Baris kursi, misalnya A, B, C, dll.
            $table->boolean('is_available')->default(true); // Ketersediaan kursi
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Kursi');
    }
}