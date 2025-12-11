<x-layout>
    <section class="p-10 w-full container mx-auto pt-[75px] lg:pt-[90px]">
        <div class="blok justify-center items-center w-full bg-gray-100 rounded-md text-center p-4 lg:p-8">
            
            <div class="flex max-w-auto items-center justify-center ">
                <img src="{{ asset('storage/' . $kegiatan->dokumentasi) }}" 
                class="max-w-auto lg:max-w-[600px] max-h-[400px] object-cover rounded-xl mb-5">
            </div>

            <h1 class="text-xl lg:text-3xl font-bold mb-5">{{ $kegiatan->judul }}</h1>

            <p class="text-gray-700 leading-relaxed mb-5 text-sm lg:text-md">
                {{ $kegiatan->deskripsi }}
            </p>

            <div class="text-gray-500 text-sm lg:text-md">
                Tanggal: {{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('d F Y') }}
            </div>
        </div>
    </section>
</x-layout>
