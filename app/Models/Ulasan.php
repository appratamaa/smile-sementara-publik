<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    }
}
