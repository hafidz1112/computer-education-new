<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman coba-coba</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/phosphor-icons"></script>
</head>
<body class="bg-gray-50">

    <!-- HEADER -->
    <header class="fixed top-0 right-0 z-50 flex w-full flex-col bg-white/20 backdrop-blur-md border border-white/30 shadow-md md:flex-row md:items-center md:justify-between md:px-24 px-6 py-2.5">
  <div class="flex w-full items-center justify-between">
    <a href="#" class="text-2xl text-green-600">
      <img class="w-[100px]" src="{{ asset('images/logo.png') }}" alt="Logo CE"/>
    </a>
    <div id="menu-icon" class="cursor-pointer text-2xl text-green-600 md:hidden">
      <i class="ph ph-list"></i>
    </div>
  </div>

  <ul id="menu-list" class="hidden w-full flex-col gap-4 md:flex md:w-auto md:flex-row md:items-center md:p-0">
    <li><a class="block rounded-md px-4 py-2 text-green-600 hover:bg-green-600 hover:text-white" href="/">Home</a></li>
    <li><a class="block rounded-md px-4 py-2 text-green-600 hover:bg-green-600 hover:text-white" href="/#about">About Us</a></li>
    <li><a class="block rounded-md px-4 py-2 text-green-600 hover:bg-green-600 hover:text-white" href="#learning">Learning</a></li>
    <li><a class="block rounded-md px-4 py-2 text-green-600 hover:bg-green-600 hover:text-white" href="#pengurus">Pengurus</a></li>
  </ul>

  <div class="hidden items-center text-2xl md:flex">
    <button class="rounded-md border-none bg-[#29bb17] px-4 py-2 text-base font-medium text-white">
      <a href="./learning/login.html">Login</a>
    </button>
  </div>
</header>


    <script>
      // Toggle menu mobile
      document.getElementById('menu-icon').addEventListener('click', () => {
        document.getElementById('menu-container').classList.toggle('hidden');
      });
    </script>

</body>
</html>
