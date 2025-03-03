<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelUser extends Model
{
    use HasFactory;

    protected $table = 'artikels'; // Sesuai dengan nama tabel di database

    protected $primaryKey = 'id_artikel'; // Sesuai dengan kolom ID pada tabel

    protected $fillable = ['judul_artikel', 'deskripsi_artikel', 'gambar']; // Kolom yang bisa diisi
}
