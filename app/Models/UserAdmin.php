<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdmin extends Model
{
    use HasFactory;

    protected $table = 'useradmin'; // Nama tabel di database
    protected $primaryKey = 'id_admin'; // Primary key tabel


    protected $fillable = [
        'username',  // Sesuaikan dengan kolom di tabel useradmin
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
