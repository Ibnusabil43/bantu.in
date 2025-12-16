@extends('layouts.app')

@section('title', 'Alur Kerja - bantu.in')

@section('content')

<!-- Hero Section -->
<section class="py-24 section-dark">
    <div class="container-custom text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 tracking-tight text-white">
            Alur <span class="text-gray-300">Kerja</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
            Proses kerja yang terstruktur dan transparan untuk hasil terbaik
        </p>
    </div>
</section>

<!-- Introduction -->
<section class="py-20 section-white">
    <div class="container-custom">
        <div class="max-w-3xl mx-auto text-center">
            <p class="text-lg text-gray-700 leading-relaxed">
                Kami menerapkan sistem kerja yang sistematis dan profesional untuk memastikan setiap proyek berjalan lancar dan menghasilkan output berkualitas tinggi. Berikut adalah tahapan yang akan Anda lalui saat bekerja sama dengan kami:
            </p>
        </div>
    </div>
</section>

<!-- Main Process Steps -->
<section class="py-24 section-light">
    <div class="container-custom">
        <div class="max-w-5xl mx-auto">
            
            <!-- Step 1 -->
            <div class="mb-16 relative">
                <div class="flex flex-col md:flex-row items-start gap-8">
                    <!-- Number -->
                    <div class="flex-shrink-0">
                        <div class="w-20 h-20 rounded-full border-4 border-black flex items-center justify-center bg-white shadow-lg">
                            <span class="text-3xl font-bold text-black">1</span>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1 card">
                        <h3 class="text-3xl font-bold mb-4 text-black">Konsultasi Awal</h3>
                        <p class="text-gray-700 text-lg leading-relaxed mb-6">
                            Tahap pertama dimulai dengan sesi konsultasi untuk memahami kebutuhan Anda secara mendalam. Pada tahap ini, kami akan:
                        </p>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-black mr-3 text-xl font-bold">•</span>
                                <span>Mendengarkan kebutuhan dan tujuan Anda secara detail</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-3 text-xl font-bold">•</span>
                                <span>Mengidentifikasi spesifikasi dan persyaratan proyek</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-3 text-xl font-bold">•</span>
                                <span>Membahas timeline dan ekspektasi hasil</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-3 text-xl font-bold">•</span>
                                <span>Memberikan rekomendasi pendekatan terbaik</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-3 text-xl font-bold">•</span>
                                <span>Menyepakati ruang lingkup pekerjaan dan biaya</span>
                            </li>
                        </ul>
                        <div class="mt-6 p-4 bg-gray-50 border border-gray-200 rounded-lg">
                            <p class="text-sm text-gray-700">
                                <strong class="text-black">Catatan:</strong> Konsultasi awal bersifat gratis dan tanpa komitmen. Anda bebas menentukan apakah ingin melanjutkan atau tidak setelah sesi ini.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Connecting Line -->
                <div class="hidden md:block absolute left-10 top-24 w-0.5 h-20 bg-gradient-to-b from-black to-transparent opacity-30"></div>
            </div>
            
            <!-- Step 2 -->
            <div class="mb-16 relative">
                <div class="flex flex-col md:flex-row items-start gap-8">
                    <!-- Number -->
                    <div class="flex-shrink-0">
                        <div class="w-20 h-20 rounded-full border-4 border-black flex items-center justify-center bg-white shadow-lg">
                            <span class="text-3xl font-bold text-black">2</span>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1 card">
                        <h3 class="text-3xl font-bold mb-4 text-black">Pendampingan Profesional</h3>
                        <p class="text-gray-700 text-lg leading-relaxed mb-6">
                            Setelah kesepakatan tercapai, kami akan memulai proses pendampingan dengan pendekatan yang terstruktur dan kolaboratif:
                        </p>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-black mr-3 text-xl font-bold">•</span>
                                <span>Menyusun rencana kerja dan timeline yang jelas</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-3 text-xl font-bold">•</span>
                                <span>Mengerjakan proyek sesuai standar akademik/profesional</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-3 text-xl font-bold">•</span>
                                <span>Memberikan progress update secara berkala</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-3 text-xl font-bold">•</span>
                                <span>Melakukan komunikasi dua arah untuk klarifikasi</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-3 text-xl font-bold">•</span>
                                <span>Mendokumentasikan setiap tahap pekerjaan</span>
                            </li>
                        </ul>
                        <div class="mt-6 p-4 bg-gray-50 border border-gray-200 rounded-lg">
                            <p class="text-sm text-gray-700">
                                <strong class="text-black">Keunggulan:</strong> Kami tidak hanya mengerjakan, tetapi juga mendampingi Anda untuk memahami proses, sehingga Anda mendapatkan nilai pembelajaran dari setiap proyek.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Connecting Line -->
                <div class="hidden md:block absolute left-10 top-24 w-0.5 h-20 bg-gradient-to-b from-black to-transparent opacity-30"></div>
            </div>
            
            <!-- Step 3 -->
            <div class="mb-12 relative">
                <div class="flex flex-col md:flex-row items-start gap-8">
                    <!-- Number -->
                    <div class="flex-shrink-0">
                        <div class="w-20 h-20 rounded-full border-4 border-black flex items-center justify-center bg-white shadow-lg">
                            <span class="text-3xl font-bold text-black">3</span>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1 card">
                        <h3 class="text-3xl font-bold mb-4 text-black">Review dan Penyelesaian</h3>
                        <p class="text-gray-700 text-lg leading-relaxed mb-6">
                            Tahap akhir adalah memastikan hasil pekerjaan memenuhi ekspektasi dan standar kualitas yang telah disepakati:
                        </p>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-black mr-3 text-xl font-bold">•</span>
                                <span>Penyampaian draft hasil pekerjaan untuk review</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-3 text-xl font-bold">•</span>
                                <span>Diskusi feedback dan masukan dari klien</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-3 text-xl font-bold">•</span>
                                <span>Melakukan revisi sesuai kebutuhan</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-3 text-xl font-bold">•</span>
                                <span>Quality check final untuk memastikan kualitas</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-3 text-xl font-bold">•</span>
                                <span>Penyerahan hasil final dan dokumentasi pendukung</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-3 text-xl font-bold">•</span>
                                <span>Dukungan pasca-penyelesaian jika diperlukan</span>
                            </li>
                        </ul>
                        <div class="mt-6 p-4 bg-gray-50 border border-gray-200 rounded-lg">
                            <p class="text-sm text-gray-700">
                                <strong class="text-black">Jaminan:</strong> Kami tidak meninggalkan Anda setelah penyerahan. Jika ada pertanyaan atau kebutuhan klarifikasi, kami tetap siap membantu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Communication & Support -->
