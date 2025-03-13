<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pengguna')->constrained('pengguna')->onDelete('cascade'); // Relasi ke tabel pengguna
            $table->string('foto_profil')->nullable(); // URL atau path foto profil
            $table->string('alamat')->nullable(); // Alamat pengguna
            $table->decimal('berat_badan', 5, 2)->nullable(); // Berat badan (kg)
            $table->decimal('tinggi_badan', 5, 2)->nullable(); // Tinggi badan (cm)
            $table->string('penyakit_genetik')->nullable(); // Penyakit genetik
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profil');
    }
};

