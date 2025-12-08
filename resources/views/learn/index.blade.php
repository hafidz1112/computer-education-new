<x-layout>
    <section class="bg-gray-50 p-8 pt-[120px] h-auto">
        <div class="p-5 pb-10">
            <h1 class="font-bold text-2xl">Semua Video Pembelajaran yang kami sediakan</h1>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($categories as $category)
                <a href="{{ route('learn.category', $category->slug) }}" 
                    class="group bg-white border rounded-xl p-6 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">

                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-gray-100 rounded-xl flex items-center justify-center group-hover:bg-blue-50 transition">
                            <img 
                                src="{{ asset('storage/' . $category->icon) }}" 
                                alt="{{ $category->name }} icon"
                                class="w-10 h-10 object-contain"
                            />
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600 transition">
                                {{ $category->name }}
                            </h3>

                            <p class="text-gray-500 text-sm mt-1">
                                {{ $category->moduls_count }} video tersedia
                            </p>
                        </div>
                    </div>

                </a>
            @endforeach
        </div>

    </section>
</x-layout>
