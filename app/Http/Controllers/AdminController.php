<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Menampilkan halaman registrasi admin
    public function showRegister()
    {
        return view('admin.register');
    }

    // Menampilkan halaman login admin
    public function showLogin()
    {
        return view('admin.login');
    }

    // Menangani proses registrasi admin
    public function registerAdmin(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Simpan ke database dengan Hash::make()
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Flash message dan redirect ke halaman login
        return redirect()->route('adminLogin')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    // Menangani proses login admin
    public function adminLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Cek apakah email ada di database
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'Email tidak terdaftar!'])->with('error', 'Email tidak ditemukan!');
        }

        // Cek apakah password cocok dengan hash di database
        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Password salah!'])->with('error', 'Password yang Anda masukkan salah.');
        }

        // Jika autentikasi berhasil
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('adminArtikel')->with('success', 'Login berhasil! Selamat datang, ' . Auth::user()->name);
        }

        return back()->withErrors(['email' => 'Terjadi kesalahan pada login!'])->with('error', 'Login gagal. Coba lagi.');
    }

    // Menangani proses logout admin
    public function adminLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('adminLogin')->with('success', 'Anda telah logout.');
    }
}
