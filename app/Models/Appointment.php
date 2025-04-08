<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'nomor_hp', 'usia', 'jenis_kelamin',
        'alamat', 'tanggal', 'tujuan', 'nomor_antrean',
    ];    

    protected $casts = [
        'tanggal' => 'datetime:Y-m-d', // Optional: bisa pakai 'datetime' saja kalau kamu mau pakai full datetime
    ];
}
