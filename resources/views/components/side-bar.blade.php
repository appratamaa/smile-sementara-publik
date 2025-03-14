<!-- Navigasi Sidebar -->
<nav>
    <ul x-data="{ active: window.location.pathname }" class="space-y-2" x-init="active = window.location.pathname">
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
            <!-- Garis Dash -->
            <div class="border-t-2 border-dashed border-gray-300 mt-28"></div>
        
            <!-- Tombol Logout -->
            <a href="#" @click="logout"
                class="mt-2 flex items-center gap-2 py-2 px-4 rounded transition duration-300 text-red-500 hover:text-red-600 hover:border-b-2 hover:border-red-500">
                <span>Keluar</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 002 2h3a2 2 0 002-2V5a2 2 0 00-2-2h-3a2 2 0 00-2 2v1"/>
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
