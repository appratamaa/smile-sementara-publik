<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    public $timestamps = false; // Nonaktifkan timestamps
    protected $table = 'informasi';
    protected $primaryKey = 'id';
    protected $fillable = ['judul', 'deskripsi', 'gambar'];
}

