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
            <img src="image/SMILE-LOGO.svg" alt="Smile logo" class="h-10">
        </h1>
        <ul class="space-y-2 flex-grow">
            <li><a href="/adminArtikel" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Artikel</a></li>
            <li><a href="/adminAntrian" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Antrian</a></li>
            <li><a href="/adminInformasi" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Informasi</a></li>
            <li><a href="/adminPraktik" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Praktik</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-black hover:text-white rounded">Chat</a></li>
        </ul>
        {{-- <button onclick="toggleLogoutPopup(true)" class="block w-full text-left px-4 py-2 text-red-600 font-bold hover:bg-red-100 rounded">Keluar</button> --}}
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6 flex flex-col">
        
        <!-- Navbar -->
        <div class="flex justify-between items-center bg-white p-4 shadow-md rounded-lg">
            <h2 class="text-2xl font-semibold">Artikel Admin</h2>

            <!-- Profile Section -->
            {{-- <div class="flex items-center space-x-4">
                <span class="text-gray-700 text-sm">{{ Auth::user()->email }}</span>
                <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                    <span class="text-white font-semibold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                </div>
            </div> --}}
        </div>

        <!-- Form Input -->
        <div class="bg-white shadow-md p-6 rounded mt-4">
            <h2 class="text-xl font-semibold mb-4">Form Input</h2>
            <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="judulArtikel" class="block text-gray-700">Judul Artikel</label>
                    <input type="text" name="judul_artikel" id="judulArtikel" class="w-full p-2 border rounded mt-1" required>
                </div>
            
                <div class="mb-4">
                    <label for="deskripsiArtikel" class="block text-gray-700">Deskripsi</label>
                    <textarea name="deskripsi_artikel" id="deskripsiArtikel" class="w-full p-2 border rounded mt-1" rows="3" required></textarea>
                </div>
            
                <div class="mb-4">
                    <label for="gambarArtikel" class="block text-gray-700">Upload Gambar</label>
                    <input type="file" name="gambar" id="gambarArtikel" class="w-full p-2 border rounded mt-1">
                </div>
            
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Kirim</button>
            </form>
            
            
        </div>
    </div>

    <!-- Logout Confirmation Popup -->
    <div id="logoutPopup" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
            <h3 class="text-lg font-semibold mb-4">Konfirmasi Keluar</h3>
            <p class="mb-4">Apakah Anda yakin ingin keluar?</p>
            <div class="flex justify-end space-x-2">
                <button type="button" onclick="toggleLogoutPopup(false)" class="px-4 py-2 bg-gray-300 rounded-lg">Batal</button>
                {{-- <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg">Keluar</button>
                </form> --}}
            </div>
        </div>
    </div>


    <script>
        function togglePopup(show) {
            document.getElementById('editProfilePopup').classList.toggle('hidden', !show);
        }
        // function toggleLogoutPopup(show) {
        //     document.getElementById('logoutPopup').classList.toggle('hidden', !show);
        // }
        document.querySelectorAll('.w-64 a').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.w-64 a').forEach(link => link.classList.remove('bg-black', 'text-white'));
                this.classList.add('bg-black', 'text-white');
            });
        });
    </script>

</body>
</html>
