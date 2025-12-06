<x-layout>
    <section class="bg-gray-50 p-8 pt-[120px]">
        <div class="container mx-auto px-4 py-8 max-w-4xl">

            {{-- Judul --}}
            <h1 class="text-3xl font-bold text-gray-900 mb-4">
                {{ $modul->title }}
            </h1>

            @php
                $link = $modul->youtube_link;

                // Ambil ID YouTube dari berbagai format
                if (Str::contains($link, 'youtu.be/')) {
                    $id = Str::after($link, 'youtu.be/');
                } elseif (Str::contains($link, 'watch?v=')) {
                    $id = Str::after($link, 'watch?v=');
                } else {
                    $id = $link;
                }

                // Hapus parameter seperti ?si=...
                $id = Str::before($id, '?');
            @endphp

            {{-- Video Player --}}
            @if($id)
                <div class="w-full mt-6 flex justify-center">
                    <div class="w-full max-w-3xl aspect-video rounded-xl overflow-hidden shadow-lg bg-black">
                        <iframe 
                            class="w-full h-full"
                            src="https://www.youtube.com/embed/{{ $id }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            @else
                <p class="text-red-500 mt-4">Video tidak ditemukan. Cek link YouTube di database.</p>
            @endif

            {{-- Konten Modul --}}
            <div class="text-gray-700 leading-relaxed mt-8 bg-white p-6 rounded-xl shadow-sm">
                {!! nl2br(e($modul->konten)) !!}
            </div>

        </div>
    </section>
</x-layout>
