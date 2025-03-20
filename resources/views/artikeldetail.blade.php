<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-100">

<head>
    <meta name="theme-color" content="#06c1db">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>{{ $artikel->judul_artikel }}</title>
</head>

<body class="bg-gray-100">
    <main>
        <x-navbar></x-navbar> <!-- Navbar di bagian atas -->

        <!-- Container Utama -->
        <div class="container mx-auto p-6 max-w-4xl bg-white shadow-lg rounded-lg mt-6">
            <!-- Judul Artikel -->
            <h1 class="text-3xl font-bold text-gray-800">{{ $artikel->judul_artikel }}</h1>
            <p class="text-gray-500 text-sm mt-1">{{ date('d M Y', strtotime($artikel->created_at)) }}</p>

            <!-- Gambar Artikel -->
            <img src="{{ asset('gambar_artikel/' . $artikel['gambar']) }}" alt="{{ $artikel->judul_artikel }}"
                class="w-full h-80 object-cover rounded-lg mt-4 shadow-md">

            <!-- Deskripsi Artikel -->
            <div class="mt-6 text-gray-700 leading-relaxed">
                {{ $artikel->deskripsi_artikel }}
            </div>
        </div>

        <!-- Konten Terkait -->
        <div class="container mx-auto p-6 max-w-4xl mt-8">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Baca Juga</h3>
            <div class="grid md:grid-cols-2 gap-6">
                @foreach ($relatedArticles as $related)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <a href="{{ url('/artikel/' . $related->id_artikel) }}">
                            <img src="{{ asset('storage/' . $related->gambar) }}" class="w-full h-40 object-cover"
                                alt="{{ $related->judul_artikel }}">
                            <div class="p-4">
                                <h4 class="text-lg font-semibold text-gray-800">{{ $related->judul_artikel }}</h4>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
        <x-footer></x-footer> <!-- Footer di bagian bawah -->
</body>

</html>
