@extends('layouts.main')

@section('title', 'Layanan Kami - CV Safina Jaya')

@section('content')

    <!-- HERO KECIL UNTUK HEADER HALAMAN -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold text-gray-900">Layanan Kami</h1>
            <p class="text-gray-600 mt-2">Solusi manufaktur presisi untuk kebutuhan industri Anda.</p>
        </div>
    </section>

    <!-- KONTEN LAYANAN -->
    <section class="py-16 px-6">
        <div class="container mx-auto">
            
            <!-- Daftar Layanan -->
            <div class="space-y-20"> <!-- Menambah spasi antar layanan -->

                <!-- Layanan 1: Custom Jigs -->
                <div class="flex flex-col md:flex-row items-center gap-10">
                    <!-- Ganti Placeholder dengan <img> -->
                    <div class="w-full md:w-1/2">
                        <img src="{{ asset('images/service-jigs.png') }}" alt="Custom Jigs Presisi" class="w-full h-80 object-cover rounded-lg shadow-lg duration-300 hover:scale-105">
                    </div>
                    <!-- Deskripsi Layanan -->
                    <div class="w-full md:w-1/2">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Custom Jigs</h2>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Kami merancang dan memproduksi Jigs (alat bantu proses) dengan presisi tinggi yang disesuaikan
                            dengan kebutuhan lini produksi Anda. Jigs kami membantu meningkatkan efisiensi,
                            konsistensi, dan keamanan dalam proses manufaktur.
                        </p>
                        <ul class="list-disc list-inside text-gray-600 space-y-2">
                            <li>Welding Jigs</li>
                            <li>Assembly Jigs</li>
                            <li>Checking Fixtures</li>
                            <li>Drilling Jigs</li>
                        </ul>
                    </div>
                </div>

                <!-- Layanan 2: Spare Parts -->
                <!-- Ganti md:flex-row-reverse agar gambar selalu di kiri (lebih konsisten) -->
                <div class="flex flex-col md:flex-row items-center gap-10">
                    <!-- Ganti Placeholder dengan <img> -->
                    <div class="w-full md:w-1/2">
                         <img src="{{ asset('images/service-parts.png') }}" alt="Custom Spare Parts Mesin" class="w-full h-80 object-cover rounded-lg shadow-lg duration-300 hover:scale-105">
                    </div>
                    <!-- Deskripsi Layanan -->
                    <div class="w-full md:w-1/2">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Spare Parts Kustom</h2>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Kehabisan spare part mesin yang sudah tua atau sulit ditemukan? Kami solusinya.
                            Kami dapat melakukan *reverse engineering* dan memproduksi kembali spare parts
                            mesin industri Anda (Shaft, Gear, Bushing, dll) dengan material yang sesuai.
                        </p>
                        <ul class="list-disc list-inside text-gray-600 space-y-2">
                            <li>Custom Gears & Shafts</li>
                            <li>Bushing & Bearings</li>
                            <li>Komponen Mesin Presisi</li>
                            <li>Reverse Engineering</li>
                        </ul>
                    </div>
                </div>

                <!-- Layanan 3: Custom Machinery -->
                <div class="flex flex-col md:flex-row items-center gap-10">
                    <!-- Ganti Placeholder dengan <img> -->
                    <div class="w-full md:w-1/2">
                        <img src="{{ asset('images/service-machinery.png') }}" alt="Mesin Kustom Otomatisasi" class="w-full h-80 object-cover rounded-lg shadow-lg duration-300 hover:scale-105">
                    </div>
                    <!-- Deskripsi Layanan -->
                    <div class="w-full md:w-1/2">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Mesin Kustom & Otomatisasi</h2>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Tingkatkan efisiensi produksi Anda dengan mesin kustom. Kami merancang dan membangun
                            mesin semi-otomatis atau otomatis penuh untuk mempercepat proses produksi Anda,
                            mengurangi kesalahan manusia, dan meningkatkan output.
                        </p>
                        <ul class="list-disc list-inside text-gray-600 space-y-2">
                            <li>Mesin Assembly Semi-Otomatis</li>
                            <li>Conveyor Systems</li>
                            <li>Mesin Inspeksi Kustom</li>
                            <li>Upgrade & Modifikasi Mesin</li>
                        </ul>
                    </div>
                </div>
                
            </div> <!-- end space-y-20 -->

        </div>
    </section>

@endsection