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
    ];

    protected $hidden = [
        'kata_sandi',
    ];
}
