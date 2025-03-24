<!-- Main Content -->
<div class="flex-1 p-6 flex flex-col">
    <!-- Navbar -->
    <div class="flex justify-between items-center bg-white p-4 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold">Artikel Admin</h2>

        <!-- Profile Section -->
        <div class="flex items-center space-x-4">
            <span class="text-gray-700 text-sm">{{ Auth::user()->email }}</span>
            <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                <span class="text-white font-semibold">{{ substr(Auth::user()->name, 0, 1) }}</span>
            </div>
            <!-- Edit Button -->
            <button onclick="togglePopup(true)" class="text-blue-500 text-sm">Edit</button>
        </div>
    </div>
</div>

<!-- Edit Profile Popup -->
<div id="editProfilePopup" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
        <button onclick="togglePopup(false)" class="absolute top-2 right-2 text-gray-500">&times;</button>
        <h3 class="text-lg font-semibold mb-4">Edit Profil</h3>
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="name" value="{{ Auth::user()->name }}" class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" value="{{ Auth::user()->email }}" class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div class="flex justify-end space-x-2">
                <button type="button" onclick="togglePopup(false)" class="px-4 py-2 bg-gray-300 rounded-lg">Batal</button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- Script untuk menampilkan dan menyembunyikan popup -->
<script>
    function togglePopup(show) {
        document.getElementById('editProfilePopup').classList.toggle('hidden', !show);
    }
</script>
