<x-layout>
    <section class="bg-gray-50 p-8 pt-[120px]">
        <div class="container mx-auto px-4 py-8">

            <h1 class="text-3xl font-bold text-gray-800 mb-6">
                Modul: <span class="text-blue-600">{{ $category->name }}</span>
            </h1>

            @if($moduls->count())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($moduls as $modul)
                        <a href="{{ route('learn.show', $modul->slug) }}"
                           class="group bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 block">

                            {{-- Thumbnail --}}
                            <div class="w-full h-40 bg-gray-100 overflow-hidden">
                                @if($modul->thumbnail)
                                    <img 
                                        src="{{ asset('storage/' . $modul->thumbnail) }}" 
                                        alt="Thumbnail {{ $modul->title }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                    />
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-gray-400 text-sm">
                                        Tidak ada thumbnail
                                    </div>
                                @endif
                            </div>

                            {{-- Content --}}
                            <div class="p-5">
                                <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600 transition">
                                    {{ $modul->title }}
                                </h3>

                                <p class="text-sm text-gray-600 mt-2">
                                    {{ Str::limit($modul->konten, 100) }}
                                </p>

                                <span class="text-blue-600 text-sm mt-3 inline-block font-medium group-hover:underline">
                                    Buka Modul →
                                </span>
                            </div>

                        </a>
                    @endforeach
                </div>

                <div class="mt-6">
                    {{ $moduls->links() }}
                </div>
            @else
                <p class="text-gray-500">Belum ada modul di kategori ini.</p>
            @endif

        </div>
    </section>
</x-layout>
