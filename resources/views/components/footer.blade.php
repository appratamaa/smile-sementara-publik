<footer class="py-12 px-28 text-white" style="background: linear-gradient(to right, #1a1a1a, #333, #1a1a1a);">
    <div class="grid gap-10 lg:grid-cols-4">
        <!-- Logo & Deskripsi -->
        <div class="lg:col-span-1 flex flex-col items-center lg:items-start">
            <img src="image/SMILE-LOGO.svg" alt="Logo Klinik" class="h-16 mb-4" tabindex="0">
            <p class="text-sm text-gray-300" tabindex="0">SMILE adalah klinik gigi yang berdedikasi memberikan layanan kesehatan gigi terbaik dengan teknologi modern dan tenaga medis profesional.</p>
        </div>

        <!-- Layanan Kami -->
        <div class="lg:col-span-1 text-center lg:text-left">
            <h2 class="text-lg font-bold mb-4" tabindex="0">Layanan Kami</h2>
            <ul class="text-gray-300 space-y-2">
                <li><a href="#" class="hover:underline" tabindex="0">Pemeriksaan Gigi</a></li>
                <li><a href="#" class="hover:underline" tabindex="0">Pemasangan Behel</a></li>
                <li><a href="#" class="hover:underline" tabindex="0">Pemutihan Gigi</a></li>
                <li><a href="#" class="hover:underline" tabindex="0">Pencabutan Gigi</a></li>
                <li><a href="#" class="hover:underline" tabindex="0">Scaling Gigi</a></li>
            </ul>
        </div>

        <!-- Jam Operasional -->
        <div class="lg:col-span-1 text-center lg:text-left">
            <h2 class="text-lg font-bold mb-4" tabindex="0">Jam Operasional</h2>
            <p tabindex="0">Senin - Jumat: 08:00 - 20:00</p>
            <p tabindex="0">Sabtu: 08:00 - 17:00</p>
            <p tabindex="0">Minggu: Tutup</p>
        </div>

        <!-- Hubungi Kami & Media Sosial -->
        <div class="lg:col-span-1 text-center lg:text-left">
            <h2 class="text-lg font-bold mb-4" tabindex="0">Hubungi Kami</h2>
            <p>Telepon: <a href="tel:+621234567890" class="hover:underline" tabindex="0">+62 123 4567 890</a></p>
            <p>Email: <a href="mailto:klinik@example.com" class="hover:underline" tabindex="0">klinik@example.com</a></p>
            <p tabindex="0">Alamat: Jl. Contoh No. 123, Pangandaran</p>
            
            <div class="mt-4 flex justify-center lg:justify-start space-x-4">
                <a href="#" class="hover:text-blue-400" aria-label="Facebook" tabindex="0"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="#" class="hover:text-pink-400" aria-label="Instagram" tabindex="0"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="#" class="hover:text-blue-500" aria-label="Twitter" tabindex="0"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="#" class="hover:text-green-400" aria-label="WhatsApp" tabindex="0"><i class="fab fa-whatsapp fa-lg"></i></a>
            </div>
        </div>
    </div>

    <!-- Garis Pembatas -->
    <div class="border-t border-gray-700 my-8"></div>

    <div class="flex flex-col lg:flex-row justify-between items-center text-gray-400 text-sm">
        <p tabindex="0">&copy; 2025 SMILE. All rights reserved.</p>
        <div class="flex space-x-6">
            <a href="#" class="hover:underline" tabindex="0">Kebijakan Privasi</a>
            <a href="#" class="hover:underline" tabindex="0">Syarat & Ketentuan</a>
        </div>
    </div>

    <!-- Tombol Aksesibilitas -->
    <button id="accessibility-toggle" class="fixed bottom-20 left-10 bg-blue-500 text-white p-3 rounded-full shadow-lg" aria-label="Menu Aksesibilitas" tabindex="0">
        <i class="fas fa-universal-access"></i>
    </button>

    <!-- Popup Aksesibilitas -->
    <div id="accessibility-menu" class="hidden fixed bottom-32 left-10 bg-white text-black p-4 rounded-lg shadow-lg w-64">
        <h3 class="font-bold mb-2" tabindex="0">Aksesibilitas</h3>
        <button id="toggle-voice" class="w-full p-2 bg-blue-500 text-white rounded mb-2" tabindex="0">Baca Teks</button>
        <button id="toggle-accessibility" class="w-full p-2 bg-red-500 text-white rounded" tabindex="0">Matikan Aksesibilitas</button>
    </div>

    <!-- Tombol Back to Top -->
    <button id="back-to-top" class="fixed bottom-10 right-10 bg-gray-700 text-white p-3 rounded-full shadow-lg hidden" aria-label="Kembali ke Atas" tabindex="0">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        document.getElementById("accessibility-toggle").addEventListener("click", function() {
            document.getElementById("accessibility-menu").classList.toggle("hidden");
        });

        let speech = new SpeechSynthesisUtterance();
        document.getElementById("toggle-voice").addEventListener("click", function() {
            document.querySelectorAll("a, p, h2").forEach(el => {
                el.addEventListener("mouseenter", function() {
                    speech.text = this.innerText;
                    window.speechSynthesis.speak(speech);
                });
                el.addEventListener("mouseleave", function() {
                    window.speechSynthesis.cancel();
                });
            });
        });

        document.getElementById("toggle-accessibility").addEventListener("click", function() {
            window.speechSynthesis.cancel();
            document.getElementById("accessibility-menu").classList.add("hidden");
        });
    </script>
</footer>
