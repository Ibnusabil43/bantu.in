@extends('layouts.app')

@section('title', 'Layanan - bantu.in')

@section('content')

<!-- Hero Section -->
<section class="py-24 section-dark">
    <div class="container-custom text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 tracking-tight text-white">
            Layanan <span class="text-gray-300">Kami</span>
        </h1>
        <p class="text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">
            Solusi lengkap untuk berbagai kebutuhan akademik dan digital profesional Anda
        </p>
    </div>
</section>

<!-- Academic Services Section -->
<section class="py-24 section-white">
    <div class="container-custom">
        <div class="mb-16 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-black">Bantuan Akademik</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Pendampingan profesional untuk berbagai kebutuhan akademik Anda
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            
            <!-- Service 1: Skripsi -->
            <div class="card group">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold mb-3 text-black">Pendampingan Skripsi & Tesis</h3>
                    <div class="w-16 h-1 bg-black"></div>
                </div>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Kami memberikan pendampingan komprehensif dalam penyusunan skripsi dan tesis, mulai dari penentuan topik, penyusunan proposal, metodologi penelitian, analisis data, hingga penulisan dan revisi final. Setiap tahap dilakukan dengan memperhatikan standar akademik dan pedoman universitas Anda.
                </p>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Konsultasi penentuan topik dan rumusan masalah</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Penyusunan kerangka penelitian</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Bantuan analisis data dan metodologi</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Review dan revisi naskah</span>
                    </li>
                </ul>
            </div>
            
            <!-- Service 2: Makalah -->
            <div class="card group">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold mb-3 text-black">Bantuan Penulisan Makalah</h3>
                    <div class="w-16 h-1 bg-black"></div>
                </div>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Layanan pendampingan penulisan makalah akademik untuk berbagai mata kuliah dan keperluan. Kami membantu Anda menyusun makalah yang terstruktur dengan baik, mengikuti format akademik yang benar, dan didukung oleh referensi yang kredibel dan relevan.
                </p>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Penyusunan outline dan struktur makalah</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Riset dan pengumpulan sumber literatur</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Penulisan sesuai format akademik (APA, MLA, Chicago, dll)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Proofreading dan editing</span>
                    </li>
                </ul>
            </div>
            
            <!-- Service 3: Tugas Besar -->
            <div class="card group">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold mb-3 text-black">Tugas Besar & Proyek Kuliah</h3>
                    <div class="w-16 h-1 bg-black"></div>
                </div>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Bantuan untuk menyelesaikan berbagai tugas besar dan proyek kuliah dengan pendekatan sistematis dan profesional. Kami mendampingi Anda dalam perencanaan, eksekusi, dan dokumentasi proyek sesuai dengan persyaratan yang ditetapkan.
                </p>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Perencanaan dan penjadwalan proyek</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Eksekusi tugas sesuai spesifikasi</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Dokumentasi dan laporan proyek</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Presentasi dan visualisasi hasil</span>
                    </li>
                </ul>
            </div>
            
            <!-- Service 4: Literature Review -->
            <div class="card group">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold mb-3 text-black">Literature Review</h3>
                    <div class="w-16 h-1 bg-black"></div>
                </div>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Layanan penyusunan tinjauan pustaka (literature review) yang komprehensif dan sistematis. Kami membantu mengidentifikasi, menganalisis, dan mensintesis literatur yang relevan dengan topik penelitian Anda untuk memperkuat landasan teoritis karya ilmiah.
                </p>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Pencarian dan seleksi sumber literatur terkini</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Analisis dan sintesis teori</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Identifikasi research gap</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Penyusunan kerangka teoritis</span>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
</section>

<!-- Digital Services Section -->
<section class="py-24 section-light">
    <div class="container-custom">
        <div class="mb-16 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-black">Layanan Digital</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Solusi digital profesional untuk meningkatkan presence dan engagement Anda
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            
            <!-- Digital Service 1 -->
            <div class="card group">
                <div class="text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">🗺️</div>
                <h3 class="text-2xl font-bold mb-4 text-black">Bantuan Review Google Maps</h3>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Layanan untuk membantu meningkatkan reputasi online bisnis Anda melalui review Google Maps yang autentik dan berkualitas. Membantu visibilitas dan kredibilitas bisnis di platform pencarian lokal.
                </p>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Review autentik dan berkualitas</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Meningkatkan rating bisnis</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Pengelolaan reputasi online</span>
                    </li>
                </ul>
            </div>
            
            <!-- Digital Service 2 -->
            <div class="card group">
                <div class="text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">▶️</div>
                <h3 class="text-2xl font-bold mb-4 text-black">Peningkatan Watch Time</h3>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Layanan untuk meningkatkan watch time pada konten video Anda, membantu memenuhi persyaratan monetisasi dan meningkatkan performa konten di algoritma platform video.
                </p>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Strategi organik dan aman</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Peningkatan bertahap</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Sesuai kebijakan platform</span>
                    </li>
                </ul>
            </div>
            
            <!-- Digital Service 3 -->
            <div class="card group">
                <div class="text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">📱</div>
                <h3 class="text-2xl font-bold mb-4 text-black">Engagement Media Sosial</h3>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Layanan untuk meningkatkan engagement pada akun media sosial Anda melalui strategi yang terukur dan organik, membantu memperluas jangkauan dan meningkatkan interaksi audiens.
                </p>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Peningkatan likes dan comments</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Pertumbuhan follower organik</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-black mr-3 font-bold">✓</span>
                        <span>Analisis performa konten</span>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-24 section-white">
    <div class="container-custom">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-16 text-center text-black">Mengapa Memilih Layanan Kami?</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="card group">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4 transform group-hover:scale-110 transition-transform duration-300">⚡</div>
                        <div>
                            <h4 class="text-xl font-bold mb-2 text-black">Proses Cepat dan Efisien</h4>
                            <p class="text-gray-700 leading-relaxed">Kami memahami pentingnya waktu bagi Anda. Setiap proyek ditangani dengan sistem manajemen waktu yang baik untuk memastikan deadline terpenuhi.</p>
                        </div>
                    </div>
                </div>
                
                <div class="card group">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4 transform group-hover:scale-110 transition-transform duration-300">👥</div>
                        <div>
                            <h4 class="text-xl font-bold mb-2 text-black">Tim Ahli Berpengalaman</h4>
                            <p class="text-gray-700 leading-relaxed">Didukung oleh tim profesional yang memiliki keahlian di berbagai bidang akademik dan digital marketing.</p>
                        </div>
                    </div>
                </div>
                
                <div class="card group">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4 transform group-hover:scale-110 transition-transform duration-300">💬</div>
                        <div>
                            <h4 class="text-xl font-bold mb-2 text-black">Komunikasi Transparan</h4>
                            <p class="text-gray-700 leading-relaxed">Kami menjaga komunikasi yang terbuka dan responsif selama proses pengerjaan untuk memastikan hasil sesuai harapan.</p>
                        </div>
                    </div>
                </div>
                
                <div class="card group">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4 transform group-hover:scale-110 transition-transform duration-300">🔄</div>
                        <div>
                            <h4 class="text-xl font-bold mb-2 text-black">Revisi Hingga Puas</h4>
                            <p class="text-gray-700 leading-relaxed">Kepuasan klien adalah prioritas kami. Kami menyediakan revisi untuk memastikan hasil akhir sesuai dengan ekspektasi Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
