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
            'usia' => 'Perlu diisi!',
            'tinggi_badan' => 'Perlu diisi!',
            'berat_badan' => 'Perlu diisi!',
            'jenis_kelamin' => 'Perlu diisi!',
            'penyakit_genetik' => 'Perlu diisi!',
            'alamat' => 'Perlu diisi!',
        ]);

        // Beri notifikasi sukses dengan SweetAlert
        return redirect()->route('daftar')->with('success', 'Akun berhasil dibuat! Anda akan dialihkan ke halaman masuk...');
    }
    public function edit($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('edit-profil', compact('pengguna'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email',
            'nomor_hp' => 'required|string|max:15',
            'usia' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'jenis_kelamin' => 'required',
            'penyakit_genetik' => 'required',
            'alamat' => 'required',
        ]);

        $pengguna = Pengguna::findOrFail($id);
        $pengguna->update($request->all());

        return redirect()->route('profil', $pengguna->id)->with('success', 'Profil berhasil diperbarui!');
    }
}
