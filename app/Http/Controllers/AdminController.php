<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Menampilkan halaman registrasi admin
    public function showRegistrasi()
    {
        return view('adminRegistrasi');
    }

    // Menampilkan halaman login admin
    public function showLogin()
    {
        return view('adminLogin');
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
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin', // Pastikan ada kolom role di database
        ]);

        

        // Redirect ke halaman adminArtikel
        return redirect()->route('adminArtikel')->with('success', 'Registrasi berhasil, selamat datang di halaman admin!');
    }

    // Menangani proses login admin
    public function adminLogin(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Coba melakukan autentikasi
        if (Auth::attempt($credentials)) {
            // Regenerasi session untuk keamanan
            $request->session()->regenerate();

            // Redirect ke dashboard admin
            return redirect()->route('adminArtikel');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah!',
        ])->onlyInput('email');
    }

    // Menangani proses logout admin
    public function adminLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/adminLogin')->with('success', 'Anda telah logout.');
    }
}
