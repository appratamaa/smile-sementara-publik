<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function showForm()
    {
        return view('daftar');
    }

    public function daftar(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:pengguna,email',
            'nomor_hp' => 'required|string|unique:pengguna,nomor_hp|max:15',
            'kata_sandi' => 'required|string|min:6',
        ], [
            'nama_lengkap.required' => 'Nama lengkap harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email ini sudah terdaftar.',
            'nomor_hp.required' => 'Nomor handphone harus diisi.',
            'nomor_hp.unique' => 'Nomor handphone ini sudah digunakan.',
            'kata_sandi.required' => 'Kata sandi harus diisi.',
            'kata_sandi.min' => 'Kata sandi minimal 6 karakter.',
        ]);        

        // Simpan pengguna baru
        Pengguna::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'nomor_hp' => $request->nomor_hp,
            'kata_sandi' => Hash::make($request->kata_sandi),
        ]);

        // Beri notifikasi sukses dengan SweetAlert
        return redirect()->route('daftar')->with('success', 'Akun berhasil dibuat! Anda akan dialihkan ke halaman masuk...');
    }
}
