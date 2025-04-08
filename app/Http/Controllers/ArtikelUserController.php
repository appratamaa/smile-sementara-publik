<?php

namespace App\Http\Controllers;

use App\Models\ArtikelUser;
use Illuminate\Http\Request;
use App\Models\Ulasan;
use App\Models\Appointment;

class ArtikelUserController extends Controller
{
    public function index()
    {
        $artikels = ArtikelUser::latest()->get();
        return view('artikel', compact('artikels')); // Pastikan tetap merender tampilan
    }


    public function welcome()
    {
        $artikels = ArtikelUser::latest()->take(6)->get();

        // Ambil hanya ulasan dengan rating lebih dari 4
        $ulasans = Ulasan::with('appointment')
            ->where('rating', '>=', 4)
            ->latest()
            ->take(3)
            ->get();

        return view('welcome', compact('artikels', 'ulasans'));
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
