<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Gunakan Authenticatable
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Masuk extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'pengguna'; // Pastikan tabel benar

    protected $fillable = ['nama_lengkap', 'email', 'nomor_hp', 'kata_sandi'];

    protected $hidden = ['kata_sandi', 'remember_token']; // Sembunyikan password dan token

    /**
     * Menentukan atribut yang digunakan sebagai password.
     */
    public function getAuthPassword()
    {
        return $this->kata_sandi;
    }
}
