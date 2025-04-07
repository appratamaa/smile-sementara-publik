<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SimpanInformasi extends Model
{
    protected $table = 'informasi'; // Nama tabel
    protected $primaryKey = 'id';   // Primary key

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar'
    ];

    public $timestamps = true; // Jika kamu pakai kolom created_at dan updated_at

    // Kalau tidak pakai timestamps (misal di migration kamu nonaktifkan), ganti jadi:
    // public $timestamps = false;
}
