<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Sesuaikan dengan model yang digunakan
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Menampilkan halaman registrasi admin
    public function showRegistrasi()
    {
        return view('adminRegistrasi');
    }

    // Menangani proses registrasi admin
    public function registrasiAdmin(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Simpan ke database
        $admin = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin', // Jika ada kolom role
        ]);

        // Login otomatis setelah registrasi
        Auth::login($admin);

        // Redirect ke halaman adminArtikel
        return redirect()->route('admin.adminArtikel')->with('success', 'Registrasi berhasil, selamat datang di halaman admin!');
    }
}

