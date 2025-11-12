@extends('layouts.main')

@section('title', 'Portfolio Kami - CV Safina Jaya')

@section('content')

    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold text-gray-900">Portfolio Proyek</h1>
            <p class="text-gray-600 mt-2">Pekerjaan yang telah kami selesaikan.</p>
        </div>
    </section>

    <section class="py-16 px-6">
        <div class="container mx-auto">
            
            <h2 class="text-3xl font-bold text-center mb-12">Proyek Unggulan Kami</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @forelse ($portfolios as $item)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                        <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}" class="w-full h-56 object-cover">
                        
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-3">{{ $item->title }}</h3>
                            <p class="text-gray-600">
                                {{ $item->description }}
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="md:col-span-2 lg:col-span-3 text-center text-gray-500 py-10">
                        <p class="text-lg">Belum ada proyek portfolio yang bisa ditampilkan saat ini.</p>
                        <p class="text-sm mt-2">Silakan tambahkan proyek baru di panel admin.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </section>

@endsection