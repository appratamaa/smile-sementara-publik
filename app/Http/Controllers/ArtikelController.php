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

        $imagePath = $request->file('gambar')->store('public/artikel');

        Artikel::create([
            'judul_artikel' => $request->judul_artikel,
            'deskripsi_artikel' => $request->deskripsi_artikel,
            'gambar' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Artikel berhasil ditambahkan!');
    }
}

