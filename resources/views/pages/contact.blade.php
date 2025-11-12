@extends('layouts.main')

@section('title', 'Kontak Kami - CV Safina Jaya')

@section('content')

    <!-- HERO KECIL UNTUK HEADER HALAMAN -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold text-gray-900">Hubungi Kami</h1>
            <p class="text-gray-600 mt-2">Kami siap membantu mewujudkan proyek Anda.</p>
        </div>
    </section>

    <!-- KONTEN KONTAK -->
    <section class="py-16 px-6">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                
                <!-- KOLOM 1: FORMULIR KONTAK -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Kirimkan Pertanyaan Anda</h2>
                    
                    <!-- 
                        CATATAN: 
                        Formulir ini belum berfungsi. 
                        Untuk Phase 2, kita akan membuat Controller untuk memproses form ini.
                    -->
                    <form action="#" method="POST" class="space-y-4">
                        @csrf <!-- Token Keamanan Laravel, WAJIB ADA -->

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700">Subjek</label>
                            <input type="text" id="subject" name="subject" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                            <textarea id="message" name="message" rows="5" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>

                        <div>
                            <button type="submit"
                                class="w-full bg-blue-600 text-white px-6 py-3 rounded-md text-lg font-medium hover:bg-blue-700 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>

                <!-- KOLOM 2: INFO KONTAK & PETA -->
                <div class="space-y-8">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Informasi Kontak</h2>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="mr-3 text-blue-600 mt-1">&#9742;</span> <!-- Ikon Telepon -->
                                <div>
                                    <strong class="font-medium">Telepon</strong><br>
                                    +62 812-8597-3645
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="mr-3 text-blue-600 mt-1">&#9993;</span> <!-- Ikon Email -->
                                <div>
                                    <strong class="font-medium">Email</strong><br>
                                    ferihadi@yahoo.com
                                </div>
                            </li>
<!--                            <li class="flex items-start"> -->
<!--                                <span class="mr-3 text-blue-600 mt-1">&#127968;</span> <!-- Ikon Alamat -->
<!--                                <div> -->
<!--                                    <strong class="font-medium">Alamat Workshop</strong><br> -->
<!--                                    [Alamat Lengkap Anda di Sini] -->
<!--                                </div> -->
<!--                            </li> -->
                        </ul>
                    </div>

<!--                    <div> -->
<!--                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Lokasi Kami</h2> -->
                        <!-- Placeholder Peta -->
<!--                        <div class="bg-gray-300 h-80 rounded-lg shadow-lg flex items-center justify-center text-gray-500">
                            [Placeholder Google Maps]
                        </div>
                        <!-- 
                            Nanti, ganti <div> di atas dengan <iframe> dari Google Maps:
                            <iframe src="https://www.google.com/maps/embed?pb=..." width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        -->
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
