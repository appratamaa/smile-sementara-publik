<!-- Navigasi Sidebar + Modal Buat Janji -->
<div x-data="{ active: window.location.pathname, openModal: false }" x-init="active = window.location.pathname">
    <nav>
        <ul class="space-y-2">
            <li>
                <a href="/beranda"
                    :class="active === '/beranda' ? 'text-blue-500 border-b-2 border-blue-500' :
                        'text-black hover:text-blue-500 hover:border-b-2 hover:border-blue-500'"
                    class="block py-2 px-4 rounded transition duration-300">
                    Rekam Medis
                </a>
            </li>
            <li>
                <a href="/profil"
                    :class="active.includes('/profil') ? 'text-blue-500 border-b-2 border-blue-500' :
                        'text-black hover:text-blue-500 hover:border-b-2 hover:border-blue-500'"
                    class="block py-2 px-4 rounded transition duration-300">
                    Profil
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" @click="openModal = true"
                    class="block py-2 px-4 rounded transition duration-300 text-black hover:text-blue-500 hover:border-b-2 hover:border-blue-500">
                    Buat Janji
                </a>
            </li>
            <li>
                <a href="/chatklinik"
                    :class="active === '/chatklinik' ? 'text-blue-500 border-b-2 border-blue-500' :
                        'text-black hover:text-blue-500 hover:border-b-2 hover:border-blue-500'"
                    class="block py-2 px-4 rounded transition duration-300">
                    Chat Dokter
                </a>
            </li>

            <!-- Garis Dash -->
            <li>
                <div class="border-t-2 border-dashed border-gray-300 mt-28"></div>
            </li>

            <!-- Tombol Logout -->
            <li>
                <a href="#" @click="logout"
                    class="mt-2 flex items-center gap-2 py-2 px-4 rounded transition duration-300 text-red-500 hover:text-red-600 hover:border-b-2 hover:border-red-500">
                    <span>Keluar</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 002 2h3a2 2 0 002-2V5a2 2 0 00-2-2h-3a2 2 0 00-2 2v1" />
                    </svg>
                </a>
            </li>
        </ul>
    </nav>

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

            <script>
                document.getElementById('appointmentForm').addEventListener('submit', function(e) {
                    e.preventDefault();

                    const form = e.target;
                    const formData = new FormData(form);

                    fetch(form.action, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            Swal.fire({
                                title: 'Berhasil!',
                                text: data.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                form.reset();
                                document.querySelector('[x-data]').__x.$data.openModal = false;
                            });
                        })
                        .catch(error => {
                            Swal.fire('Oops!', 'Terjadi kesalahan saat menyimpan janji.', 'error');
                            console.error(error);
                        });
                });
            </script>
        </div>
    </div>

    <!-- Tambahkan SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function logout() {
            Swal.fire({
                title: "Keluar",
                text: "Anda yakin ingin keluar?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, Keluar"
            }).then((result) => {
                if (result.isConfirmed) {
                    localStorage.removeItem("userToken");
                    sessionStorage.clear();

                    Swal.fire({
                        title: "Berhasil Keluar!",
                        text: "Anda telah berhasil keluar.",
                        icon: "success",
                        timer: 2000,
                        showConfirmButton: false
                    });

                    setTimeout(() => {
                        window.location.href = "/masuk";
                    }, 2000);
                }
            });
        }
    </script>
</div>
