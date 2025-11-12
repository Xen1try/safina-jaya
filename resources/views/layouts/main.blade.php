<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CV Safina Jaya - Manufaktur Presisi')</title>
    
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- ================================== -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="preconnect" href="[https://fonts.googleapis.com](https://fonts.googleapis.com)">
    <link rel="preconnect" href="[https://fonts.gstatic.com](https://fonts.gstatic.com)" crossorigin>
    <link href="[https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;500&display=swap](https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;500&display=swap)" rel="stylesheet">

    <!-- Memuat CSS dan JS yang sudah di-compile (termasuk Tailwind) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Menambahkan font ke Tailwind (opsional tapi bagus) -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body class="bg-white text-gray-800 antialiased">

    <!-- BAGIAN HEADER (Sesuai Wireframe) -->
    <header class="bg-white shadow-md sticky top-0 z-50" x-data="{ isOpen: false }">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            
            <!-- Logo -->
            <div>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo-safina.png') }}" alt="Logo CV Safina Jaya" class="h-12 duration-300 hover:scale-105"> <!-- Ukuran H-12 -->
                </a>
            </div>
            
            <!-- Navigasi Desktop -->
            <div class="hidden md:flex space-x-6 items-center">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-500 duration-300 hover:scale-105">Home</a>
                <a href="{{ route('services') }}" class="text-gray-600 hover:text-blue-500 duration-300 hover:scale-105">Services</a>
                <a href="{{ route('portfolio') }}" class="text-gray-600 hover:text-blue-500 duration-300 hover:scale-105">Portfolio</a>
                <a href="{{ route('contact') }}" class="bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition-colors duration-300 hover:scale-105">Contact Us</a>
            </div>

            <!-- Tombol Mobile -->
            <div class="md:hidden"> 
                <button @click="isOpen = !isOpen" type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none" aria-label="Buka menu">
                    <span class="sr-only">Buka menu</span>
                    
                    <!-- Ikon "Hamburger" (tampil saat menu tertutup) -->
                    <svg x-show="!isOpen" class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                    
                    <!-- Ikon "X" (tampil saat menu terbuka) -->
                    <svg x-cloak x-show="isOpen" class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </nav>

        <div x-cloak x-show="isOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 transform -translate-y-2"
             x-transition:enter-end="opacity-100 transform translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 transform translate-y-0"
             x-transition:leave-end="opacity-0 transform -translate-y-2"
             @click.away="isOpen = false"
             class="md:hidden absolute top-full left-0 w-full bg-white shadow-lg z-40">
            
            <a href="{{ route('home') }}" @click="isOpen = false" class="block px-6 py-3 text-gray-700 hover:bg-gray-100 font-medium">Home</a>
            <a href="{{ route('services') }}" @click="isOpen = false" class="block px-6 py-3 text-gray-700 hover:bg-gray-100 font-medium">Services</a>
            <a href="{{ route('portfolio') }}" @click="isOpen = false" class="block px-6 py-3 text-gray-700 hover:bg-gray-100 font-medium">Portfolio</a>
            <a href="{{ route('contact') }}" @click="isOpen = false" class="block px-6 py-3 text-gray-700 hover:bg-gray-100 font-medium border-t border-gray-100">Contact Us</a>
        </div>
    </header>
    <!-- KONTEN UTAMA HALAMAN -->
    <main>
        @yield('content')
    </main>

    <!-- BAGIAN FOOTER (Sesuai Wireframe) -->
    <footer class="bg-gray-900 text-gray-400 mt-16 py-12">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Kolom 1: Logo & Deskripsi -->
            <div>
                <h3 class="text-white text-lg font-bold mb-3">CV SAFINA JAYA</h3>
                <p class="text-sm leading-relaxed">
                    Spesialis manufaktur presisi untuk jigs, spare parts, dan mesin kustom industri.
                </p>
                <p class="text-sm mt-4">&copy; {{ date('Y') }} CV Safina Jaya. All rights reserved.</p>
            </div>
            <!-- Kolom 2: Link Cepat -->
            <div>
                <h3 class="text-white text-lg font-bold mb-3">Link Cepat</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-white">Services</a></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-white">Portfolio</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white">Contact</a></li>
                </ul>
            </div>
            <!-- Kolom 3: Kontak -->
            <div>
                <h3 class="text-white text-lg font-bold mb-3">Kontak Kami</h3>
                <ul class="space-y-2 text-sm">
<!--                    <li>Alamat: [Alamat Anda di Sini]</li> -->
                    <li>Email: ferihadi@yahoo.com</li>
                    <li>Telepon: +62 812-8597-3645</li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>