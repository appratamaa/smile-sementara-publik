<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    public $timestamps = false; // Nonaktifkan timestamps
    protected $table = 'artikels';
    protected $primaryKey = 'id_artikel';
    protected $fillable = ['judul_artikel', 'deskripsi_artikel', 'gambar'];
}

