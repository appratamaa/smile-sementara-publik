<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPraktik extends Model
{
    use HasFactory;
    
    protected $table = 'jadwal_praktik';
    protected $fillable = ['informasi_id', 'tanggal', 'waktu'];

    // Relasi ke Informasi
    public function informasi()
    {
        return $this->belongsTo(Informasi::class, 'informasi_id');
    }
}
