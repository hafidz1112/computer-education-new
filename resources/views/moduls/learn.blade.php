<x-layout>
    <section class="bg-gray-50 p-8 pt-[120px]">
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse ($moduls as $modul)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300 ease-in-out">
                    <div class="p-6 bg-green-500 flex justify-center items-center h-40">
                        <img src="{{ asset('storage/' . $modul->thumbnail) }}" alt="{{ $modul->title }}" class="max-h-full rounded-lg">
                    </div>
                    <div class="p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-2">
                            {{ $modul->title }}
                        </h2>
                        <p class="text-gray-600 mb-4">
                            {{ $modul->slug }}
                        </p>
                        <a href="{{ url('/modul/' . $modul->slug) }}" class="inline-block bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                            Lihat Modul
                        </a>
                    </div>
                </div>
            @empty
                <p class="col-span-full text-center text-gray-500">Belum ada modul tersedia.</p>
            @endforelse
        </div>
    </section>
</x-layout>
