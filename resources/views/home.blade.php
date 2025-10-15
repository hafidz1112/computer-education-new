<x-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Computer Education</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-green-100 via-white to-green-200">

  <!-- Hero Section -->
  <section class="h-screen pb-20 text-center lg:px-20 px-0">
    <!-- Background pattern -->
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/hexellence.png')] opacity-20"></div>

    <div class="z-10 grid grid-cols-1 sm:grid-cols-2 justify-between items-center">
    <div class="w-full">
        <h1 class="text-5xl font-extrabold text-green-600 mb-4">WELCOME TO COMPUTER EDUCATION</h1>
        <p class="text-lg text-gray-700 mb-10">Salam Teknologi</p>
    </div>
    

      <div class="flex justify-center items-center mt-8 w-full">
        <img src="{{ asset('images/Maskot_CE-removebg-preview.png') }}" alt="Maskot" class="w-[500px] h-auto animate-bounce-slow">
        <img src="{{ asset('images/coding.png') }}" alt="Code Icon" class="h-16 animate-pulse absolute">
      </div>
    </div>
  </section>

  <!-- Tentang CE -->
  <section id="about" class="bg-green-500 text-white py-16 px-10">
    <div class="container mx-auto grid md:grid-cols-2 gap-10 items-center">
      <div class="rounded-2xl">
          <img src="{{ asset('images/harlah 23.jpg') }}" alt="Tentang CE" class="block mx-auto w-[500px] h-[300px] rounded-2xl overflow-hidden">
      </div>

      <div>
        <h2 class="text-3xl font-bold mb-4">TENTANG CE</h2>
        <p class="text-lg leading-relaxed">
          Computer Education adalah platform pembelajaran berbasis teknologi yang berfokus pada peningkatan keterampilan digital dan pengembangan sumber daya manusia di bidang IT. 
          Kami hadir dengan semangat inovasi dan kolaborasi untuk menciptakan lingkungan belajar yang kreatif, modern, dan berdaya guna.
        </p>
      </div>
    </div>
  </section>

  <section class="px-5 py-12 md:px-24" id="learning">
      <div class="p-5">
        <h1 class="text-2xl md:text-3xl">Belajar apa aja sih di CE?</h1>
        <div class="mt-1 h-1 w-[300px] rounded-full bg-[#29bb17]"></div>
        <p class="mt-4 text-base md:text-xl">
          Bergabung dengan Computer Education bukan sekadar menjadi bagian dari
          organisasi—ini adalah perjalanan untuk tumbuh, belajar, dan berkembang
          bersama. Di sini, kamu akan mempelajari dasar-dasar hingga
          keterampilan lanjutan dalam dunia teknologi,
        </p>
      </div>
      <div class="swiper learn-container w-full overflow-hidden py-5">
        <div class="swiper-wrapper py-8">
          <div class="swiper-slide flex-shrink-0 text-center">
            <img src="gambar/programing-learn.jpg" alt="Programming" class="mx-auto block h-auto w-4/5 max-w-[200px] rounded-lg" />
            <h2 class="mt-2 text-xl font-semibold">Programming</h2>
          </div>
          <div class="swiper-slide flex-shrink-0 text-center">
            <img src="gambar/desainGrafis-learn.jpg" alt="Desain Grafis" class="mx-auto block h-auto w-4/5 max-w-[200px] rounded-lg" />
            <h2 class="mt-2 text-xl font-semibold">Desain Grafis</h2>
          </div>
          <div class="swiper-slide flex-shrink-0 text-center">
            <img src="gambar/fotografer-learn.jpg" alt="Fotografi" class="mx-auto block h-auto w-4/5 max-w-[200px] rounded-lg" />
            <h2 class="mt-2 text-xl font-semibold">Fotografi</h2>
          </div>
          <div class="swiper-slide flex-shrink-0 text-center">
            <img src="gambar/editingVideo-learnjpg.jpg" alt="Video Editing" class="mx-auto block h-auto w-4/5 max-w-[200px] rounded-lg" />
            <h2 class="mt-2 text-xl font-semibold">Video Editing</h2>
          </div>
          <div class="swiper-slide flex-shrink-0 text-center">
            <img src="gambar/SistemOperasi-learn.jpg" alt="Sistem Operasi" class="mx-auto block h-auto w-4/5 max-w-[200px] rounded-lg" />
            <h2 class="mt-2 text-xl font-semibold">Sistem Operasi</h2>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="mt-5 flex h-[100px] items-center justify-center text-center">
        <a href="/moduls" class="w-[300px] rounded-full bg-[#29bb17] p-4 text-lg text-white shadow-lg transition-transform duration-200 ease-in-out hover:scale-105 md:w-[400px]">Belajar Sekarang</a>
      </div>
      <div class="mt-4 text-center">
        <p class="text-lg">Yuk mari belajar bersama kita</p>
      </div>
    </section>


  <style>
    @keyframes bounce-slow {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
    .animate-bounce-slow {
      animation: bounce-slow 3s infinite;
    }
  </style>

</body>
</html>


</x-layout>