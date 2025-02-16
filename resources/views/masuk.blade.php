<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="https://rsms.me/inter/inter.css" /> --}}
    <title>Masuk</title>
</head>
<body class="h-full">
  <div class="flex flex-col md:flex-row h-full">
    <!-- Left side -->
    <div class="hidden md:flex md:w-1/2 items-center justify-center bg-white">
      <div class="flex flex-col items-center">
        <div class="h-40 w-40 bg-white shadow-md" style="width: 545px; height: 626px; border-radius: 50px; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);">
          <img class="mt-24 mx-auto h-100 w-auto" src="image/GAMBAR MASUK.png" alt="SMILE">
        </div>
      </div>
    </div>
    <!-- Right side -->
    <div class="flex w-full md:w-1/2 flex-col justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="image/SMILE LOGO.png" alt="SMILE">
        <h2 class="mt-5 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Masuk</h2>
        <h3 class="mt-2 text-center tracking-tight text-gray-600">Selamat datang di <b>Smile!</b><br> Masuk sekarang untuk menikmati layanan kesehatan gigi terbaik dan berbagai kemudahan dalam merawat senyum Anda.</h3>
      </div>

      <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="{{ route('login') }}" method="POST">
          @csrf
          <div>
            <label for="contact" class="block text-sm/6 font-medium text-gray-900">Nomor handphone/Email</label>
            <div class="mt-2">
              <input type="text" name="contact" id="contact" autocomplete="tel email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-500 sm:text-sm/6">
            </div>
          </div>

          <div>
            <div class="flex items-center justify-between">
              <label for="password" class="block text-sm/6 font-medium text-gray-900">Kata sandi</label>
              <div class="text-sm">
                <a href="#" class="font-semibold text-black hover:text-blue-500">Lupa kata sandi?</a>
              </div>
            </div>
            <div class="mt-2">
              <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blur-500 sm:text-sm/6">
            </div>
          </div>

          <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-black px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500">Masuk</button>
          </div>
          
        </form>

        <p class="mt-10 text-center text-sm/6 text-gray-500">
          Belum punya akun?
          <a href="/daftar" class="font-semibold text-black hover:text-blue-500">Buat akun</a>
        </p>
      </div>
    </div>
  </div>
</body>
</html>