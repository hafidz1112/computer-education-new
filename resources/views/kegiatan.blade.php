<x-layout>
    <section class="min-h-screen p-10 container mx-auto pt-[75px] lg:pt-[90px]">
        <h1 class="text-2xl font-bold mb-10 text-center font-[Poppins]">Daftar Kegiatan</h1>


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @forelse ($allkegiatan as $kegiatan)
            <a href="{{ route('kegiatan.show', $kegiatan->id) }}" class="bg-white shadow-lg rounded-2xl overflow-hidden hover:scale-[1.02] transition-transform duration-300">
                <div class="h-48 w-full overflow-hidden">
                    <img src="{{ asset('storage/' . $kegiatan->dokumentasi) }}" alt="{{ $kegiatan->judul }}" class="w-full h-full object-cover">
                </div>

                <div class="p-5">
                    <h2 class="text-xl font-semibold mb-2 font-[inter]">{{ $kegiatan->judul }}</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        {{ \Illuminate\Support\Str::words($kegiatan->deskripsi, 8, '...') }}
                    </p>



                    <div class="flex items-center space-x-2 text-gray-500 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25M3 18.75A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75M3 18.75v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                        <span>{{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('d F Y') }}</span>
                    </div>
                </div>
            </a>
            @empty
            <div class="col-span-full text-center text-gray-500 text-lg py-20">Data Kegiatan belum tersedia.</div>
            @endforelse
        </div>
    </section>
</x-layout>