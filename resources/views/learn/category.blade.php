<x-layout>
    <div class="container mx-auto px-4 py-12 pt-[80px]">
    <h1 class="text-2xl md:text-3xl font-bold text-center text-gray-900 mb-10">Kategori Pembelajaran</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @forelse($categories as $category)
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="p-6">
                    
                    <div class="w-full h-[100px] flex items-center justify-center bg-blue-100 rounded-lg mb-4">
                        <img src="{{ asset('storage/' . $category->icon) }}" alt="" class="w-[50px] h-[50px]">
                    </div>

                    <h3 class="font-bold text-lg text-gray-800">{{ $category->name }}</h3>
                    <p class="text-sm text-gray-600 mt-1">{{ $category->moduls->count() }} modul tersedia</p>

                    <a href="{{ route('moduls.learn', $category->slug) }}" 
                       class="mt-4 inline-block text-green-500 hover:text-green-700 font-medium text-sm">
                        Lihat Modul →
                    </a>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-10 text-gray-500">
                Belum ada kategori tersedia.
            </div>
        @endforelse
    </div>
</div>
</x-layout>