<section class="py-24 section-white">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-black">Komunikasi & Dukungan</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="card group">
                    <h3 class="text-2xl font-bold mb-4 text-black">Komunikasi Responsif</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Sepanjang proses pengerjaan, kami menjaga jalur komunikasi yang terbuka. Anda dapat menghubungi kami melalui WhatsApp atau email untuk pertanyaan, update, atau diskusi kapan saja.
                    </p>
                </div>
                
                <div class="card group">
                    <h3 class="text-2xl font-bold mb-4 text-black">Progress Tracking</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Kami memberikan update progress secara berkala sehingga Anda selalu mengetahui status pekerjaan dan dapat memberikan masukan di setiap tahapan penting.
                    </p>
                </div>
                
                <div class="card group">
                    <h3 class="text-2xl font-bold mb-4 text-black">Fleksibilitas</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Kami memahami bahwa kebutuhan dapat berubah. Jika ada perubahan atau penyesuaian yang diperlukan, kami siap berdiskusi untuk menemukan solusi terbaik.
                    </p>
                </div>
                
                <div class="card group">
                    <h3 class="text-2xl font-bold mb-4 text-black">Kerahasiaan Data</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Semua informasi dan data yang Anda berikan dijaga kerahasiaannya dengan ketat. Kami tidak akan membagikan informasi apapun kepada pihak ketiga tanpa izin Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Expectations -->
<section class="py-24 section-light">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-8 text-black">Estimasi Waktu Pengerjaan</h2>
            <p class="text-gray-700 mb-12 leading-relaxed text-lg">
                Durasi pengerjaan bervariasi tergantung kompleksitas proyek. Berikut adalah estimasi umum:
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
                <div class="card group">
                    <h4 class="text-xl font-bold mb-2 text-black">Proyek Sederhana</h4>
                    <p class="text-3xl font-bold text-black mb-2">3-7 Hari</p>
                    <p class="text-sm text-gray-600">Makalah, tugas kecil, review singkat</p>
                </div>
                
                <div class="card group">
                    <h4 class="text-xl font-bold mb-2 text-black">Proyek Menengah</h4>
                    <p class="text-3xl font-bold text-black mb-2">1-3 Minggu</p>
                    <p class="text-sm text-gray-600">Tugas besar, literature review, proposal</p>
                </div>
                
                <div class="card group">
                    <h4 class="text-xl font-bold mb-2 text-black">Proyek Kompleks</h4>
                    <p class="text-3xl font-bold text-black mb-2">1-3 Bulan</p>
                    <p class="text-sm text-gray-600">Skripsi, tesis, penelitian lengkap</p>
                </div>
            </div>
            
            <p class="text-sm text-gray-500 mt-8">
                *Waktu dapat disesuaikan dengan deadline dan urgensi proyek Anda
            </p>
        </div>
    </div>
</section>

<!-- CTA Section -->


@endsection
