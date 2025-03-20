<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all();
        $artikel = Artikel::all(); // Ambil semua data artikel dari database
        return view('admin.adminArtikel', compact('artikel'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_artikel' => 'required|max:40',
            'deskripsi_artikel' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Baca file gambar dan konversi ke binary
        $imageBinary = file_get_contents($request->file('gambar')->getRealPath());

        Artikel::create([
            'judul_artikel' => $request->judul_artikel,
            'deskripsi_artikel' => $request->deskripsi_artikel,
            'gambar' => $imageBinary, // Simpan gambar sebagai binary
        ]);

        return redirect()->back()->with('success', 'Artikel berhasil ditambahkan!');
    }
}

