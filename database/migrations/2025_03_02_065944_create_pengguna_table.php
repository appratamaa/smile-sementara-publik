<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap'); // Nama lengkap
            $table->string('email')->unique(); // Email unik
            $table->string('nomor_hp')->unique(); // Nomor HP unik
            $table->string('kata_sandi'); // Kata sandi
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengguna');
    }
};
