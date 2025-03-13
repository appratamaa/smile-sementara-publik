<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#06c1db">
    <title>SMILE - Artikel Kesehatan Gigi</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="h-full bg-white">
    <div class="min-h-full ">
        <x-navbar></x-navbar>
        
 
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Artikel Kesehatan Gigi</h1>
                <p class="mt-4 text-base text-gray-600">Temukan berbagai artikel tentang kesehatan gigi dan mulut untuk meningkatkan pengetahuan dan menjaga kebersihan gigi Anda.</p>
            </div>
   
        
        <main class="bg-white min-h-screen">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <!-- Form Pencarian -->
                <form action="{{ url('/artikel/cari') }}" method="GET" class="mt-6">
                    <div class="relative">
                        <input type="text" name="keyword" placeholder="Cari artikel berdasarkan judul..." class="w-full rounded-md bg-white px-4 py-2 text-gray-900 border-2 border-gray-300 focus:border-blue-500 focus:outline-none" value="{{ request('keyword') }}">
                        <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600">Cari</button>
                    </div>
                </form>
                
                <!-- Filter & Switch Tampilan -->
                <div class="mt-6 flex flex-wrap justify-between gap-4">
                    <div x-data="{ gridView: true }">
                        <button @click="gridView = true" :class="{ 'bg-blue-500 text-white': gridView }" class="px-4 py-2 border rounded-md hover:bg-blue-500 hover:text-white">
                            <i class="fa-solid fa-th"></i> Grid
                        </button>
                        <button @click="gridView = false" :class="{ 'bg-blue-500 text-white': !gridView }" class="px-4 py-2 border rounded-md hover:bg-blue-500 hover:text-white">
                            <i class="fa-solid fa-list"></i> Row
                        </button>
                    </div>
                </div>
                
                <!-- Daftar Artikel -->
                <div class="mt-6" x-show="gridView">
                    <div class="mb-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($artikels as $artikel)
                            <a href="{{ url('/artikel/' . $artikel->id_artikel) }}" class="block bg-white shadow-md rounded-lg p-4 hover:shadow-lg transition">
                                <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul_artikel }}" class="w-full h-40 object-cover rounded-t-lg">
                                <div class="mt-4">
                                    <h3 class="text-lg font-bold">{{ $artikel->judul_artikel }}</h3>
                                    <p class="mt-2 text-gray-600">{{ Str::limit($artikel->deskripsi_artikel, 120) }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                
                <!-- Jika Tidak Ada Artikel -->
                @if ($artikels->isEmpty())
                    <p class="text-gray-600 text-center mt-6">Tidak ada artikel yang tersedia.</p>
                @endif
            </div>
        </main>
        
    </div>
    <x-footer></x-footer>
</body>
</html>
