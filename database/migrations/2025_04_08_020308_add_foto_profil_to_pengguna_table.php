<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pengguna', function (Blueprint $table) {
            $table->string('foto_profil')->default('foto_profil/Foto-Profil-Default.png')->after('alamat');
        });
    }

    public function down()
    {
        Schema::table('pengguna', function (Blueprint $table) {
            $table->dropColumn('foto_profil');
        });
    }
};
