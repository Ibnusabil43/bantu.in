@extends('layouts.app')

@section('title', 'Kontak - bantu.in')

@section('content')

<!-- Hero Section -->
<section class="py-24 section-dark">
    <div class="container-custom text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 tracking-tight text-white">
            Hubungi <span class="text-gray-300">Kami</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
            Siap membantu Anda dengan solusi terbaik untuk kebutuhan akademik dan digital
        </p>
    </div>
</section>

<!-- Contact Info & Form Section -->
<section class="py-24 section-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            
            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-bold mb-8 text-black">Informasi Kontak</h2>
                
                <div class="space-y-6 mb-12">
                    <!-- WhatsApp -->
                    <div class="card group">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-black rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-black">WhatsApp</h3>
                                <p class="text-gray-700 mb-3">Hubungi kami melalui WhatsApp untuk respon cepat</p>
                                <a href="https://wa.me/6281234567890" target="_blank" class="text-black hover:text-gray-700 transition-colors inline-flex items-center font-semibold">
                                    <span>+62 812-3456-7890</span>
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="card group">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-black rounded-lg flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-black">Email</h3>
                                <p class="text-gray-700 mb-3">Kirim email untuk pertanyaan detail</p>
                                <a href="mailto:info@bantu.in" class="text-black hover:text-gray-700 transition-colors inline-flex items-center font-semibold">
                                    <span>info@bantu.in</span>
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Operating Hours -->
                <div class="card">
                    <h3 class="text-xl font-bold mb-4 text-black">Jam Operasional</h3>
                    <div class="space-y-2 text-gray-700">
                        <div class="flex justify-between">
                            <span>Senin - Jumat</span>
                            <span class="text-black font-semibold">08:00 - 20:00 WIB</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Sabtu</span>
                            <span class="text-black font-semibold">09:00 - 17:00 WIB</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Minggu</span>
                            <span class="text-black font-semibold">10:00 - 15:00 WIB</span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mt-4">
                        *Pesan di luar jam operasional akan dibalas pada hari kerja berikutnya
                    </p>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold mb-8 text-black">Kirim Pesan</h2>
                
                <form id="contact-form" class="space-y-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium mb-2 text-black">Nama Lengkap</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            required
                            class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-black transition-colors text-black"
                            placeholder="Masukkan nama lengkap Anda"
                        >
                    </div>
                    
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium mb-2 text-black">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            required
                            class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-black transition-colors text-black"
                            placeholder="nama@email.com"
                        >
                    </div>
                    
                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-medium mb-2 text-black">Nomor WhatsApp</label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            required
                            class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-black transition-colors text-black"
                            placeholder="08123456789"
                        >
                    </div>
                    
                    <!-- Service Type -->
                    <div>
                        <label for="service" class="block text-sm font-medium mb-2 text-black">Jenis Layanan</label>
                        <select 
                            id="service" 
                            name="service" 
                            required
                            class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-black transition-colors text-black"
                        >
                            <option value="">Pilih jenis layanan</option>
                            <option value="skripsi">Pendampingan Skripsi & Tesis</option>
                            <option value="makalah">Bantuan Penulisan Makalah</option>
                            <option value="tugas-besar">Tugas Besar & Proyek Kuliah</option>
                            <option value="literature-review">Literature Review</option>
                            <option value="google-maps">Bantuan Review Google Maps</option>
                            <option value="watch-time">Peningkatan Watch Time</option>
                            <option value="social-media">Engagement Media Sosial</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>
                    
                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium mb-2 text-black">Pesan</label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="5" 
                            required
                            class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-black transition-colors text-black resize-none"
                            placeholder="Jelaskan kebutuhan Anda secara singkat..."
                        ></textarea>
                    </div>
                    
                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full btn-primary text-center"
                    >
                        Kirim Pesan
                    </button>
                    
                    <p class="text-sm text-gray-500 text-center">
                        Dengan mengirim pesan, Anda menyetujui bahwa kami dapat menghubungi Anda melalui email atau WhatsApp
                    </p>
                </form>
                
                <!-- Success Message (Hidden by default) -->
                <div id="success-message" class="hidden mt-6 p-4 bg-gray-50 border border-gray-200 rounded-lg">
                    <p class="text-black text-center font-semibold">
                        ✓ Terima kasih! Pesan Anda telah terkirim. Kami akan segera menghubungi Anda.
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Quick Contact CTA -->
<section class="py-24 section-light">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-black">Butuh Bantuan Segera?</h2>
            <p class="text-xl text-gray-700 mb-10">
                Hubungi kami langsung melalui WhatsApp untuk konsultasi cepat
            </p>
            <a 
                href="https://wa.me/6281234567890?text=Halo%20bantu.in,%20saya%20ingin%20berkonsultasi%20tentang%20layanan%20Anda" 
                target="_blank"
                class="btn-primary inline-flex items-center"
            >
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
                Chat via WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- FAQ Preview -->
<section class="py-24 section-white">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-black">Pertanyaan Umum</h2>
            
            <div class="space-y-6">
                <div class="card">
                    <h4 class="text-xl font-bold mb-3 text-black">Bagaimana cara memulai?</h4>
                    <p class="text-gray-700 leading-relaxed">
                        Anda dapat memulai dengan menghubungi kami melalui WhatsApp atau mengisi form kontak di atas. Kami akan merespons dalam 1x24 jam untuk menjadwalkan konsultasi gratis.
                    </p>
                </div>
                
                <div class="card">
                    <h4 class="text-xl font-bold mb-3 text-black">Apakah data saya aman?</h4>
                    <p class="text-gray-700 leading-relaxed">
                        Ya, kami menjaga kerahasiaan semua data dan informasi klien dengan sangat ketat. Informasi Anda tidak akan dibagikan kepada pihak ketiga tanpa izin.
                    </p>
                </div>
                
                <div class="card">
                    <h4 class="text-xl font-bold mb-3 text-black">Berapa biaya layanan?</h4>
                    <p class="text-gray-700 leading-relaxed">
                        Biaya bervariasi tergantung jenis layanan dan kompleksitas proyek. Hubungi kami untuk mendapatkan penawaran yang disesuaikan dengan kebutuhan Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contact-form');
        const successMessage = document.getElementById('success-message');
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(form);
            const data = Object.fromEntries(formData);
            
            // Create WhatsApp message
            const message = `Halo bantu.in!%0A%0ANama: ${data.name}%0AEmail: ${data.email}%0AWhatsApp: ${data.phone}%0ALayanan: ${data.service}%0A%0APesan:%0A${data.message}`;
            
            // Open WhatsApp
            window.open(`https://wa.me/6281234567890?text=${message}`, '_blank');
            
            // Show success message
            successMessage.classList.remove('hidden');
            
            // Reset form
            form.reset();
            
            // Hide success message after 5 seconds
            setTimeout(() => {
                successMessage.classList.add('hidden');
            }, 5000);
        });
    });
</script>
@endpush
