<?php

namespace App\Http\Controllers;

use App\Models\ArtikelUser;
use Illuminate\Http\Request;

class ArtikelUserController extends Controller
{
    public function index()
    {
        $artikels = ArtikelUser::latest()->get(); 
        
        if ($artikels->isEmpty()) {
            return "Tidak ada data artikel yang ditemukan!";
        }

        return view('artikel', compact('artikels'));
    }

    public function welcome()
    {
        // Ambil 6 artikel terbaru untuk ditampilkan di halaman welcome
        $artikels = ArtikelUser::latest()->take(6)->get(); 

        return view('welcome', compact('artikels'));
    }

    public function show($id)
    {
        $artikel = ArtikelUser::findOrFail($id);

        $relatedArticles = ArtikelUser::where('id_artikel', '!=', $id)
            ->latest()
            ->take(5)
            ->get();

        return view('artikeldetail', compact('artikel', 'relatedArticles'));
    }

    public function search(Request $request)
    {
        $keyword = trim($request->input('keyword')); 

        if (empty($keyword)) {
            return redirect()->route('artikel.index')->with('error', 'Masukkan kata kunci untuk mencari artikel.');
        }

        $artikels = ArtikelUser::where('judul_artikel', 'LIKE', "%$keyword%")->latest()->get();

        return view('artikel', compact('artikels'))->with('keyword', $keyword);
    }
}
