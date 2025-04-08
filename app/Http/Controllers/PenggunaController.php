<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PenggunaController extends Controller
{
    public function showForm()
    {
        return view('daftar');
    }

    public function daftar(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:pengguna,email',
            'nomor_hp' => 'required|numeric|digits_between:10,15',
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

        Pengguna::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'nomor_hp' => $request->nomor_hp,
            'kata_sandi' => Hash::make($request->kata_sandi),
            'usia' => '-',
            'tinggi_badan' => '-',
            'berat_badan' => '-',
            'jenis_kelamin' => '-',
            'penyakit_genetik' => '-',
            'alamat' => '-',
        ]);

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

        if (Auth::check() && Auth::id() == $pengguna->id) {
            $freshUser = \App\Models\User::find(Auth::id());
            Auth::setUser($freshUser);
        }

        return response()->json([
            'success' => true,
            'message' => 'Profil berhasil diperbarui!',
            'redirect_url' => route('profil', $pengguna->id),
        ]);
    }

    public function showProfil($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('profil', compact('pengguna'));
    }
}
