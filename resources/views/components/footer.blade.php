<footer class="py-12 px-28" style="background: linear-gradient(to right, white, black, white); color: white;">
    <div class="grid gap-6 lg:grid-cols-3 lg:gap-8">
        <!-- Logo -->
        <div class="lg:col-span-1 flex items-center justify-center lg:justify-start">
            <img src="image/SMILE LOGO.png" alt="Logo Klinik" class="h-16">
        </div>

        <!-- Jam Operasional -->
        <div class="lg:col-span-1 text-center">
            <h2 class="text-[24px] font-bold">Jam Operasional</h2>
            <p class="mt-2">Senin - Jumat: 08:00 - 20:00</p>
            <p>Sabtu: 08:00 - 17:00</p>
            <p>Minggu: Tutup</p>
        </div>

        <!-- Hubungi Kami -->
        <div class="lg:col-span-1 text-center lg:text-right">
            <h2 class="text-[24px] font-bold">Hubungi Kami</h2>
            <p class="mt-2">Telepon: +62 123 4567 890</p>
            <p>Email: klinik@example.com</p>
            <p>Alamat: Jl. Contoh No. 123, Pangandaran</p>
        </div>
    </div>
    <div class="mt-12 lg:col-span-1 flex items-center justify-center">
        <p>&copy; 2025 SMILE. All rights reserved.</p>
    </div>
    <!-- Tombol Scroll ke Atas -->
    <button x-data="{ show: false }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 100 })"
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })" x-show="show"
        class="fixed bottom-10 right-10 bg-black text-white p-3 rounded-full shadow-lg transition-opacity duration-300"
        style="display: none;">
        ↑
    </button>
</footer>