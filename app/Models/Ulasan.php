<?php

namespace App\Models;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ulasan extends Model
{
    use HasFactory;

    protected $table = 'ulasan';

    protected $fillable = [
        'appointment_id',
        'rating',
        'komentar',
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
        // app/Models/Ulasan.php
        return $this->belongsTo(Appointment::class);
    }
}
