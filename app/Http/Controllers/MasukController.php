<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Masuk;

class MasukController extends Controller
{
    public function masuk(Request $request)
    {
        $request->validate([
            'contact' => 'required',
            'password' => 'required',
        ]);

        // Cek apakah pengguna login dengan email atau nomor HP
        $pengguna = Masuk::where('email', $request->contact)
            ->orWhere('nomor_hp', $request->contact)
            ->first();

        if ($pengguna && Hash::check($request->password, $pengguna->kata_sandi)) {
            // Simpan sesi login
            session(['pengguna' => $pengguna]);

            // Simpan flash pesan sukses
            return back()->with('success', 'Berhasil masuk!');
        }


        // Flash pesan gagal tetap di halaman login
        return back()->with('error', 'Email/Nomor HP atau kata sandi salah.');
    }
}
