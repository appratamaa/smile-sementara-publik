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
    <div>
        <x-sidebar-admin>
        </x-sidebar-admin>
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
            {{-- <div class="flex items-center space-x-4">
                <span class="text-gray-700 text-sm">{{ Auth::user()->email }}</span>
                <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                    <span class="text-white font-semibold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                </div>
            </div> --}}
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

</body>
</html>
