<?php

namespace App\Http\Controllers;

use App\Models\ArtikelUser;
use Illuminate\Http\Request;

class ArtikelUserController extends Controller
{
    public function index()
    {
        $artikels = ArtikelUser::latest()->get(); // Ambil semua artikel terbaru
        return view('artikel', compact('artikels'));
    }
    public function show($id)
    {
        $artikel = ArtikelUser::findOrFail($id);
        return view('artikeldetail', compact('artikel'));
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        // Hanya mencari berdasarkan judul artikel
        $artikels = ArtikelUser::where('judul_artikel', 'LIKE', "%$keyword%")->get();

        return view('artikel', compact('artikels'));
    }
}
