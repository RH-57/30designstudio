<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - 30design.studio</title>

    <link href="{{asset('assets/website/img/favicon.ico')}}" rel="icon">
    <meta name="description" content="30Design Studio melayani jasa desain kreatif mulai dari desain logo, desain grafis, packaging produk, hingga editing video. Dari konsep, desain, sampai siap digunakan untuk kebutuhan brand dan bisnis Anda.">
    <meta name="keywords" content="jasa desain grafis, jasa desain logo, jasa desain packaging, jasa desain kreatif, jasa desain brand, editing video, desain kemasan produk">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="Jasa Desain Kreatif & Packaging | 30Design Studio">
    <meta property="og:description" content="Layanan desain logo, desain grafis, packaging produk, dan editing video. Solusi kreatif untuk brand dan bisnis Anda.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/website/img/og-image.jpg') }}">
    <meta property="og:site_name" content="30Design Studio">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Jasa Desain Kreatif & Packaging | 30Design Studio">
    <meta name="twitter:description" content="Desain logo, grafis, packaging produk, dan video untuk kebutuhan brand dan bisnis.">
    <meta name="twitter:image" content="{{ asset('assets/website/img/og-image.jpg') }}">

    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </noscript>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .contact-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .contact-card:hover {
            transform: translateY(-8px);
        }

        .map-container {
            position: relative;
            overflow: hidden;
        }

        .map-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(255,255,255,0.1), transparent);
            pointer-events: none;
            z-index: 1;
        }
    </style>
</head>

