<footer class="py-12 px-28 text-white" style="background: linear-gradient(to right, #1a1a1a, #333, #1a1a1a);">
    <div class="grid gap-10 lg:grid-cols-4">
        <!-- Logo & Deskripsi -->
        <div class="lg:col-span-1 flex flex-col items-center lg:items-start">
            <img src="image/SMILE-LOGO.svg" alt="Logo Klinik" class="h-16 mb-4">
            <p class="text-sm text-gray-300">SMILE adalah klinik gigi yang berdedikasi memberikan layanan kesehatan gigi terbaik dengan teknologi modern dan tenaga medis profesional.</p>
        </div>

        <!-- Layanan Kami -->
        <div class="lg:col-span-1 text-center lg:text-left">
            <h2 class="text-lg font-bold mb-4">Layanan Kami</h2>
            <ul class="text-gray-300 space-y-2">
                <li><a href="#" class="hover:underline">Pemeriksaan Gigi</a></li>
                <li><a href="#" class="hover:underline">Pemasangan Behel</a></li>
                <li><a href="#" class="hover:underline">Pemutihan Gigi</a></li>
                <li><a href="#" class="hover:underline">Pencabutan Gigi</a></li>
                <li><a href="#" class="hover:underline">Scaling Gigi</a></li>
            </ul>
        </div>

        <!-- Jam Operasional -->
        <div class="lg:col-span-1 text-center lg:text-left">
            <h2 class="text-lg font-bold mb-4">Jam Operasional</h2>
            <p>Senin - Jumat: 08:00 - 20:00</p>
            <p>Sabtu: 08:00 - 17:00</p>
            <p>Minggu: Tutup</p>
        </div>

        <!-- Hubungi Kami & Media Sosial -->
        <div class="lg:col-span-1 text-center lg:text-left">
            <h2 class="text-lg font-bold mb-4">Hubungi Kami</h2>
            <p>Telepon: <a href="tel:+621234567890" class="hover:underline">+62 123 4567 890</a></p>
            <p>Email: <a href="mailto:klinik@example.com" class="hover:underline">klinik@example.com</a></p>
            <p>Alamat: Jl. Contoh No. 123, Pangandaran</p>
            
            <div class="mt-4 flex justify-center lg:justify-start space-x-4">
                <a href="#" class="hover:text-blue-400"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="#" class="hover:text-pink-400"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="#" class="hover:text-blue-500"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="#" class="hover:text-green-400"><i class="fab fa-whatsapp fa-lg"></i></a>
            </div>
        </div>
    </div>

    <!-- Garis Pembatas -->
    <div class="border-t border-gray-700 my-8"></div>

    <div class="flex flex-col lg:flex-row justify-between items-center text-gray-400 text-sm">
        <p>&copy; 2025 SMILE. All rights reserved.</p>
        <div class="flex space-x-6">
            <a href="#" class="hover:underline">Kebijakan Privasi</a>
            <a href="#" class="hover:underline">Syarat & Ketentuan</a>
        </div>
    </div>

    <!-- Tombol Scroll ke Atas -->
    <button x-data="{ show: false }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 100 })"
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })" x-show="show"
        class="fixed bottom-10 right-10 bg-gray-800 text-white p-3 rounded-full shadow-lg transition-opacity duration-300"
        style="display: none;">
        ↑
    </button>
</footer>
