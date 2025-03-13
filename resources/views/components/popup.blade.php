<!-- Modal (Menggunakan Alpine.js) -->
<div x-data="{ openModal: false }">
    <div class="flex justify-start lg:justify-start mt-2">
        <button @click="openModal = true"
            class="mt-6 rounded-md bg-blue-500 px-5 py-2.5 text-white font-semibold hover:bg-blue-700 transition duration-300 transform hover:scale-105">
            Buat Janji
        </button>
    </div>

    <!-- Popup Modal -->
    <div x-cloak x-show="openModal"
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-white p-8 rounded-xl shadow-2xl max-w-md w-full relative">
            <!-- Tombol Close -->
            <button @click="openModal = false"
                class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-xl">
                ✖
            </button>
            <h2 class="text-xl font-bold text-gray-800 mb-5">Buat Janji</h2>
            <form id="appointmentForm" action="{{ route('appointments.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-medium">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        placeholder="Masukkan nama Anda" required>
                </div>
                <div class="mb-4">
                    <label for="tanggal" class="block text-gray-700 font-medium">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                </div>
                <div class="mb-4">
                    <label for="tujuan" class="block text-gray-700 font-medium">Tujuan</label>
                    <select name="tujuan" id="tujuan"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                        <option>Pemeriksaan Rutin</option>
                        <option>Cabut Gigi</option>
                        <option>Pasang Behel</option>
                        <option>Pembersihan Karang Gigi</option>
                        <option>Tambal Gigi</option>
                        <option>Pembuatan Gigi Palsu</option>
                        <option>Perawatan Saluran Akar</option>
                    </select>
                </div>
                <button type="submit"
                    class="w-full bg-blue-500 text-white font-semibold px-5 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                    Buat Janji
                </button>
            </form>
        </div>
    </div>
</div>
