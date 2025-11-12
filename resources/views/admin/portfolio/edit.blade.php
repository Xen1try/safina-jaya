<x-admin.layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Proyek: ') . $portfolio->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Formulir -->
                    <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT') <!-- Method untuk Update -->

                        <!-- Judul -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Judul Proyek</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('title', $portfolio->title) }}">
                            @error('title')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Deskripsi -->
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea name="description" id="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('description', $portfolio->description) }}</textarea>
                            @error('description')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Upload Gambar -->
                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700">Gambar Proyek (Opsional: Ganti)</label>
                            <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                            <span class="text-xs text-gray-500">Kosongkan jika tidak ingin mengganti gambar.</span>
                            @error('image')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror

                            <p class="mt-4 text-sm font-medium">Gambar Saat Ini:</p>
                            <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}" class="mt-2 w-32 h-32 object-cover rounded">
                        </div>

                        <!-- Tombol Submit -->
                        <div class="flex justify-end space-x-4">
                            <a href="{{ route('admin.portfolio.index') }}" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">
                                Batal
                            </a>
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                                Update Proyek
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin.layouts.app>