<body class="bg-white overflow-x-hidden">

    @include('website.components.loading')
    @include('website.components.header')

    <!-- ================= HERO SECTION ================= -->
    <section class="relative pt-40 pb-20 overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-orange-50/50 via-white to-pink-50/50"></div>
        </div>

        <!-- Floating Gradient Orbs -->
        <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-gradient-to-br from-orange-300 to-pink-300 opacity-20 blur-3xl rounded-full animate-float"></div>
        <div class="absolute -bottom-32 -left-32 w-[400px] h-[400px] bg-gradient-to-br from-purple-300 to-pink-300 opacity-20 blur-3xl rounded-full animate-float" style="animation-delay: 2s;"></div>

        <div class="relative z-10 max-w-screen-xl mx-auto px-6 md:px-20">

            <!-- Breadcrumb -->
            <div class="flex items-center justify-center gap-2 text-sm text-gray-600 mb-6 animate-fade-in-up">
                <a href="/" class="hover:text-orange-500 transition">
                    <i class="fas fa-home mr-1"></i>
                    Home
                </a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-orange-500 font-semibold">Contact</span>
            </div>

            <!-- Main Content -->
            <div class="text-center mb-12">
                <div class="animate-fade-in-up" style="animation-delay: 0.1s;">
                    <span class="inline-flex items-center px-5 py-2 rounded-full bg-white border-2 border-orange-200 text-orange-600 text-xs uppercase tracking-wider font-bold mb-8 shadow-sm">
                        <i class="fas fa-comments mr-2"></i>
                        Mari Berdiskusi
                    </span>
                </div>

                <h1 class="text-5xl md:text-7xl font-black text-gray-900 leading-tight mb-6 animate-fade-in-up" style="animation-delay: 0.2s;">
                    Hubungi
                    <span class="block bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                        30Design Studio
                    </span>
                </h1>

                <p class="mt-6 max-w-3xl mx-auto text-gray-700 text-lg leading-relaxed animate-fade-in-up" style="animation-delay: 0.3s;">
                    Siap membantu Anda untuk <strong>konsultasi proyek</strong>, <strong>penawaran harga</strong>,
                    atau <strong>pertanyaan lainnya</strong>. Tim kami siap melayani dengan cepat dan profesional.
                </p>
            </div>
        </div>
    </section>

    <!-- ================= CONTACT INFO SECTION ================= -->
    <section class="relative py-20 bg-white overflow-hidden">

        <!-- Background Decoration -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-20 left-10 w-96 h-96 bg-orange-200/20 blur-3xl rounded-full"></div>
            <div class="absolute bottom-20 right-10 w-[500px] h-[500px] bg-pink-200/20 blur-3xl rounded-full"></div>
        </div>

        <div class="w-full max-w-screen-xl mx-auto px-6 md:px-20">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                    Siap
                    <span class="bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                        Wujudkan
                    </span>
                    Ide Anda?
                </h2>
                <p class="text-gray-700 text-lg max-w-2xl mx-auto">
                    Hubungi kami melalui berbagai channel komunikasi yang tersedia
                </p>
            </div>

            <!-- Contact Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">

                <!-- WhatsApp Card -->
                <div class="contact-card bg-white rounded-3xl shadow-xl p-8 border-2 border-gray-100 hover:border-green-300 hover:shadow-2xl group">
                    <div class="flex flex-col items-center text-center">
                        <!-- Icon -->
                        <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                            <i class="fab fa-whatsapp text-white text-3xl"></i>
                        </div>

                        <!-- Title -->
                        <h3 class="text-2xl font-black text-gray-900 mb-3">WhatsApp</h3>

                        <!-- Info -->
                        <p class="text-gray-600 mb-2">Chat langsung dengan kami</p>
                        <a href="https://wa.me/{{$contact->phone}}"
                           target="_blank"
                           class="text-green-600 font-bold text-lg mb-6 hover:text-green-700 transition">
                            +{{$contact->phone}}
                        </a>

                        <!-- CTA Button -->
                        <a href="https://wa.me/{{$contact->phone}}"
                           target="_blank"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-full font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all">
                            <i class="fab fa-whatsapp"></i>
                            <span>Chat Sekarang</span>
                        </a>
                    </div>
                </div>

                <!-- Email Card -->
                <div class="contact-card bg-white rounded-3xl shadow-xl p-8 border-2 border-gray-100 hover:border-blue-300 hover:shadow-2xl group">
                    <div class="flex flex-col items-center text-center">
                        <!-- Icon -->
                        <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                            <i class="fas fa-envelope text-white text-3xl"></i>
                        </div>

                        <!-- Title -->
                        <h3 class="text-2xl font-black text-gray-900 mb-3">Email</h3>

                        <!-- Info -->
                        <p class="text-gray-600 mb-2">Kirim email untuk detail project</p>
                        <a href="mailto:{{$contact->email}}"
                           class="text-blue-600 font-bold text-lg mb-6 hover:text-blue-700 transition break-all">
                            {{$contact->email}}
                        </a>

                        <!-- CTA Button -->
                        <a href="mailto:{{$contact->email}}"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-full font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all">
                            <i class="fas fa-paper-plane"></i>
                            <span>Kirim Email</span>
                        </a>
                    </div>
                </div>

                <!-- Phone Card -->
                <div class="contact-card bg-white rounded-3xl shadow-xl p-8 border-2 border-gray-100 hover:border-orange-300 hover:shadow-2xl group">
                    <div class="flex flex-col items-center text-center">
                        <!-- Icon -->
                        <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-orange-500 to-pink-500 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                            <i class="fas fa-phone text-white text-3xl"></i>
                        </div>

                        <!-- Title -->
                        <h3 class="text-2xl font-black text-gray-900 mb-3">Telepon</h3>

                        <!-- Info -->
                        <p class="text-gray-600 mb-2">Hubungi kami via telepon</p>
                        <a href="tel:+{{$contact->phone}}"
                           class="text-orange-600 font-bold text-lg mb-6 hover:text-orange-700 transition">
                            +{{$contact->phone}}
                        </a>

                        <!-- CTA Button -->
                        <a href="tel:+{{$contact->phone}}"
                           class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-full font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all">
                            <i class="fas fa-phone-alt"></i>
                            <span>Telepon Kami</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Office Address Card -->
            <div class="max-w-4xl mx-auto bg-gradient-to-br from-gray-900 to-gray-800 rounded-3xl shadow-2xl p-10 text-white">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <!-- Icon -->
                    <div class="flex-shrink-0 w-24 h-24 rounded-2xl bg-gradient-to-br from-orange-500 to-pink-500 flex items-center justify-center shadow-xl">
                        <i class="fas fa-map-marker-alt text-white text-4xl"></i>
                    </div>

                    <!-- Content -->
                    <div class="flex-1 text-center md:text-left">
                        <h3 class="text-3xl font-black mb-3">Alamat Kantor</h3>
                        <p class="text-gray-300 text-lg leading-relaxed mb-4">
                            {{$contact->address}}
                        </p>
                        <div class="flex flex-wrap gap-3 justify-center md:justify-start">
                            <span class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-md rounded-full text-sm border border-white/20">
                                <i class="fas fa-clock text-orange-400"></i>
                                <span>Senin - Sabtu: 09:00 - 18:00</span>
                            </span>
                            <span class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-md rounded-full text-sm border border-white/20">
                                <i class="fas fa-coffee text-pink-400"></i>
                                <span>Minggu: Tutup</span>
                            </span>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="flex-shrink-0">
                        <a href="#map"
                           class="inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-900 rounded-full font-bold hover:bg-gray-100 transform hover:scale-105 transition-all shadow-lg">
                            <i class="fas fa-location-arrow"></i>
                            <span>Lihat Map</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ================= MAP SECTION ================= -->
    <section id="map" class="relative py-20 bg-gradient-to-b from-white to-gray-50 overflow-hidden">

        <div class="max-w-screen-xl mx-auto px-6 md:px-20">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="inline-flex items-center px-5 py-2 rounded-full bg-gradient-to-r from-orange-500/10 to-pink-500/10 border border-orange-200 text-orange-600 text-xs uppercase tracking-wider font-bold mb-6 shadow-sm">
                    <i class="fas fa-map-marked-alt mr-2"></i>
                    Lokasi Kami
                </span>

                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                    Temukan
                    <span class="bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                        Kantor Kami
                    </span>
                </h2>

                <p class="text-gray-700 text-lg max-w-2xl mx-auto">
                    Kunjungi kantor kami untuk konsultasi langsung atau sekadar ngobrol tentang project Anda
                </p>
            </div>

            <!-- Map Container -->
            <div class="map-container relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-white">
                <iframe
                    src="https://www.google.com/maps?q={{ urlencode($contact->address) }}&output=embed"
                    class="w-full h-[500px] md:h-[600px] border-0"
                    style="filter: grayscale(0%) contrast(1.1) brightness(1.05);"
                    loading="lazy"
                    allowfullscreen=""
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

                <!-- Overlay Info Card (floating on map) -->
                <div class="absolute bottom-8 left-8 right-8 md:left-8 md:right-auto md:max-w-md bg-white/95 backdrop-blur-xl rounded-2xl shadow-2xl p-6 border border-gray-200">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-orange-500 to-pink-500 flex items-center justify-center">
                            <i class="fas fa-building text-white text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-lg font-black text-gray-900 mb-1">30Design Studio</h4>
                            <p class="text-sm text-gray-600 mb-3">{{$contact->address}}</p>
                            <a href="https://www.google.com/maps?q={{urlencode($contact->address)}}"
                               target="_blank"
                               class="inline-flex items-center gap-2 text-sm font-bold text-orange-600 hover:text-orange-700 transition">
                                <i class="fas fa-directions"></i>
                                <span>Dapatkan Petunjuk Arah</span>
                                <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ================= SOCIAL MEDIA SECTION ================= -->
    <section class="relative py-20 bg-white overflow-hidden">
        <div class="max-w-screen-xl mx-auto px-6 md:px-20">

            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                    Ikuti
                    <span class="bg-gradient-to-r from-orange-500 to-pink-500 bg-clip-text text-transparent">
                        Sosial Media
                    </span>
                    Kami
                </h2>
                <p class="text-gray-700 text-lg">
                    Dapatkan inspirasi desain dan update terbaru dari kami
                </p>
            </div>

            <div class="flex flex-wrap justify-center gap-6">
                <a href="#" target="_blank" class="group flex items-center gap-3 px-8 py-4 bg-gradient-to-br from-pink-500 to-pink-600 text-white rounded-full font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all">
                    <i class="fab fa-instagram text-2xl"></i>
                    <span>Instagram</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>

                <a href="#" target="_blank" class="group flex items-center gap-3 px-8 py-4 bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-full font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all">
                    <i class="fab fa-facebook text-2xl"></i>
                    <span>Facebook</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>

                <a href="#" target="_blank" class="group flex items-center gap-3 px-8 py-4 bg-gradient-to-br from-red-500 to-red-600 text-white rounded-full font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all">
                    <i class="fab fa-tiktok text-2xl"></i>
                    <span>TikTok</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>

                <a href="#" target="_blank" class="group flex items-center gap-3 px-8 py-4 bg-gradient-to-br from-blue-400 to-blue-500 text-white rounded-full font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all">
                    <i class="fab fa-linkedin text-2xl"></i>
                    <span>LinkedIn</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

        </div>
    </section>

    @include('website.components.cta')
    @include('website.components.footer')

    <script>
        // Smooth scroll to map
        document.querySelectorAll('a[href="#map"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector('#map').scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });
    </script>

</body>
</html>
