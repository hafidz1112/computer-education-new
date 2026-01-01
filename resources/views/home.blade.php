<x-layout>
    <!-- Hero Section -->
    <section class="relative min-h-screen w-full pt-30 pb-20 overflow-hidden" id="home">
        <!-- Background Hexagons -->
        <div class="contener">
            <div class="curser"></div>
            <div class="row"><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div></div>
            <div class="row"><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div></div>
            <div class="row"><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div></div>
            <div class="row"><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div></div>
            <div class="row"><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div></div>
            <div class="row"><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><button class="hexagon"></button><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div></div>
            <div class="row"><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div></div>
            <div class="row"><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div></div>
            <div class="row"><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div></div>
            <div class="row"><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div></div>
            <div class="row"><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div><div class="hexagon"></div></div>
        </div>

        <!-- Content Grid -->
        <div class="container mx-auto px-6 md:px-12 relative z-10 grid md:grid-cols-2 gap-12 items-center h-full">
            
            <!-- Left Column: Text -->
            <div class="text-center md:text-left space-y-6">
                <h1 class="text-4xl md:text-6xl font-extrabold uppercase tracking-tight text-transparent bg-clip-text bg-gradient-to-br from-green-600 to-emerald-400 drop-shadow-sm">
                    Welcome to <br>
                    <span class="text-gray-800">Computer Education</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 font-medium">
                    Salam Teknologi. Innovate, Create, and Inspire.
                </p>
                <div class="flex justify-center md:justify-start">
                    <a href="#learning" class="px-8 py-3 bg-green-600 text-white rounded-full font-semibold shadow-lg hover:bg-green-700 transition transform hover:scale-105">
                        Start Learning
                    </a>
                </div>
            </div>

            <!-- Right Column: Visuals (Mascot & Floating Icons) -->
            <div class="relative flex justify-center items-center h-[400px] md:h-[500px]">
                <!-- Rotating Background behind Mascot -->
                <img src="{{asset('images/rotasi.png')}}" 
                     class="rotasi-img absolute w-[300px] md:w-[450px] opacity-80" 
                     alt="Rotating Background" />
                
                <!-- Mascot -->
                <img src="{{asset('images/Maskot_CE-removebg-preview.png')}}" 
                     class="logo-mantul relative z-20 w-[200px] md:w-[280px] drop-shadow-2xl" 
                     alt="Mascot CE" />

                <!-- Floating Icons (Positioned relative to this column) -->
                <!-- CorelDraw -->
                <div class="animasi-satu absolute top-0 left-0 md:left-10 z-30">
                    <img src="{{asset('images/coreldraw.png')}}" 
                         class="w-16 h-16 md:w-20 md:h-20 drop-shadow-lg" 
                         alt="CorelDraw" />
                </div>

                <!-- Coding -->
                <img src="{{asset('images/coding.png')}}" 
                     class="animasi-2 absolute bottom-10 left-0 md:left-10 z-30 w-14 h-14 md:w-16 md:h-16 drop-shadow-lg" 
                     alt="Coding" />

                <!-- Video -->
                <img src="{{asset('images/video.png')}}" 
                     class="animasi-3 absolute bottom-20 right-0 md:right-10 z-30 w-14 h-14 md:w-16 md:h-16 drop-shadow-lg" 
                     alt="Video" />

                <!-- Camera -->
                <img src="{{asset('images/cameraa.png')}}" 
                     class="animasi-4 absolute top-10 right-0 md:right-5 z-30 w-14 h-14 md:w-16 md:h-16 drop-shadow-lg" 
                     alt="Camera" />
            </div>
        </div>
    </section>

    <!-- Tentang CE -->
    <section id="about" class="bg-gradient-to-b from-green-500 to-emerald-600 text-white py-20 px-6">
        <div class="container mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div class="rounded-3xl overflow-hidden shadow-2xl transform hover:scale-[1.02] transition duration-500">
                <img src="{{ asset('images/harlah 23.jpg') }}" alt="Tentang CE"
                    class="w-full h-auto object-cover">
            </div>

            <div class="space-y-6">
                <div class="inline-block px-4 py-1 bg-white/20 rounded-full text-sm font-semibold tracking-wider">ABOUT US</div>
                <h2 class="text-4xl md:text-5xl font-bold leading-tight">Membangun Generasi <br> Teknologi Masa Depan</h2>
                <p class="text-lg text-green-50 leading-relaxed">
                    Computer Education adalah platform pembelajaran berbasis teknologi yang berfokus pada
                    peningkatan keterampilan digital dan pengembangan sumber daya manusia di bidang IT.
                    Kami hadir dengan semangat inovasi dan kolaborasi untuk menciptakan lingkungan belajar yang
                    kreatif, modern, dan berdaya guna.
                </p>
                <div class="pt-4">
                    <a href="#" class="inline-flex items-center gap-2 text-white font-semibold hover:text-green-100 transition">
                        Learn More <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Learning Tracks -->
    <section class="relative py-24 bg-gray-50 overflow-hidden" id="learning">
        <!-- Decoration -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-green-200/20 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-emerald-200/20 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <!-- Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-green-600 font-semibold tracking-wider uppercase text-sm font-sans">Kurikulum Kami</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-2 mb-6">Explore Our Learning Tracks.</h2>
                <div class="w-20 h-1.5 bg-gradient-to-r from-green-500 to-emerald-400 mx-auto rounded-full mb-6"></div>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Kami menyediakan berbagai divisi pembelajaran untuk meningkatkan skill digitalmu, dari coding hingga kreatif visual.
                </p>
            </div>

            <!-- Swiper -->
            <div class="swiper learn-container !pb-12 !px-4">
                <div class="swiper-wrapper">
                    <!-- Programming -->
                    <div class="swiper-slide group">
                        <div class="bg-white rounded-2xl p-3 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 h-full border border-gray-100 cursor-pointer">
                            <div class="relative h-48 w-full rounded-xl overflow-hidden mb-5">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <img src="{{ asset('images/programing-learn.jpg') }}" alt="Programming" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                <div class="absolute bottom-4 left-4 z-20 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                                    <span class="px-3 py-1 bg-green-500 text-white text-xs font-bold rounded-full">Divisi Utama</span>
                                </div>
                            </div>
                            <div class="px-2 pb-4">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors">Programming</h3>
                                <p class="text-gray-500 text-sm leading-relaxed mb-4 line-clamp-2">
                                    Pelajari bahasa pemrograman modern, web development, dan mobile apps.
                                </p>
                                <span class="inline-flex items-center text-green-600 font-semibold text-sm hover:underline">
                                    Lihat Silabus <i class="ph ph-arrow-right ml-2"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                     <!-- Desain Grafis -->
                     <div class="swiper-slide group">
                        <div class="bg-white rounded-2xl p-3 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 h-full border border-gray-100 cursor-pointer">
                            <div class="relative h-48 w-full rounded-xl overflow-hidden mb-5">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <img src="{{ asset('images/desainGrafis-learn.jpg') }}" alt="Desain Grafis" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="px-2 pb-4">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors">Desain Grafis</h3>
                                <p class="text-gray-500 text-sm leading-relaxed mb-4 line-clamp-2">
                                    Ciptakan visual yang memukau dengan tools desain standar industri.
                                </p>
                                <span class="inline-flex items-center text-green-600 font-semibold text-sm hover:underline">
                                    Lihat Modul <i class="ph ph-arrow-right ml-2"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Fotografi -->
                    <div class="swiper-slide group">
                        <div class="bg-white rounded-2xl p-3 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 h-full border border-gray-100 cursor-pointer">
                            <div class="relative h-48 w-full rounded-xl overflow-hidden mb-5">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <img src="{{ asset('images/cameraa.png') }}" alt="Fotografi" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="px-2 pb-4">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors">Fotografi</h3>
                                <p class="text-gray-500 text-sm leading-relaxed mb-4 line-clamp-2">
                                    Tangkap momen terbaik dan pelajari teknik komposisi visual.
                                </p>
                                <span class="inline-flex items-center text-green-600 font-semibold text-sm hover:underline">
                                    Lihat Galeri <i class="ph ph-arrow-right ml-2"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Video Editing -->
                    <div class="swiper-slide group">
                        <div class="bg-white rounded-2xl p-3 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 h-full border border-gray-100 cursor-pointer">
                            <div class="relative h-48 w-full rounded-xl overflow-hidden mb-5">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <!-- Fix placeholder -->
                                <img src="{{ asset('images/cameraa.png') }}" alt="Video Editing" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="px-2 pb-4">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors">Video Editing</h3>
                                <p class="text-gray-500 text-sm leading-relaxed mb-4 line-clamp-2">
                                    Edit video sinematik dan konten kreatif untuk media sosial.
                                </p>
                                <span class="inline-flex items-center text-green-600 font-semibold text-sm hover:underline">
                                    Lihat Karya <i class="ph ph-arrow-right ml-2"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Sistem Operasi -->
                    <div class="swiper-slide group">
                        <div class="bg-white rounded-2xl p-3 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 h-full border border-gray-100 cursor-pointer">
                            <div class="relative h-48 w-full rounded-xl overflow-hidden mb-5">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <!-- Fix placeholder -->
                                <img src="{{ asset('images/programing-learn.jpg') }}" alt="Sistem Operasi" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="px-2 pb-4">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors">Sistem Operasi</h3>
                                <p class="text-gray-500 text-sm leading-relaxed mb-4 line-clamp-2">
                                    Pahami cara kerja sistem komputer dan manajemen jaringan dasar.
                                </p>
                                <span class="inline-flex items-center text-green-600 font-semibold text-sm hover:underline">
                                    Pelajari Lebih Lanjut <i class="ph ph-arrow-right ml-2"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Controls -->
                <div class="swiper-pagination"></div>
            </div>
            
            <!-- Call to Action -->
            <div class="mt-12 text-center">
                 <a href="/moduls" class="inline-flex items-center gap-2 px-8 py-4 bg-gray-900 hover:bg-green-600 text-white rounded-full font-semibold transition-all duration-300 shadow-xl hover:shadow-green-500/25 group">
                    <span>Mulai Belajar Sekarang</span>
                    <i class="ph ph-rocket text-xl group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>
    
    {{-- Pengurus --}}
    <section class="sec-pengurus py-20 bg-white" id="pengurus">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900">Pengurus Kami</h1>
            <p class="text-gray-500 mt-2">Meet the team behind Computer Education</p>
        </div>

        <div class="swiper pengurus-slider w-full px-4">
            <div class="swiper-wrapper py-8">

                @forelse ($pengurus as $item)
                <div class="swiper-slide flex justify-center">
                    <div class="bg-white w-72 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-6 text-center border border-gray-100">
                        <div class="relative w-32 h-32 mx-auto mb-4">
                             <div class="absolute inset-0 bg-green-200 rounded-full blur-lg opacity-50"></div>
                             <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama }}"
                                class="relative w-full h-full rounded-full object-cover border-4 border-white shadow-md">
                        </div>
                        
                        <h3 class="mt-4 text-xl font-bold text-gray-800">{{ $item->nama }}</h3>
                        <p class="mt-1 text-green-600 font-medium text-sm bg-green-50 inline-block px-3 py-1 rounded-full">{{ $item->jabatan }}</p>
                    </div>
                </div>
                @empty
                <div class="swiper-slide">
                    <p class="text-center text-gray-500">Data pengurus belum tersedia.</p>
                </div>
                @endforelse

            </div>
            {{-- <div class="swiper-pagination mt-8"></div> --}}
        </div>
    </section>


    <style>
    @keyframes bounce-slow {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .animate-bounce-slow {
        animation: bounce-slow 3s infinite;
    }
    </style>
</x-layout>