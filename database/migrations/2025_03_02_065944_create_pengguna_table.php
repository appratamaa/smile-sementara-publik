<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('nomor_hp')->unique();
            $table->string('kata_sandi');
            $table->string('usia')->default('-');
            $table->string('tinggi_badan')->default('-');
            $table->string('berat_badan')->default('-');
            $table->string('jenis_kelamin')->default('-');
            $table->string('penyakit_genetik')->default('-');
            $table->text('alamat')->default('-');
            $table->timestamps();
        });        
    }

    public function down()
    {
        Schema::dropIfExists('pengguna');
    }
};
