@extends('layouts.main')

@section('title', 'CV Safina Jaya - Solusi Manufaktur Presisi')

@section('content')
    
    <!-- HERO SECTION (Sesuai Wireframe) -->
    <!-- Ganti bg-gray-700 dengan gambar latar Anda nanti menggunakan style: background-image: url(...) -->
    <section class="text-white py-24 px-6 relative bg-cover bg-center" 
            style="background-image: url('{{ asset('images/hero-background.jpg') }}')">
        <div class="absolute inset-0 bg-black opacity-60"></div> <div class="container mx-auto text-center relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">
                Solusi Manufaktur Presisi untuk Industri Anda
            </h1>
            <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                Spesialis Jigs, Spare Parts, dan Mesin Kustom untuk efisiensi produksi Anda.
            </p>
            <a href="{{ route('services') }}" class="bg-blue-600 text-white px-8 py-3 rounded-md text-lg font-medium hover:bg-blue-700 transition-colors">
                Lihat Layanan Kami
            </a>
        </div>
    </section>

    <!-- RINGKASAN LAYANAN (Sesuai Wireframe) -->
    <section class="py-16 px-6 bg-gray-50">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Layanan Utama Kami</h2>
                <p class="text-gray-600 mt-2">Fokus pada 3 pilar utama manufaktur.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <!-- Layanan 1: Jigs -->
                <div class="bg-white w-full card-glass-light card-lift-hover p-6">
                    <!-- [Ikon Anda di Sini (misal: SVG) ] -->
                    <h3 class="text-2xl font-bold mb-2">Custom Jigs</h3>
                    <p class="text-gray-600">Pembuatan jigs presisi tinggi untuk membantu proses produksi manufaktur Anda agar lebih akurat dan cepat.</p>
                </div>
                <!-- Layanan 2: Spare Parts -->
                <div class="bg-white w-full card-glass-light card-lift-hover p-6">
                    <!-- [Ikon Anda di Sini] -->
                    <h3 class="text-2xl font-bold mb-2">Spare Parts</h3>
                    <p class="text-gray-600">Kami memproduksi spare parts mesin industri (gears, shafts, dll) sesuai kebutuhan spesifik dan material pilihan Anda.</p>
                </div>
                <!-- Layanan 3: Machinery -->
                <div class="bg-white w-full card-glass-light card-lift-hover p-6">
                    <!-- [Ikon Anda di Sini] -->
                    <h3 class="text-2xl font-bold mb-2">Custom Machinery</h3>
                    <p class="text-gray-600">Merancang dan membangun mesin kustom sederhana untuk otomatisasi dan efisiensi proses kerja.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- "MENGAPA MEMILIH KAMI?" (WHY US?) -->
    <section class="py-16 px-6">
        <div class="container mx-auto">
             <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <div>
                        <img src="{{ asset('images/why-us-image.jpg') }}" alt="Workshop CV Safina Jaya"
                            class="w-full h-96 object-cover rounded-lg shadow-lg duration-300 hover:scale-105">
                    </div>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Mengapa Memilih CV Safina Jaya?</h2>
                    <p class="text-gray-600 mb-6">Kami bukan hanya vendor, tapi partner solusi manufaktur Anda. Kami berkomitmen pada standar tertinggi untuk mendukung kesuksesan produksi Anda.</p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-3">&#10003;</span> <!-- Tanda Ceklis -->
                            <span class="text-gray-700"><strong class="font-medium">Kualitas Presisi:</strong> Menggunakan mesin dan pengukuran terstandar untuk hasil yang akurat.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-3">&#10003;</span>
                            <span class="text-gray-700"><strong class="font-medium">Pengiriman Tepat Waktu:</strong> Kami menghargai waktu produksi Anda.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-3">&#10003;</span>
                            <span class="text-gray-700"><strong class="font-medium">Tim Berpengalaman:</strong> Dikerjakan oleh tenaga ahli yang berpengalaman di bidangnya.</span>
                        </li>
                    </ul>
                </div>
             </div>
        </div>
    </section>

    <!-- "DIPERCAYA OLEH" (TRUSTED BY) -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">

            <!-- Judul Section -->
            <h3 class="text-center text-xl font-medium text-gray-700 mb-10">
                Telah Dipercaya oleh Perusahaan Terkemuka
            </h3>

            <!-- 
            GRID LOGO RESPONSIVE:
            - HP: 2 Kolom (grid-cols-2)
            - Tablet: 3 Kolom (md:grid-cols-3)
            - Desktop: 6 Kolom (lg:grid-cols-6)
            -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-x-8 gap-y-10 items-center">

                <!-- Ganti 'src', 'alt', dan 'href' di bawah ini -->

                <!-- Logo 1 -->
                <a class="col-span-1 flex justify-center">
                    <img src="{{ asset('images/logos/logo-roki.png') }}" alt="Roki" 
                        class="h-12 w-auto grayscale opacity-70 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </a>

                <!-- Logo 2 -->
                <a class="col-span-1 flex justify-center">
                    <img src="{{ asset('images/logos/logo-emsonic.png') }}" alt="Emsonic" 
                        class="h-12 w-auto grayscale opacity-70 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </a>

                <!-- Logo 3 -->
                <a class="col-span-1 flex justify-center">
                    <img src="{{ asset('images/logos/logo-mss.png') }}" alt="MSS" 
                        class="h-12 w-auto grayscale opacity-70 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </a>

                <!-- Logo 4 -->
                <a class="col-span-1 flex justify-center">
                    <img src="{{ asset('images/logos/logo-usc.png') }}" alt="USC" 
                        class="h-12 w-auto grayscale opacity-70 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </a>

                <!-- Logo 5 -->
                <a class="col-span-1 flex justify-center">
                    <img src="{{ asset('images/logos/logo-mei.png') }}" alt="MEI" 
                        class="h-12 w-auto grayscale opacity-70 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </a>

                <!-- Logo 6 -->
                <a class="col-span-1 flex justify-center">
                    <img src="{{ asset('images/logos/logo-aditya.png') }}" alt="Aditya" 
                        class="h-12 w-auto grayscale opacity-70 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                </a>

            </div>
        </div>
    </section>


    <!-- CALL TO ACTION (CTA) -->
    <section class="py-20 px-6 bg-blue-600 text-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Punya Proyek yang Perlu Didiskusikan?</h2>
            <p class="text-blue-100 text-lg mb-8 max-w-xl mx-auto">Hubungi tim kami hari ini untuk konsultasi gratis mengenai kebutuhan manufaktur Anda.</p>
            <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-3 rounded-md text-lg font-medium hover:bg-gray-100 transition-colors">
                Hubungi Kami Sekarang
            </a>
        </div>
    </section>

@endsection