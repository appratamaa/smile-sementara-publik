<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<meta name="theme-color" content="#06c1db">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
@vite('resources/css/app.css')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<title>SMILE</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <x-navbar>
        </x-navbar>

        <header class="bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900 ">Artikel Kesehatan Gigi</h1>
                <p class="mt-4 text-base text-gray-600">Carilah artikel kesehatan gigi yang sesuai untukmu!</p>
            </div>
        </header>
        <main class="bg-white min-h-screen">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <form action="{{ route('artikel.search') }}" method="GET">
                    <div class="relative">
                        <input type="text" name="keyword" placeholder="Cari artikel berdasarkan judul..."
                            class="w-full rounded-md bg-white px-4 py-2 text-gray-900 border-2 border-gray-300 focus:border-blue-500 focus:outline-none"
                            value="{{ request('keyword') }}">
                        <button type="submit"
                            class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600">
                            Cari
                        </button>
                    </div>
                </form>
                <div class="mt-6 grid gap-4 lg:grid-cols-4">
                    @if ($artikels->isEmpty())
                        <p class="text-gray-600">Tidak ada artikel dengan judul tersebut.</p>
                    @else
                        @foreach ($artikels as $artikel)
                            <div class="bg-white shadow-md rounded-lg p-4">
                                <img src="{{ asset('storage/' . $artikel->gambar) }}"
                                    alt="{{ $artikel->judul_artikel }}" class="w-full h-40 object-cover rounded-t-lg">
                                <div class="mt-4">
                                    <h3 class="text-lg font-bold">{{ $artikel->judul_artikel }}</h3>
                                    <p class="mt-2 text-gray-600">{{ Str::limit($artikel->deskripsi_artikel, 100) }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </main>
    </div>
    <x-footer>
    </x-footer>

</body>

</html>
