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
                    :class="active === '/profil' ? 'text-blue-500 border-b-2 border-blue-500' :
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
                        placeholder="Masukkan nomor HP">
                </div>

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
            <script>
                document.getElementById('appointmentForm').addEventListener('submit', function(e) {
                    e.preventDefault(); // mencegah reload

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
                                form.reset(); // reset form
                                document.querySelector('[x-data]').__x.$data.openModal = false; // tutup modal
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

    <li>
        <!-- Garis Dash -->
        <div class="border-t-2 border-dashed border-gray-300 mt-28"></div>

        <!-- Tombol Logout -->
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
                    // Simulasi proses logout (hapus token/session)
                    localStorage.removeItem("userToken"); // Sesuaikan dengan sistem autentikasi
                    sessionStorage.clear();

                    // Notifikasi berhasil logout
                    Swal.fire({
                        title: "Berhasil Keluar!",
                        text: "Anda telah berhasil keluar.",
                        icon: "success",
                        timer: 2000,
                        showConfirmButton: false
                    });

                    // Redirect setelah delay
                    setTimeout(() => {
                        window.location.href = "/masuk"; // Ubah ke halaman login
                    }, 2000);
                }
            });
        }
    </script>

    </ul>
    </nav>
