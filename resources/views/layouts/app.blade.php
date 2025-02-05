<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            
            <!-- Navbar -->
<nav class="bg-black text-white p-4 shadow-md">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-2xl font-bold text-blue-400 hover:text-blue-300 transition">
            Attendance System
        </a>

        <!-- Nav Links -->
        <div class="hidden md:flex space-x-6">
            <a href="{{ route('students.index') }}" class="hover:text-blue-300 transition">Students</a>
            <a href="{{ route('attendance.index') }}" class="hover:text-blue-300 transition">Attendance</a>
            <a href="{{ route('attendance.report') }}" class="hover:text-blue-300 transition">Reports</a>
        </div>

        <!-- Authentication Links -->
        <div class="hidden md:flex space-x-4">
            @auth
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-500 px-4 py-2 rounded-md text-white hover:bg-red-600 transition">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="bg-blue-500 px-4 py-2 rounded-md text-white hover:bg-blue-600 transition">
                    Login
                </a>
                <a href="{{ route('register') }}" class="bg-green-500 px-4 py-2 rounded-md text-white hover:bg-green-600 transition">
                    Register
                </a>
            @endauth
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-toggle" class="focus:outline-none">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" 
                     viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 6h16M4 12h16m-7 6h7"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-gray-800 p-4 space-y-2">
        <a href="{{ route('students.index') }}" class="block text-white hover:text-blue-300 transition">Students</a>
        <a href="{{ route('attendance.index') }}" class="block text-white hover:text-blue-300 transition">Attendance</a>
        <a href="{{ route('attendance.report') }}" class="block text-white hover:text-blue-300 transition">Reports</a>

        @auth
            <form method="POST" action="{{ route('logout') }}" class="block">
                @csrf
                <button type="submit" class="w-full bg-red-500 px-4 py-2 mt-2 rounded-md text-white hover:bg-red-600 transition">
                    Logout
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" class="block w-full bg-blue-500 px-4 py-2 mt-2 rounded-md text-white hover:bg-blue-600 transition">
                Login
            </a>
            <a href="{{ route('register') }}" class="block w-full bg-green-500 px-4 py-2 mt-2 rounded-md text-white hover:bg-green-600 transition">
                Register
            </a>
        @endauth
    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</nav>


            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>
