@extends('layouts.app') <!-- Sesuaikan dengan layout utama jika ada -->

@section('content')
<main class="bg-white min-h-screen">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul_artikel }}" class="w-full h-64 object-cover rounded-md">
            <h1 class="text-2xl font-bold mt-4">{{ $artikel->judul_artikel }}</h1>
            <p class="text-gray-600 mt-2">{{ $artikel->deskripsi_artikel }}</p>
            <a href="{{ route('artikel.index') }}" class="mt-4 inline-block bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">Kembali</a>
        </div>
    </div>
</main>
@endsection
