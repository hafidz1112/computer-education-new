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

    <header class="fixed top-0 right-0 z-50 w-full bg-white backdrop-blur-md border-b border-white/30 shadow-sm px-6 md:px-24 py-2.5">
  <div class="flex items-center justify-between w-full md:px">

    <!-- Logo -->
    <a href="#" class="text-2xl text-green-600 flex items-center">
      <img class="w-[110px]" src="{{ asset('images/logo.png') }}" alt="Logo CE"/>
    </a>

    <!-- Menu Icon Mobile -->
    <div id="menu-icon" class="md:hidden cursor-pointer text-2xl text-green-600">
      <i class="ph ph-list"></i>
    </div>

    <!-- Menu Tengah -->
    <ul id="menu-list"
      class="hidden absolute md:static top-full left-0 bg-white md:bg-transparent w-full md:w-auto flex-col md:flex-row gap-8 md:gap-4 text-center shadow-md md:shadow-none py-6 md:py-0
      md:flex mx-auto px-[10px]">
      <li class="pb-[10px] md:pb-0"><a class="px-4 py-2 text-green-600 hover:text-white hover:bg-green-600 rounded-md" href="/">Home</a></li>
      <li class="pb-[10px] md:pb-0"><a class="px-4 py-2 text-green-600 hover:text-white hover:bg-green-600 rounded-md" href="/#about">About Us</a></li>
      <li class="pb-[10px] md:pb-0"><a class="px-4 py-2 text-green-600 hover:text-white hover:bg-green-600 rounded-md" href="/#learning">Learning</a></li>
      <li class="pb-[10px] md:pb-0"><a class="px-4 py-2 text-green-600 hover:text-white hover:bg-green-600 rounded-md " href="/#pengurus">Pengurus</a></li>

      <!-- Button Login khusus mobile -->
      <li class="md:hidden px-6 border-t-2 border-gray-200 pt-2">
        <a href="/login" class="block border-2 border-[#29bb17] text-[#29bb17] text-[17px] py-2 rounded-md hover:bg-[#29bb17] hover:text-white p-0 m-0">Login</a>
      </li>
    </ul>

    <!-- Button Login Desktop -->
    <a href="/login"
      class="hidden md:block bg-[#29bb17] text-white px-5 py-2 rounded-lg text-base font-medium">
      Login
    </a>
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
