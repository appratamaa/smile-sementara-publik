<footer class="py-12 px-28 text-white" style="background: linear-gradient(to right, #1a1a1a, #333, #1a1a1a);">
    <div class="grid gap-10 lg:grid-cols-4">
        <!-- Logo & Deskripsi -->
        <div class="lg:col-span-1 flex flex-col items-center lg:items-start">
            <a href="/" aria-label="Beranda">
                <img src="image/SMILE-LOGO-3.svg" alt="Logo Klinik" class="h-16 mb-4" tabindex="0">
            </a>
            <p class="text-sm text-gray-300" tabindex="0">SMILE adalah klinik gigi yang berdedikasi memberikan layanan
                kesehatan gigi terbaik dengan teknologi modern dan tenaga medis profesional.</p>
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
            <p tabindex="0">Senin - Jumat: 15.00 - 19.00</p>
            <p tabindex="0">Sabtu & Minggu Tutup</p>
        </div>

        <!-- Hubungi Kami & Media Sosial -->
        <div class="lg:col-span-1 text-center lg:text-left">
            <h2 class="text-lg font-bold mb-4" tabindex="0">Hubungi Kami</h2>
            <p>Telepon: <a href="tel:+621234567890" class="hover:underline" tabindex="0"><br>+62 123 4567 890</a></p>
            <p>Email: <a href="mailto:klinik@example.com" class="hover:underline"
                    tabindex="0">drgrobetagustinus@gmail.com</a>
            </p>
            <p tabindex="0">Alamat: <br>Jl. Kb. Salak No.38, Kondangjajar, Kec. Cijulang, Kab. Pangandaran, Jawa Barat
                46394</p>

            <div class="mt-4 flex justify-center lg:justify-start space-x-4">
                <a href="#" class="hover:text-blue-400" aria-label="Facebook" tabindex="0"><i
                        class="fab fa-facebook fa-lg"></i></a>
                <a href="#" class="hover:text-pink-400" aria-label="Instagram" tabindex="0"><i
                        class="fab fa-instagram fa-lg"></i></a>
                <a href="#" class="hover:text-blue-500" aria-label="Twitter" tabindex="0"><i
                        class="fab fa-twitter fa-lg"></i></a>
                <a href="#" class="hover:text-green-400" aria-label="WhatsApp" tabindex="0"><i
                        class="fab fa-whatsapp fa-lg"></i></a>
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
<button id="accessibility-toggle"
class="fixed bottom-10 left-8 bg-blue-500 text-white p-4 rounded-full shadow-lg flex items-center justify-center w-14 h-14 hover:bg-blue-600 transition duration-300"
aria-label="Menu Aksesibilitas">
<i class="fas fa-universal-access text-2xl"></i>
</button>

<!-- Popup Aksesibilitas -->
<div id="accessibility-menu"
class="hidden fixed bottom-32 left-8 bg-white text-gray-800 p-6 rounded-lg shadow-xl w-64 border border-gray-200">
<h3 class="font-bold text-lg mb-3">Aksesibilitas</h3>

<!-- Toggle Text-to-Speech -->
<div class="flex justify-between items-center mb-3">
    <label for="toggle-voice" class="text-sm">Baca Teks</label>
    <input type="checkbox" id="toggle-voice" class="toggle-checkbox">
</div>

<!-- Toggle Kontras Tinggi -->
<div class="flex justify-between items-center mb-3">
    <label for="toggle-contrast" class="text-sm">Kontras Tinggi</label>
    <input type="checkbox" id="toggle-contrast" class="toggle-checkbox">
</div>

<!-- Toggle Perbesar Teks -->
<div class="flex justify-between items-center mb-3">
    <label for="toggle-text-size" class="text-sm">Perbesar Teks</label>
    <input type="checkbox" id="toggle-text-size" class="toggle-checkbox">
</div>

<!-- Toggle Highlight Tautan -->
<div class="flex justify-between items-center">
    <label for="toggle-links" class="text-sm">Highlight Tautan</label>
    <input type="checkbox" id="toggle-links" class="toggle-checkbox">
</div>
</div>


    <!-- Tombol Back to Top -->
    <button id="back-to-top"
        class="fixed bottom-10 right-8 bg-blue-500 text-white p-4 rounded-full shadow-lg hidden flex items-center justify-center w-14 h-14"
        aria-label="Kembali ke Atas">
        <i class="fas fa-arrow-up text-2xl"></i>
    </button>

    <script>
        const accessibilityToggle = document.getElementById("accessibility-toggle");
        const accessibilityMenu = document.getElementById("accessibility-menu");
        const toggleVoice = document.getElementById("toggle-voice");
        const toggleContrast = document.getElementById("toggle-contrast");
        const toggleTextSize = document.getElementById("toggle-text-size");
        const toggleLinks = document.getElementById("toggle-links");
        const backToTopButton = document.getElementById("back-to-top");

        // Speech Synthesis Setup
        let speechEnabled = false;
        const speech = new SpeechSynthesisUtterance();

        // Toggle Accessibility Menu
        accessibilityToggle.addEventListener("click", () => {
            accessibilityMenu.classList.toggle("hidden");
        });

        // Toggle Text-to-Speech
        toggleVoice.addEventListener("change", () => {
            speechEnabled = toggleVoice.checked;
            if (speechEnabled) {
                enableTextToSpeech();
            } else {
                disableTextToSpeech();
            }
        });

        function enableTextToSpeech() {
            document.querySelectorAll("a, p, h1, h2, h3, h4, h5, h6, button").forEach(el => {
                el.addEventListener("mouseenter", handleSpeechStart);
                el.addEventListener("mouseleave", handleSpeechStop);
            });
        }

        function disableTextToSpeech() {
            document.querySelectorAll("a, p, h1, h2, h3, h4, h5, h6, button").forEach(el => {
                el.removeEventListener("mouseenter", handleSpeechStart);
                el.removeEventListener("mouseleave", handleSpeechStop);
            });
            window.speechSynthesis.cancel();
        }

        function handleSpeechStart(event) {
            if (speechEnabled) {
                speech.text = event.target.innerText;
                window.speechSynthesis.speak(speech);
            }
        }

        function handleSpeechStop() {
            window.speechSynthesis.cancel();
        }

        // Toggle High Contrast Mode
        toggleContrast.addEventListener("change", () => {
            document.body.classList.toggle("high-contrast", toggleContrast.checked);
        });

        // Toggle Large Text
        toggleTextSize.addEventListener("change", () => {
            document.body.classList.toggle("large-text", toggleTextSize.checked);
        });

        // Toggle Highlight Links
        toggleLinks.addEventListener("change", () => {
            document.querySelectorAll("a").forEach(el => {
                el.classList.toggle("highlight-links", toggleLinks.checked);
            });
        });

        // Back to Top Button
        window.addEventListener("scroll", () => {
            if (window.scrollY > 200) {
                backToTopButton.classList.remove("hidden");
            } else {
                backToTopButton.classList.add("hidden");
            }
        });

        backToTopButton.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>

    <style>
        /* Mode Kontras Tinggi */
        .high-contrast {
            background-color: black !important;
            color: yellow !important;
        }

        .high-contrast a {
            color: orange !important;
        }

        /* Perbesar Teks */
        .large-text {
            font-size: 1.3em;
        }

        /* Highlight Tautan */
        .highlight-links {
            background-color: yellow;
            color: black;
            padding: 2px 4px;
            border-radius: 3px;
        }
    </style>
</footer>
