<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body class="bg-gray-100 h-screen flex">
    <!-- Sidebar -->
    <div class="w-64 bg-white shadow-md p-4 flex flex-col h-full">
        <h1 class="text-left mb-4">
            <img src="{{ asset('image/SMILE LOGO.png') }}" alt="Smile logo" class="h-10">
        </h1>
        <ul class="space-y-2 flex-grow">
            <li><a href="/adminArtikel" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Artikel</a></li>
            <li><a href="/admin/antrian" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Antrian</a></li>
            <li><a href="/admin/rekam-medis" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Rekam Medis</a></li>
            <li><a href="/adminPraktik" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Praktik</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Chat</a></li>
        </ul>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block w-full text-left px-4 py-2 text-red-600 font-bold hover:bg-red-100 rounded">Keluar</button>
        </form>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">

        <div class="flex justify-between items-center bg-white p-4 shadow-md rounded-lg mb-4">
            <h2 class="text-2xl font-semibold">Rekam Medis</h2>

            <!-- Profile Section -->
            <div class="flex items-center space-x-4">
                <span class="text-gray-700 text-sm">{{ Auth::user()->email }}</span>
                <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                    <span class="text-white font-semibold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                </div>
            </div>
        </div>
        
        <!-- Form Input -->
        <div class="bg-white shadow-md p-6 rounded">
            <h2 class="text-xl font-semibold mb-4">Form Input</h2>
            <form>
                <div class="mb-4">
                    <label for="judulArtikel" class="block text-gray-700">Judul Artikel</label>
                    <input type="text" id="judulArtikel" class="w-full p-2 border rounded mt-1" placeholder="Masukkan Judul">
                </div>
                <div class="mb-4">
                    <label for="deskripsiArtikel" class="block text-gray-700">Deskripsi</label>
                    <input type="text" id="deskripsiArtikel" class="w-full p-2 border rounded mt-1" placeholder="Masukkan Deskripsi">
                </div>
                <div class="mb-4">
                    <label for="pesanArtikel" class="block text-gray-700">Pesan</label>
                    <textarea id="pesanArtikel" class="w-full p-2 border rounded mt-1" rows="3" placeholder="Tulis pesan"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Kirim</button>
            </form>
        </div>
    </div>

    <script>
        document.querySelectorAll('.w-64 a').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.w-64 a').forEach(link => link.classList.remove('bg-black', 'text-white'));
                this.classList.add('bg-black', 'text-white');
            });
        });
    </script>
</body>
</html>
