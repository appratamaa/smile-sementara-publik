<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex">

    <!-- Sidebar -->
    <div class="w-64 bg-white shadow-md p-4 flex flex-col h-full">
        <h1 class="text-left mb-4">
            <img src="image/SMILE-LOGO.svg" alt="Smile logo" class="h-10">
        </h1>
        <ul class="space-y-2 flex-grow">
            <li><a href="/adminArtikel" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Artikel</a></li>
            <li><a href="/adminAntrian" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Antrian</a></li>
            <li><a href="/adminInformasi" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Informasi</a></li>
            <li><a href="/praktik" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Praktik</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Chat</a></li>
        </ul>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block w-full text-left px-4 py-2 text-red-600 font-bold hover:bg-red-100 rounded">Keluar</button>
        </form>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6 flex flex-col space-y-4">
        <!-- Navbar -->
        <div class="flex justify-between items-center bg-white p-4 shadow-md rounded-lg">
            <h2 class="text-2xl font-semibold">Informasi Admin</h2>
            <div class="flex items-center space-x-4">
                <span class="text-gray-700 text-sm">{{ Auth::user()->email }}</span>
                <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                    <span class="text-white font-semibold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                </div>
            </div>
        </div>

        <!-- Form Input -->
        <div class="bg-white shadow-md p-6 rounded">
            <h2 class="text-xl font-semibold mb-4">Masukan Informasi</h2>
            <form action="{{ route('informasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700">Judul Layanan</label>
                    <input type="text" name="judul" class="w-full p-2 border rounded mt-1" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Deskripsi Layanan</label>
                    <textarea name="deskripsi" class="w-full p-2 border rounded mt-1" rows="3" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Upload Gambar</label>
                    <input type="file" name="gambar" class="w-full p-2 border rounded mt-1">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Kirim</button>
            </form>
        </div>

        <!-- Form Tambah Jadwal -->
        <div class="bg-white shadow-md p-6 rounded">
            <h2 class="text-xl font-semibold mb-4">Tambah Jadwal Praktik</h2>
            <form id="addScheduleForm" action="#" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium">Tanggal</label>
                        <input type="date" name="tanggal" class="mt-1 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Waktu</label>
                        <input type="time" name="waktu" class="mt-1 p-2 w-full border rounded">
                    </div>
                </div>
                <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Tambah Jadwal</button>
            </form>            
        </div>

        <!-- Tabel Jadwal -->
        <div class="bg-white shadow-md p-6 rounded">
            <h2 class="text-xl font-semibold mb-4">Jadwal Praktik</h2>
            <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-2">Tanggal</th>
                        <th class="p-2">Dokter</th>
                        <th class="p-2">Waktu</th>
                        <th class="p-2">Status</th>
                        <th class="p-2">Aksi</th>
                    </tr>
                </thead>
                <tbody id="scheduleTable" class="text-center">
                    <!-- Data jadwal akan diisi oleh JavaScript -->
                </tbody>
            </table>
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
