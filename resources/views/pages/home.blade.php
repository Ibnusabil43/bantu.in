@extends('layouts.app')

@section('title', 'bantu.in - Bantuan Akademik dan Digital Profesional')

@section('content')

<!-- Hero Section -->
<section class="min-h-screen flex items-center justify-center section-dark">
    <div class="container-custom text-center py-20">
        <!-- Logo -->
        <div class="flex justify-center mb-8 animate-fade-in">
    <img 
        src="{{ asset('logo/bantu.in-logo-white.png') }}" 
        alt="bantu.in Logo"
        class="w-24 h-24 rounded-2xl
               transform hover:scale-110
               transition-transform duration-300
               shadow-2xl">
</div>
        
        <!-- Headline -->
        <h1 class="text-5xl md:text-7xl font-bold mb-6 tracking-tight animate-fade-in-up text-white">
            Solusi Profesional untuk<br>
            <span class="text-gray-300">Kebutuhan Akademik Anda</span>
        </h1>
        
        <!-- Subheadline -->
        <p class="text-xl md:text-2xl text-white mb-8 max-w-3xl mx-auto leading-relaxed animate-fade-in-up delay-100">
            Layanan bantuan akademik dan digital yang mengutamakan kualitas, etika, dan kerahasiaan
        </p>
        
        <!-- Description -->
        <p class="text-base md:text-lg text-white/90 mb-12 max-w-2xl mx-auto animate-fade-in-up delay-200">
            bantu.in hadir sebagai mitra terpercaya untuk mendampingi Anda dalam menyelesaikan berbagai kebutuhan akademik dan digital dengan pendekatan profesional dan beretika.
        </p>
        
        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-fade-in-up delay-300">
            <a href="{{ route('contact') }}" class="w-full sm:w-auto px-12 py-4 bg-white text-black font-semibold text-center rounded-lg hover:bg-black hover:text-white transition-all duration-300 shadow-lg hover:shadow-2xl hover:scale-105 animate-pulse">
                Konsultasi Sekarang
            </a>
            <a href="{{ route('services') }}" class="w-full sm:w-auto px-12 py-4 bg-white text-black font-semibold text-center rounded-lg hover:bg-black hover:text-white transition-all duration-300 shadow-lg hover:shadow-2xl hover:scale-105 animate-pulse">
                Lihat Layanan Kami
            </a>
        </div>
    </div>
</section>

<!-- Value Proposition Section -->
<section class="py-24 section-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-black">Mengapa Memilih bantu.in?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Kami berkomitmen memberikan layanan terbaik dengan standar profesional tertinggi
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Value 1 -->
            <div class="card group">
                <div class="text-5xl mb-6 transition-transform group-hover:scale-110 duration-300">🤝</div>
                <h3 class="text-xl font-bold mb-3 text-black">Bantuan Profesional</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pendampingan dari tenaga ahli berpengalaman di bidangnya
                </p>
            </div>
            
            <!-- Value 2 -->
            <div class="card group">
                <div class="text-5xl mb-6 transition-transform group-hover:scale-110 duration-300">🎓</div>
                <h3 class="text-xl font-bold mb-3 text-black">Etika Akademik</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Mengutamakan integritas dan standar akademik yang tinggi
                </p>
            </div>
            
            <!-- Value 3 -->
            <div class="card group">
                <div class="text-5xl mb-6 transition-transform group-hover:scale-110 duration-300">🔒</div>
                <h3 class="text-xl font-bold mb-3 text-black">Kerahasiaan Terjamin</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Data dan informasi klien dijaga dengan ketat dan aman
                </p>
            </div>
            
            <!-- Value 4 -->
            <div class="card group">
                <div class="text-5xl mb-6 transition-transform group-hover:scale-110 duration-300">⭐</div>
                <h3 class="text-xl font-bold mb-3 text-black">Kualitas Terpercaya</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Hasil kerja berkualitas tinggi sesuai standar profesional
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview Section -->
<section class="py-24 section-light">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-black">Layanan Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Solusi lengkap untuk berbagai kebutuhan akademik dan digital Anda
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <!-- Academic Services -->
            <div class="card group">
                <h3 class="text-2xl font-bold mb-6 text-black">Bantuan Akademik</h3>
                <ul class="space-y-4 text-gray-700">
                    <li class="flex items-start">
                        <span class="text-black mr-3 text-lg font-bold">•</span>
                        <span>Pendampingan Skripsi & Tesis</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 text-lg font-bold">•</span>
                        <span>Bantuan Penulisan Makalah</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 text-lg font-bold">•</span>
                        <span>Tugas Besar & Proyek Kuliah</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 text-lg font-bold">•</span>
                        <span>Literature Review</span>
                    </li>
                </ul>
                <a href="{{ route('services') }}" class="inline-block mt-8 text-black font-semibold hover:text-gray-600 transition-colors">
                    Selengkapnya →
                </a>
            </div>
            
            <!-- Digital Services -->
            <div class="card group">
                <h3 class="text-2xl font-bold mb-6 text-black">Layanan Digital</h3>
                <ul class="space-y-4 text-gray-700">
                    <li class="flex items-start">
                        <span class="text-black mr-3 text-lg font-bold">•</span>
                        <span>Bantuan Review Google Maps</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 text-lg font-bold">•</span>
                        <span>Peningkatan Watch Time</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 text-lg font-bold">•</span>
                        <span>Engagement Media Sosial</span>
                    </li>
                </ul>
                <a href="{{ route('services') }}" class="inline-block mt-8 text-black font-semibold hover:text-gray-600 transition-colors">
                    Selengkapnya →
                </a>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('services') }}" class="btn-primary">
                Lihat Semua Layanan
            </a>
        </div>
    </div>
</section>

@endsection
