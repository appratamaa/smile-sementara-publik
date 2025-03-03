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
                $table->date('tanggal');
                $table->string('tujuan');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};


