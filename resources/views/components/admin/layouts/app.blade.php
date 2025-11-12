<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Admin Panel' }} - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="[https://fonts.bunny.net](https://fonts.bunny.net)">
    <link href="[https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap](https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap)" rel="stylesheet" />

    <!-- Scripts (Menggunakan Vite) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Navigasi Admin -->
        <nav class="bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('admin.dashboard') }}">
                                <span class="font-bold">Admin Panel</span>
                            </a>
                        </div>

                        <!-- Link Navigasi -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <a href="{{ route('admin.dashboard') }}" 
                               class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out">
                                Dashboard
                            </a>
                            <!-- (Link menu admin lain bisa ditambah di sini) -->

                            <!-- Link Portfolio -->
                            <a href="{{ route('admin.portfolio.index') }}"
                                class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('admin.portfolio.*') ? 'border-indigo-400 text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} ...">
                                Portfolio
                            </a>

                            <!-- Link Pesan Masuk -->
                             <a href="{{ route('admin.messages.index') }}"
                             class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('admin.messages.index') ? 'border-indigo-400 text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} ...">
                             Pesan Masuk
                            </a>
                        </div>
                    </div>

                    <!-- Pengaturan User & Logout -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <div class="mr-4 text-gray-700">{{ Auth::user()->name }}</div>

                        <!-- Tombol Logout -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-gray-500 hover:text-gray-700 underline">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Judul Halaman -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Konten Utama -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>