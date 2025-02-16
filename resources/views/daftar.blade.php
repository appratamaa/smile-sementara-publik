<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Daftar</title>
</head>
<body class="h-full">
    <div class="flex flex-col md:flex-row h-full">
      <!-- Left side -->
      <div class="mt-6 flex w-full md:w-1/2 flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-10 w-auto" src="image/SMILE LOGO.png" alt="SMILE">
          <h2 class="mt-5 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Daftar Akun</h2>
          <h3 class="mt-2 text-center tracking-tight text-gray-600">Selamat datang di <b>Smile!</b><br> Daftar sekarang untuk menikmati layanan kesehatan gigi terbaik dan berbagai kemudahan dalam merawat senyum Anda.</h3>
        </div>
  
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="{{ route('daftar') }}" method="POST">
            @csrf
            <div>
              <label for="full_name" class="block text-sm/6 font-medium text-gray-900">Nama Lengkap</label>
              <div class="mt-1">
                <input type="text" name="full_name" id="full_name" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-500 sm:text-sm/6">
              </div>
            </div>
            <div>
              <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
              <div class="mt-1">
                <input type="email" name="email" id="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-500 sm:text-sm/6">
              </div>
            </div>
            <div>
              <label for="phone_number" class="block text-sm/6 font-medium text-gray-900">Nomor Handphone</label>
              <div class="mt-1">
                <input type="text" name="phone_number" id="phone_number" autocomplete="tel" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-500 sm:text-sm/6">
              </div>
            </div>
  
            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm/6 font-medium text-gray-900">Kata sandi</label>
              </div>
              <div class="mt-1">
                <input type="password" name="password" id="password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-500 sm:text-sm/6">
              </div>
            </div>
  
            <div>
              <button type="submit" class="flex w-full justify-center rounded-md bg-black px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500">Daftar</button>
            </div>
            
          </form>
  
          <p class="mt-4 text-center text-sm/6 text-gray-500">
            Sudah punya akun?
            <a href="/masuk" class="font-semibold text-black hover:text-blue-500">Masuk</a>
          </p>
        </div>
      </div>
      
      <!-- Right side -->
      <div class="hidden md:flex md:w-1/2 items-center justify-center bg-white">
        <div class="flex flex-col items-center">
          <div class="h-40 w-40 bg-white shadow-md" style="width: 545px; height: 626px; border-radius: 50px; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);">
            <img class="mt-24 mx-auto h-100 w-auto" src="image/GAMBAR MASUK.png" alt="SMILE">
          </div>
        </div>
      </div>
    </div>
  </body>  
</html>