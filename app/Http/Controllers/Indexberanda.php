<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Indexberanda extends Controller
{
public function index()
{
    // Pastikan pengguna login
    if (!Auth::check()) {
        return redirect()->route('masuk')->with('error', 'Silakan login terlebih dahulu.');
    }

    $pengguna = Auth::user(); // Ambil data pengguna yang login

    return view('beranda', compact('pengguna'));
}

}
