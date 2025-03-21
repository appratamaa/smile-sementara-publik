<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPraktik extends Model
{
    use HasFactory;

    protected $table = 'jadwal_praktik'; // Nama tabel di database

    protected $fillable = [
        'tanggal',
        'waktu',
        'status',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'waktu' => 'datetime:H:i',
        'status' => 'string',
    ];
}
