@extends('layouts.app')

@section('title', 'Tentang Kami - bantu.in')

@section('content')

<!-- Hero Section -->
<section class="py-24 section-dark">
    <div class="container-custom text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 tracking-tight text-white">
            Tentang <span class="text-gray-300">bantu.in</span>
        </h1>
        <p class="text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">
            Mitra terpercaya untuk solusi akademik dan digital profesional
        </p>
    </div>
</section>

<!-- Main About Section -->
<section class="py-24 section-white">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <div class="mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-8 text-black">Siapa Kami</h2>
                <div class="space-y-6 text-gray-700 text-lg leading-relaxed">
                    <p>
                        <strong class="text-black">bantu.in</strong> adalah platform layanan bantuan akademik dan digital profesional yang didirikan dengan tujuan memberikan pendampingan berkualitas tinggi bagi mahasiswa, peneliti, dan profesional yang membutuhkan dukungan dalam menyelesaikan berbagai kebutuhan akademik dan digital.
                    </p>
                    <p>
                        Kami memahami bahwa setiap individu memiliki tantangan unik dalam perjalanan akademik dan profesional mereka. Oleh karena itu, kami hadir untuk memberikan solusi yang disesuaikan dengan kebutuhan spesifik setiap klien, dengan tetap menjunjung tinggi standar etika dan profesionalisme.
                    </p>
                    <p>
                        Dengan tim yang berpengalaman dan berkomitmen pada kualitas, kami menyediakan berbagai layanan mulai dari pendampingan penulisan karya ilmiah hingga layanan digital marketing yang dapat membantu Anda mencapai tujuan dengan lebih efektif dan efisien.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="py-24 section-light">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-black">Visi Kami</h2>
            </div>
            
            <div class="card text-center">
                <p class="text-xl md:text-2xl text-gray-700 leading-relaxed font-medium">
                    Menjadi platform terdepan dalam penyediaan layanan bantuan akademik dan digital yang profesional, terpercaya, dan beretika, serta berkontribusi pada peningkatan kualitas pendidikan dan pengembangan profesional di Indonesia.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-24 section-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-black">Nilai-Nilai Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Prinsip-prinsip yang menjadi fondasi layanan kami
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <!-- Value 1 -->
            <div class="card group">
                <div class="flex items-start mb-4">
                    <div class="text-4xl mr-4 transform group-hover:scale-110 transition-transform duration-300">🎯</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-3 text-black">Profesionalisme</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Kami berkomitmen untuk selalu memberikan layanan dengan standar profesional tertinggi, didukung oleh tim yang kompeten dan berpengalaman di bidangnya masing-masing.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Value 2 -->
            <div class="card group">
                <div class="flex items-start mb-4">
                    <div class="text-4xl mr-4 transform group-hover:scale-110 transition-transform duration-300">📚</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-3 text-black">Etika Akademik</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Integritas akademik adalah prioritas utama kami. Setiap pekerjaan yang kami lakukan mengikuti kaidah dan standar akademik yang berlaku, menghormati hak kekayaan intelektual, dan mengedepankan kejujuran.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Value 3 -->
            <div class="card group">
                <div class="flex items-start mb-4">
                    <div class="text-4xl mr-4 transform group-hover:scale-110 transition-transform duration-300">🔐</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-3 text-black">Kerahasiaan</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Kami menjaga kerahasiaan data dan informasi klien dengan sangat serius. Semua informasi yang Anda bagikan kepada kami akan dijaga keamanannya dan tidak akan dibagikan kepada pihak ketiga tanpa izin.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Value 4 -->
            <div class="card group">
                <div class="flex items-start mb-4">
                    <div class="text-4xl mr-4 transform group-hover:scale-110 transition-transform duration-300">🤝</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-3 text-black">Pendampingan Berkualitas</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Kami tidak hanya mengerjakan tugas, tetapi mendampingi klien dalam proses pembelajaran. Tujuan kami adalah membantu Anda memahami dan berkembang, bukan sekadar menyelesaikan pekerjaan.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Value 5 -->
            <div class="card group">
                <div class="flex items-start mb-4">
                    <div class="text-4xl mr-4 transform group-hover:scale-110 transition-transform duration-300">✨</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-3 text-black">Kualitas Terjamin</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Setiap hasil kerja kami melalui proses quality control yang ketat untuk memastikan bahwa output yang diberikan memenuhi standar kualitas yang telah ditetapkan dan sesuai dengan harapan klien.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Value 6 -->
            <div class="card group">
                <div class="flex items-start mb-4">
                    <div class="text-4xl mr-4 transform group-hover:scale-110 transition-transform duration-300">💡</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-3 text-black">Inovasi Berkelanjutan</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Kami terus berinovasi dan mengembangkan layanan kami untuk mengikuti perkembangan kebutuhan akademik dan digital terkini, serta memanfaatkan teknologi terbaru untuk memberikan hasil terbaik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Commitment Section -->
<section class="py-24 section-light">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-8 text-black">Komitmen Kami</h2>
            <div class="space-y-6 text-gray-700 text-lg leading-relaxed">
                <p>
                    Di <strong class="text-black">bantu.in</strong>, kami berkomitmen untuk selalu mengutamakan kepentingan klien. Setiap proyek yang kami tangani diperlakukan dengan serius dan profesional, dengan perhatian penuh terhadap detail dan kualitas.
                </p>
                <p>
                    Kami percaya bahwa kesuksesan klien adalah kesuksesan kami. Oleh karena itu, kami akan bekerja sama dengan Anda untuk memahami kebutuhan spesifik Anda dan memberikan solusi yang paling sesuai.
                </p>
                <p class="text-black font-semibold text-xl">
                    Kepercayaan Anda adalah aset paling berharga bagi kami.
                </p>
            </div>
            
            <div class="mt-12">
                <a href="{{ route('contact') }}" class="btn-primary">
                    Mulai Konsultasi
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
