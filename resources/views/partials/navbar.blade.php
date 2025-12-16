<nav class="fixed w-full top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-gray-200 shadow-sm">
    <div class="container-custom">
        <div class="flex justify-between items-center h-20">
            
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                <img src="{{ asset('logo/bantu.in-logo-black.png') }}" alt="bantu.in Logo" class="w-12 h-12 rounded-2xl transform group-hover:scale-110 transition-transform duration-300">
                <span class="text-2xl font-bold tracking-tight text-black">bantu.in</span>
            </a>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-sm font-medium hover:text-gray-600 transition-colors {{ request()->routeIs('home') ? 'text-black' : 'text-gray-500' }}">
                    Beranda
                </a>
                <a href="{{ route('about') }}" class="text-sm font-medium hover:text-gray-600 transition-colors {{ request()->routeIs('about') ? 'text-black' : 'text-gray-500' }}">
                    Tentang Kami
                </a>
                <a href="{{ route('services') }}" class="text-sm font-medium hover:text-gray-600 transition-colors {{ request()->routeIs('services') ? 'text-black' : 'text-gray-500' }}">
                    Layanan
                </a>
                <a href="{{ route('how-it-works') }}" class="text-sm font-medium hover:text-gray-600 transition-colors {{ request()->routeIs('how-it-works') ? 'text-black' : 'text-gray-500' }}">
                    Alur Kerja
                </a>
                <a href="{{ route('contact') }}" class="px-6 py-2.5 bg-black text-white text-sm font-semibold rounded-lg hover:bg-gray-800 transition-all duration-300 shadow-sm hover:shadow-md">
                    Hubungi Kami
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-black p-2 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-gray-200 bg-white">
        <div class="container-custom py-4 space-y-4">
            <a href="{{ route('home') }}" class="block text-sm font-medium hover:text-gray-600 transition-colors {{ request()->routeIs('home') ? 'text-black' : 'text-gray-500' }}">
                Beranda
            </a>
            <a href="{{ route('about') }}" class="block text-sm font-medium hover:text-gray-600 transition-colors {{ request()->routeIs('about') ? 'text-black' : 'text-gray-500' }}">
                Tentang Kami
            </a>
            <a href="{{ route('services') }}" class="block text-sm font-medium hover:text-gray-600 transition-colors {{ request()->routeIs('services') ? 'text-black' : 'text-gray-500' }}">
                Layanan
            </a>
            <a href="{{ route('how-it-works') }}" class="block text-sm font-medium hover:text-gray-600 transition-colors {{ request()->routeIs('how-it-works') ? 'text-black' : 'text-gray-500' }}">
                Alur Kerja
            </a>
            <a href="{{ route('contact') }}" class="block text-sm font-medium hover:text-gray-600 transition-colors {{ request()->routeIs('contact') ? 'text-black' : 'text-gray-500' }}">
                Hubungi Kami
            </a>
        </div>
    </div>
</nav>

<!-- Spacer for fixed navbar -->
<div class="h-20"></div>
