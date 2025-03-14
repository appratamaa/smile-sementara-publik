<!-- Modal (Menggunakan Alpine.js) -->
<div x-data="{ openModal: false }">
    <div class="flex justify-start lg:justify-start mt-2">
        <button @click="openModal = true"
            class="mt-6 rounded-md bg-blue-500 px-4 py-2 text-white font-semibold hover:bg-blue-700 transition duration-300 transform hover:scale-105">
            Buat Janji
        </button>
    </div>

    <!-- Popup Modal -->
    <div x-cloak x-show="openModal"
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-white p-6 rounded-xl shadow-xl max-w-md w-full relative max-h-[90vh] overflow-y-auto">
            <!-- Tombol Close -->
            <button @click="openModal = false"
                class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-lg">
                ✖
            </button>
            <h2 class="text-lg font-bold text-gray-800 mb-4 text-center">Buat Janji</h2>
            
            <form id="appointmentForm" action="{{ route('appointments.store') }}" method="POST">
                @csrf

                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="block text-gray-700 text-sm">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        placeholder="Masukkan nama Anda" required>
                </div>

                <!-- Usia & Jenis Kelamin -->
                <div class="flex gap-2">
                    <div class="w-1/2">
                        <label for="usia" class="block text-gray-700 text-sm">Usia</label>
                        <input type="number" name="usia" id="usia"
                            class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="Usia" min="0" required>
                    </div>
                    <div class="w-1/2">
                        <label for="jenis_kelamin" class="block text-gray-700 text-sm">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin"
                            class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            required>
                            <option value="">Pilih</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="mb-3">
                    <label for="alamat" class="block text-gray-700 text-sm">Alamat Singkat</label>
                    <input type="text" name="alamat" id="alamat"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        placeholder="Alamat Anda" required>
                </div>

                <!-- Tanggal & Tujuan -->
                <div class="mb-3">
                    <label for="tanggal" class="block text-gray-700 text-sm">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                </div>

                <div class="mb-4">
                    <label for="tujuan" class="block text-gray-700 text-sm">Tujuan</label>
                    <select name="tujuan" id="tujuan"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
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

                <!-- Tombol Submit -->
                <button type="submit"
                    class="w-full bg-blue-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">
                    Buat Janji
                </button>
            </form>
        </div>
    </div>
</div>
