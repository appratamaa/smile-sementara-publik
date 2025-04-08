<!-- Modal (Menggunakan Alpine.js) -->
<div x-data="{ openModal: false }">
    <div class="flex justify-start lg:justify-start mt-2">
        <button @click="openModal = true"
            class="mt-6 rounded-md bg-blue-500 px-4 py-2 text-white font-semibold hover:bg-blue-700 transition duration-300 transform hover:scale-105">
            Buat Janji
        </button>
    </div>

    <!-- Modal Buat Janji -->
    <div x-cloak x-show="openModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-white p-6 rounded-xl shadow-xl max-w-md w-full relative max-h-[90vh] overflow-y-auto">
            <!-- Tombol Close -->
            <button @click="openModal = false" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-lg">
                ✖
            </button>
            <h2 class="text-lg font-bold text-gray-800 mb-4 text-center">Buat Janji</h2>

            <form id="appointmentForm" action="{{ route('appointments.store') }}" method="POST">
                @csrf

                <!-- Nomor HP -->
                <div class="mb-3">
                    <label for="nomor_hp" class="block text-gray-700 text-sm">Nomor HP</label>
                    <input type="text" name="nomor_hp" id="nomor_hp"
                        value="{{ old('nomor_hp', $pengguna->nomor_hp ?? '') }}"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="085xxxxxxxxx">
                </div>

                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="block text-gray-700 text-sm">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        placeholder="Matt Wijaya" required>
                </div>

                <!-- Usia & Jenis Kelamin -->
                <div class="flex gap-2">
                    <div class="w-1/2">
                        <label for="usia" class="block text-gray-700 text-sm">Usia</label>
                        <input type="number" name="usia" id="usia"
                            class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="21" min="0" required>
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
                    <label for="alamat" class="block text-gray-700 text-sm">Alamat</label>
                    <input type="text" name="alamat" id="alamat"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        placeholder="Cijulang, Pangandaran" required>
                </div>

                <!-- Tanggal & Tujuan -->
                <div class="mb-3">
                    <label for="tanggal" class="block text-gray-700 text-sm">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                </div>

                <div class="mb-4" x-data="{ tujuan: '', lainnya: '' }">
                    <label for="tujuan" class="block text-gray-700 text-sm">Tujuan</label>
                    <select name="tujuan_select" id="tujuan"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        x-model="tujuan" required>
                        <option disabled selected value="">Pilih tujuan...</option>
                        <option value="Pemeriksaan Rutin">Pemeriksaan Rutin</option>
                        <option value="Cabut Gigi">Cabut Gigi</option>
                        <option value="Pasang Behel">Pasang Behel</option>
                        <option value="Pembersihan Karang Gigi">Pembersihan Karang Gigi</option>
                        <option value="Tambal Gigi">Tambal Gigi</option>
                        <option value="Pembuatan Gigi Palsu">Pembuatan Gigi Palsu</option>
                        <option value="Perawatan Saluran Akar">Perawatan Saluran Akar</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>

                    <!-- Input muncul kalau pilih Lainnya -->
                    <template x-if="tujuan === 'Lainnya'">
                        <input type="text" name="tujuan"
                            class="w-full mt-2 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="Tuliskan tujuan lainnya..." x-model="lainnya" required>
                    </template>

                    <!-- Hidden input untuk tujuan jika tidak 'Lainnya' -->
                    <template x-if="tujuan !== 'Lainnya' && tujuan !== ''">
                        <input type="hidden" name="tujuan" :value="tujuan">
                    </template>
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
