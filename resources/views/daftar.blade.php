<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="h-full bg-white">
    <div class="flex flex-col md:flex-row h-full">
        <div class="flex w-full md:w-1/2 flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-10 w-auto" src="image/SMILE LOGO.png" alt="SMILE">
                <h2 class="mt-5 text-center text-2xl font-bold text-gray-900">Daftar Akun</h2>
                <h3 class="mt-2 text-center text-gray-600">
                    Selamat datang di <b>Smile!</b> <br>
                    Daftar sekarang untuk menikmati layanan kesehatan gigi terbaik.
                </h3>
            </div>

            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                @if (session('success'))
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: '{{ session('success') }}',
                            timer: 5000,
                            showConfirmButton: false
                        }).then(() => {
                            window.location.href = "/masuk";
                        });
                    </script>
                @endif

                <!-- Tampilkan notifikasi error dengan SweetAlert -->
                @if ($errors->any())
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            Swal.fire({
                                icon: "error",
                                title: "Wadduh...",
                                html: "{!! implode('<br>', $errors->all()) !!}"
                            });
                        });
                    </script>
                @endif

                <form class="space-y-6" action="{{ route('daftar') }}" method="POST">
                    @csrf

                    <div>
                        <label for="nama_lengkap" class="block text-sm font-medium text-gray-900">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" required
                            class="block w-full mt-1 px-3 py-1.5 bg-white text-gray-900 rounded-md border outline-none focus:border-blue-500">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                        <input type="email" name="email" id="email" required
                            class="block w-full mt-1 px-3 py-1.5 bg-white text-gray-900 rounded-md border outline-none focus:border-blue-500">
                    </div>

                    <div>
                        <label for="nomor_hp" class="block text-sm font-medium text-gray-900">Nomor Handphone</label>
                        <input type="text" name="nomor_hp" id="nomor_hp" required
                            class="block w-full mt-1 px-3 py-1.5 bg-white text-gray-900 rounded-md border outline-none focus:border-blue-500">
                    </div>

                    <div>
                        <label for="kata_sandi" class="block text-sm font-medium text-gray-900">Kata Sandi</label>
                        <input type="password" name="kata_sandi" id="kata_sandi" required
                            class="block w-full mt-1 px-3 py-1.5 bg-white text-gray-900 rounded-md border outline-none focus:border-blue-500">
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center px-3 py-1.5 text-white font-semibold bg-black rounded-md hover:bg-blue-500">
                            Daftar
                        </button>
                    </div>
                </form>

                <p class="mt-4 text-center text-sm text-gray-500">
                    Sudah punya akun?
                    <a href="/masuk" class="font-semibold text-black hover:text-blue-500">Masuk</a>
                </p>
            </div>
        </div>

        <div class="hidden md:flex md:w-1/2 items-center justify-center bg-white">
            <div class="flex flex-col items-center">
                <div class="h-40 w-40 bg-white shadow-md"
                    style="width: 545px; height: 626px; border-radius: 50px; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);">
                    <img class="mt-24 mx-auto h-100 w-auto" src="image/GAMBAR MASUK.png" alt="SMILE">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
