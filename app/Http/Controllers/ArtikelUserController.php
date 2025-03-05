<?php

namespace App\Http\Controllers;

use App\Models\ArtikelUser;
use Illuminate\Http\Request;

class ArtikelUserController extends Controller
{
    public function index()
    {
        // Ambil semua artikel terbaru
        $artikels = ArtikelUser::latest()->get(); 
        return view('artikel', compact('artikels'));
    }

    public function show($id)
    {
        $artikel = ArtikelUser::findOrFail($id);

        // Ambil artikel lain yang tidak sama dengan artikel saat ini (misalnya 5 artikel terkait)
        $relatedArticles = ArtikelUser::where('id_artikel', '!=', $id)
            ->latest()
            ->take(5)
            ->get();

        return view('artikeldetail', compact('artikel', 'relatedArticles'));
    }

    public function search(Request $request)
    {
        $keyword = trim($request->input('keyword')); // Menghapus spasi di awal & akhir

        if (empty($keyword)) {
            return redirect()->route('artikel.index')->with('error', 'Masukkan kata kunci untuk mencari artikel.');
        }

        // Cari artikel berdasarkan judul_artikel yang mengandung keyword
        $artikels = ArtikelUser::where('judul_artikel', 'LIKE', "%$keyword%")->latest()->get();

        return view('artikel', compact('artikels'))->with('keyword', $keyword);
    }
}
