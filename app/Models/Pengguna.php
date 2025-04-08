<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';

    protected $fillable = [
        'nama_lengkap',
        'email',
        'nomor_hp',
        'kata_sandi',
        'usia',
        'tinggi_badan',
        'berat_badan',
        'jenis_kelamin',
        'penyakit_genetik',
        'alamat',
        'foto_profil',
    ];    

    protected $hidden = [
        'kata_sandi',
    ];
}
