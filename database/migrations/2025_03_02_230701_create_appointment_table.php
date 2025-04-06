<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        if (!Schema::hasTable('appointments')) {
            Schema::create('appointments', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->integer('usia'); // Menambahkan field usia
                $table->enum('jenis_kelamin', ['L', 'P']); // Menambahkan field jenis kelamin (L = Laki-laki, P = Perempuan)
                $table->string('alamat', 255); // Menambahkan field alamat singkat
                $table->date('tanggal');
                $table->string('tujuan');
                $table->timestamps();
            });
        } else {
            Schema::table('appointments', function (Blueprint $table) {
                if (!Schema::hasColumn('appointments', 'usia')) {
                    $table->integer('usia')->after('nama');
                }
                if (!Schema::hasColumn('appointments', 'jenis_kelamin')) {
                    $table->enum('jenis_kelamin', ['L', 'P'])->after('usia');
                }
                if (!Schema::hasColumn('appointments', 'alamat')) {
                    $table->string('alamat', 255)->after('jenis_kelamin');
                }
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
