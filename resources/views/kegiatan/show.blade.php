<x-layout>
    <section class="p-10 w-full container mx-auto pt-[75px] lg:pt-[90px]">
        <div class="blok justify-center items-center w-full bg-gray-100 rounded-md text-center p-4">
            
            <div class="flex items-center justify-center ">
                <img src="{{ asset('storage/' . $kegiatan->dokumentasi) }}" 
                class="max-w-[600px] max-h-[400px] object-cover rounded-xl mb-5">
            </div>

            <h1 class="text-3xl font-bold mb-5">{{ $kegiatan->judul }}</h1>

            <p class="text-gray-700 leading-relaxed mb-5 ">
                {{ $kegiatan->deskripsi }}
            </p>

            <div class="text-gray-500">
                Tanggal: {{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('d F Y') }}
            </div>
        </div>
    </section>
</x-layout>
