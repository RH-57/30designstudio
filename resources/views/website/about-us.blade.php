<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - 30Design.Studio</title>

    <link href="{{asset('assets/website/img/favicon.ico')}}" rel="icon">
    <meta name="description" content="30Design Studio adalah jasa desain packaging profesional dari konsep visual hingga proses cetak, membantu brand tampil menonjol dan siap dijual.">
    <meta name="keywords" content="jasa desain grafis, jasa desain logo, jasa desain packaging, studio desain kreatif">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="Tentang Kami - 30Design Studio">
    <meta property="og:description" content="Cerita, nilai, dan cara kerja 30Design Studio dalam membangun brand melalui desain.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/website/img/og-image.jpg') }}">

    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="preload"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          as="style"
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </noscript>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-white text-gray-800 overflow-x-hidden">

    @include('website.components.loading')
    @include('website.components.header')

    <!-- ================= HERO SECTION ================= -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 parallax-bg">
            <img src="{{ asset('assets/website/img/hero-about.jpg') }}"
                class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-br from-white/95 via-orange-50/90 to-pink-50/90"></div>
        </div>

        <!-- Floating Gradient Orbs -->
        <div class="absolute -top-32 -right-32 w-[600px] h-[600px] bg-gradient-to-br from-orange-400 to-pink-400 opacity-20 blur-3xl rounded-full animate-float"></div>
        <div class="absolute bottom-0 -left-32 w-[500px] h-[500px] bg-gradient-to-br from-purple-400 to-pink-400 opacity-20 blur-3xl rounded-full animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 w-[400px] h-[400px] bg-gradient-to-br from-yellow-300 to-orange-300 opacity-15 blur-3xl rounded-full animate-float" style="animation-delay: 4s;"></div>

        <div class="relative max-w-screen-xl mx-auto px-6 md:px-20 text-center py-32">
            <div class="flex items-center justify-center gap-2 text-sm text-gray-600 mb-6 animate-fade-in-up">
                <a href="/" class="hover:text-orange-500 transition">Home</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-orange-500 font-semibold">Tetang Kami</span>
            </div>

            <div class="animate-fade-in-up" style="animation-delay: 0.1s;">
                <span class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-orange-500/10 to-pink-500/10 border border-orange-200 text-orange-600 text-xs uppercase tracking-wider font-semibold mb-8">
                    <i class="fas fa-star mr-2"></i>
                    Tentang 30Design Studio
                </span>
            </div>

            <h1 class="text-5xl md:text-7xl font-black text-gray-900 leading-tight mb-6 animate-fade-in-up" style="animation-delay: 0.2s;">
                Kami Mengubah Ide<br/>
                <span class="relative inline-block">
                    <span class="bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                        Menjadi Packaging
                    </span>
                    <svg class="absolute -bottom-4 left-0 w-full" height="12" viewBox="0 0 300 12" fill="none">
                        <path d="M2 10C50 5 100 2 150 5C200 8 250 7 298 10" stroke="url(#gradient)" stroke-width="3" stroke-linecap="round"/>
                        <defs>
                            <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:#f97316" />
                                <stop offset="50%" style="stop-color:#ec4899" />
                                <stop offset="100%" style="stop-color:#9333ea" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
                <br/>yang Siap Dijual
            </h1>

            <p class="mt-8 max-w-3xl mx-auto text-gray-700 text-lg md:text-xl leading-relaxed animate-fade-in-up" style="animation-delay: 0.3s;">
                Partner desain packaging profesional yang menggabungkan <strong>strategi brand</strong>,
                <strong>estetika visual</strong>, dan <strong>kesiapan produksi</strong> dalam satu solusi terintegrasi.
            </p>

            <div class="mt-12 flex flex-wrap gap-4 justify-center animate-fade-in-up" style="animation-delay: 0.4s;">
                <a href="#story" class="group px-8 py-4 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-full font-semibold shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                    Kenali Kami Lebih Dalam
                    <i class="fas fa-arrow-down ml-2 group-hover:translate-y-1 transition-transform"></i>
                </a>
                <a href="#contact" class="px-8 py-4 bg-white text-gray-800 rounded-full font-semibold shadow-lg hover:shadow-2xl border-2 border-gray-200 hover:border-orange-500 transform hover:scale-105 transition-all duration-300">
                    Mulai Project
                    <i class="fas fa-rocket ml-2"></i>
                </a>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                <i class="fas fa-chevron-down text-orange-500 text-2xl"></i>
            </div>
        </div>
    </section>

    <!-- ================= STATS SECTION - REDESIGNED ================= -->
    <section class="relative py-24 bg-gradient-to-br from-gray-900 via-gray-800 to-black overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>

        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-gradient-to-br from-orange-500 to-pink-500 opacity-20 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-gradient-to-br from-purple-500 to-pink-500 opacity-20 blur-3xl"></div>

        <div class="relative max-w-screen-xl mx-auto px-6 md:px-20">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Dipercaya oleh
                    <span class="bg-gradient-to-r from-orange-400 to-pink-400 bg-clip-text text-transparent">
                        Brand Berkembang
                    </span>
                </h2>
                <p class="text-gray-400 text-lg">Angka yang berbicara tentang pengalaman kami</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Stat Card 1 -->
                <div class="stat-card relative overflow-hidden rounded-3xl p-8 group hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>

                    <div class="relative">
                        <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-orange-500 to-pink-500 mb-6 shadow-lg">
                            <i class="fas fa-check text-white text-2xl"></i>
                        </div>

                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-6xl font-black bg-gradient-to-r from-orange-400 to-pink-400 bg-clip-text text-transparent counter" data-target="250">0</span>
                            <span class="text-3xl font-bold text-orange-400">+</span>
                        </div>
                        <p class="text-gray-300 font-semibold text-lg">Project Selesai</p>
                        <p class="text-gray-500 text-sm mt-2">Dari konsep hingga produksi massal</p>
                    </div>
                </div>

                <!-- Stat Card 2 -->
                <div class="stat-card relative overflow-hidden rounded-3xl p-8 group hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-pink-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>

                    <div class="relative">
                        <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-pink-500 to-purple-500 mb-6 shadow-lg">
                            <i class="fas fa-heart text-white text-2xl"></i>
                        </div>

                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-6xl font-black bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text text-transparent counter" data-target="150">0</span>
                            <span class="text-3xl font-bold text-pink-400">+</span>
                        </div>
                        <p class="text-gray-300 font-semibold text-lg">Klien Puas</p>
                        <p class="text-gray-500 text-sm mt-2">Brand yang terus bertumbuh</p>
                    </div>
                </div>

                <!-- Stat Card 3 -->
                <div class="stat-card relative overflow-hidden rounded-3xl p-8 group hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>

                    <div class="relative">
                        <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 mb-6 shadow-lg">
                            <i class="fas fa-clock text-white text-2xl"></i>
                        </div>

                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-6xl font-black bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent counter" data-target="11">0</span>
                            <span class="text-3xl font-bold text-purple-400">k+</span>
                        </div>
                        <p class="text-gray-300 font-semibold text-lg">Jam Pengalaman</p>
                        <p class="text-gray-500 text-sm mt-2">Keahlian yang terus diasah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= STORY SECTION - ENHANCED ================= -->
    <section id="story" class="relative py-32 bg-gradient-to-b from-white to-orange-50/30 overflow-hidden">
        <div class="absolute top-20 left-10 w-72 h-72 bg-orange-200/30 blur-3xl rounded-full"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-pink-200/30 blur-3xl rounded-full"></div>

        <div class="relative max-w-screen-xl mx-auto px-6 md:px-20">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <!-- Left Content -->
                <div class="order-2 md:order-1">
                    <span class="inline-flex items-center px-4 py-2 rounded-full bg-orange-100 text-orange-600 text-xs uppercase tracking-wider font-semibold mb-6">
                        <i class="fas fa-book-open mr-2"></i>
                        Cerita Kami
                    </span>

                    <h2 class="text-4xl md:text-5xl font-black mb-6 leading-tight">
                        Desain Bukan Hanya
                        <span class="block bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                            Soal Estetika
                        </span>
                    </h2>

                    <div class="space-y-6 text-gray-700 text-lg leading-relaxed">
                        <p class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-orange-500 mt-1 flex-shrink-0"></i>
                            <span>Kami percaya <strong>packaging yang baik</strong> adalah kombinasi sempurna antara visual yang kuat, fungsi yang tepat, dan kesiapan produksi.</span>
                        </p>

                        <p class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-pink-500 mt-1 flex-shrink-0"></i>
                            <span>Dari <strong>UMKM hingga brand berkembang</strong>, kami membantu mengubah ide menjadi kemasan yang layak dijual dan dipercaya pasar.</span>
                        </p>

                        <p class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-purple-500 mt-1 flex-shrink-0"></i>
                            <span>Setiap project adalah <strong>kolaborasi strategis</strong> untuk memastikan packaging Anda tidak hanya cantik, tapi juga efektif.</span>
                        </p>
                    </div>

                    <div class="mt-10 flex flex-wrap gap-4">
                        <div class="flex items-center gap-3 bg-white px-6 py-4 rounded-2xl shadow-md">
                            <i class="fas fa-award text-2xl text-orange-500"></i>
                            <div>
                                <p class="font-bold text-gray-900">Quality First</p>
                                <p class="text-sm text-gray-600">Standar tinggi di setiap detail</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 bg-white px-6 py-4 rounded-2xl shadow-md">
                            <i class="fas fa-handshake text-2xl text-pink-500"></i>
                            <div>
                                <p class="font-bold text-gray-900">Partnership</p>
                                <p class="text-sm text-gray-600">Bukan vendor, tapi partner</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Visual -->
                <div class="order-1 md:order-2 relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500 via-pink-500 to-purple-600 blur-3xl opacity-30 rounded-3xl transform rotate-6"></div>
                    <div class="relative">
                        <img src="{{ asset('assets/website/img/about.png') }}"
                            alt="30Design Studio Story"
                            class="relative rounded-3xl shadow-2xl transform hover:scale-105 transition-transform duration-500">

                        <!-- Floating Badge -->
                        <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-2xl animate-float">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-orange-500 to-pink-500 flex items-center justify-center">
                                    <i class="fas fa-shield-alt text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">Terpercaya</p>
                                    <p class="text-sm text-gray-600">Sejak 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= VALUES SECTION - REDESIGNED ================= -->
    <section class="relative py-32 bg-white overflow-hidden">
        <div class="max-w-screen-xl mx-auto px-6 md:px-20">
            <div class="text-center mb-20">
                <span class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-orange-500/10 to-pink-500/10 border border-orange-200 text-orange-600 text-xs uppercase tracking-wider font-semibold mb-6">
                    <i class="fas fa-gem mr-2"></i>
                    Nilai Kami
                </span>
                <h2 class="text-4xl md:text-5xl font-black mb-6">
                    Prinsip yang Kami
                    <span class="block bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                        Pegang Teguh
                    </span>
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Tiga pilar utama yang menjadi fondasi setiap project kami
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Value Card 1 -->
                <div class="value-card group relative bg-gradient-to-br from-orange-50 to-white p-10 rounded-3xl border-2 border-orange-100 hover:border-orange-300 hover:shadow-2xl">
                    <div class="absolute top-6 right-6 w-16 h-16 bg-gradient-to-br from-orange-500 to-pink-500 rounded-2xl opacity-10 group-hover:opacity-20 transition-opacity"></div>

                    <div class="relative">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-orange-500 to-pink-500 flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
                            <i class="fas fa-lightbulb text-white text-2xl"></i>
                        </div>

                        <h3 class="font-black text-2xl mb-4 text-gray-900">Strategic Thinking</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Setiap desain kami dibuat berdasarkan <strong>riset mendalam</strong> dan pemahaman tujuan bisnis Anda.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start gap-2">
                                <i class="fas fa-arrow-right text-orange-500 mt-1"></i>
                                <span>Analisis target market</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-arrow-right text-orange-500 mt-1"></i>
                                <span>Positioning yang tepat</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-arrow-right text-orange-500 mt-1"></i>
                                <span>Diferensiasi kompetitif</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Value Card 2 -->
                <div class="value-card group relative bg-gradient-to-br from-pink-50 to-white p-10 rounded-3xl border-2 border-pink-100 hover:border-pink-300 hover:shadow-2xl">
                    <div class="absolute top-6 right-6 w-16 h-16 bg-gradient-to-br from-pink-500 to-purple-500 rounded-2xl opacity-10 group-hover:opacity-20 transition-opacity"></div>

                    <div class="relative">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-pink-500 to-purple-500 flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
                            <i class="fas fa-eye text-white text-2xl"></i>
                        </div>

                        <h3 class="font-black text-2xl mb-4 text-gray-900">Visual Impact</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Desain yang <strong>menarik perhatian</strong> di tengah persaingan ketat di rak dan marketplace.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start gap-2">
                                <i class="fas fa-arrow-right text-pink-500 mt-1"></i>
                                <span>Desain yang memorable</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-arrow-right text-pink-500 mt-1"></i>
                                <span>Konsistensi brand identity</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-arrow-right text-pink-500 mt-1"></i>
                                <span>Aesthetic yang on-point</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Value Card 3 -->
                <div class="value-card group relative bg-gradient-to-br from-purple-50 to-white p-10 rounded-3xl border-2 border-purple-100 hover:border-purple-300 hover:shadow-2xl">
                    <div class="absolute top-6 right-6 w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl opacity-10 group-hover:opacity-20 transition-opacity"></div>

                    <div class="relative">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
                            <i class="fas fa-print text-white text-2xl"></i>
                        </div>

                        <h3 class="font-black text-2xl mb-4 text-gray-900">Production Ready</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            File desain yang <strong>siap cetak</strong>, minim revisi, dan aman untuk produksi massal.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start gap-2">
                                <i class="fas fa-arrow-right text-purple-500 mt-1"></i>
                                <span>Standar industri percetakan</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-arrow-right text-purple-500 mt-1"></i>
                                <span>Spesifikasi teknis lengkap</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-arrow-right text-purple-500 mt-1"></i>
                                <span>Quality control ketat</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= PROCESS TIMELINE - REDESIGNED ================= -->
    <section class="relative py-32 bg-gradient-to-br from-gray-50 to-white overflow-hidden">
        <div class="absolute top-20 right-10 w-96 h-96 bg-purple-200/30 blur-3xl rounded-full"></div>

        <div class="relative max-w-screen-xl mx-auto px-6 md:px-20">
            <div class="text-center mb-20">
                <span class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-orange-500/10 to-pink-500/10 border border-orange-200 text-orange-600 text-xs uppercase tracking-wider font-semibold mb-6">
                    <i class="fas fa-route mr-2"></i>
                    Proses Kerja
                </span>
                <h2 class="text-4xl md:text-5xl font-black mb-6">
                    Bagaimana Kami
                    <span class="block bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                        Bekerja Bersama Anda
                    </span>
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Proses yang terstruktur, transparan, dan kolaboratif
                </p>
            </div>

            <div class="relative">
                <!-- Timeline Line -->
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 top-0 bottom-0 w-1 timeline-line rounded-full"></div>

                <!-- Timeline Items -->
                <div class="space-y-16">
                    <!-- Step 1 -->
                    <div class="relative grid md:grid-cols-2 gap-8 items-center">
                        <div class="md:text-right md:pr-16">
                            <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-gradient-to-br from-orange-500 to-pink-500 text-white text-3xl font-black mb-6 shadow-xl md:float-right">
                                01
                            </div>
                            <div class="clear-both"></div>
                            <h3 class="text-3xl font-black mb-4 text-gray-900">Memahami</h3>
                            <p class="text-gray-700 text-lg mb-4">
                                Kami mendengarkan visi Anda dan melakukan riset mendalam tentang brand, produk, dan target market.
                            </p>
                            <ul class="space-y-2 text-gray-600 inline-block text-left md:text-right">
                                <li class="flex md:flex-row-reverse items-center gap-2">
                                    <i class="fas fa-comments text-orange-500"></i>
                                    <span>Konsultasi awal gratis</span>
                                </li>
                                <li class="flex md:flex-row-reverse items-center gap-2">
                                    <i class="fas fa-search text-orange-500"></i>
                                    <span>Riset kompetitor</span>
                                </li>
                                <li class="flex md:flex-row-reverse items-center gap-2">
                                    <i class="fas fa-bullseye text-orange-500"></i>
                                    <span>Define objectives</span>
                                </li>
                            </ul>
                        </div>
                        <div class="md:pl-16">
                            <div class="bg-white p-8 rounded-3xl shadow-xl border border-orange-100">
                                <img src="{{ asset('assets/website/img/about.png') }}"
                                    alt="Understanding Phase"
                                    class="rounded-2xl w-full">
                            </div>
                        </div>
                        <!-- Center Dot -->
                        <div class="hidden md:block absolute left-1/2 top-8 transform -translate-x-1/2 w-6 h-6 rounded-full bg-gradient-to-br from-orange-500 to-pink-500 border-4 border-white shadow-lg"></div>
                    </div>

                    <!-- Step 2 -->
                    <div class="relative grid md:grid-cols-2 gap-8 items-center">
                        <div class="md:pl-16 order-2 md:order-1">
                            <div class="bg-white p-8 rounded-3xl shadow-xl border border-pink-100">
                                <img src="{{ asset('assets/website/img/about.png') }}"
                                    alt="Creation Phase"
                                    class="rounded-2xl w-full">
                            </div>
                        </div>
                        <div class="md:pr-16 order-1 md:order-2">
                            <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-gradient-to-br from-pink-500 to-purple-500 text-white text-3xl font-black mb-6 shadow-xl">
                                02
                            </div>
                            <h3 class="text-3xl font-black mb-4 text-gray-900">Menciptakan</h3>
                            <p class="text-gray-700 text-lg mb-4">
                                Mengembangkan konsep visual yang relevan dengan positioning brand dan menarik target audience.
                            </p>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-palette text-pink-500"></i>
                                    <span>Eksplorasi visual concept</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-pencil-ruler text-pink-500"></i>
                                    <span>Design mockup & preview</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fas fa-redo text-pink-500"></i>
                                    <span>Revisi hingga sempurna</span>
                                </li>
                            </ul>
                        </div>
                        <!-- Center Dot -->
                        <div class="hidden md:block absolute left-1/2 top-8 transform -translate-x-1/2 w-6 h-6 rounded-full bg-gradient-to-br from-pink-500 to-purple-500 border-4 border-white shadow-lg"></div>
                    </div>

                    <!-- Step 3 -->
                    <div class="relative grid md:grid-cols-2 gap-8 items-center">
                        <div class="md:text-right md:pr-16">
                            <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 text-white text-3xl font-black mb-6 shadow-xl md:float-right">
                                03
                            </div>
                            <div class="clear-both"></div>
                            <h3 class="text-3xl font-black mb-4 text-gray-900">Menyempurnakan</h3>
                            <p class="text-gray-700 text-lg mb-4">
                                Finalisasi desain dengan standar cetak profesional, siap untuk produksi massal tanpa kendala.
                            </p>
                            <ul class="space-y-2 text-gray-600 inline-block text-left md:text-right">
                                <li class="flex md:flex-row-reverse items-center gap-2">
                                    <i class="fas fa-file-alt text-purple-500"></i>
                                    <span>File siap cetak (print-ready)</span>
                                </li>
                                <li class="flex md:flex-row-reverse items-center gap-2">
                                    <i class="fas fa-clipboard-check text-purple-500"></i>
                                    <span>Spesifikasi teknis lengkap</span>
                                </li>
                                <li class="flex md:flex-row-reverse items-center gap-2">
                                    <i class="fas fa-headset text-purple-500"></i>
                                    <span>Support after delivery</span>
                                </li>
                            </ul>
                        </div>
                        <div class="md:pl-16">
                            <div class="bg-white p-8 rounded-3xl shadow-xl border border-purple-100">
                                <img src="{{ asset('assets/website/img/about.png') }}"
                                    alt="Perfection Phase"
                                    class="rounded-2xl w-full">
                            </div>
                        </div>
                        <!-- Center Dot -->
                        <div class="hidden md:block absolute left-1/2 top-8 transform -translate-x-1/2 w-6 h-6 rounded-full bg-gradient-to-br from-purple-500 to-pink-500 border-4 border-white shadow-lg"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= WHY CHOOSE US - REDESIGNED ================= -->
    <section class="relative py-32 bg-gradient-to-br from-white via-orange-50/30 to-pink-50/30 overflow-hidden">
        <div class="absolute -top-24 -left-24 w-[500px] h-[500px] bg-gradient-to-br from-orange-400 to-pink-400 opacity-20 blur-3xl rounded-full"></div>
        <div class="absolute -bottom-24 -right-24 w-[500px] h-[500px] bg-gradient-to-br from-purple-400 to-pink-400 opacity-20 blur-3xl rounded-full"></div>

        <div class="relative max-w-screen-xl mx-auto px-6 md:px-20">
            <div class="text-center mb-20">
                <span class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-orange-500/10 to-pink-500/10 border border-orange-200 text-orange-600 text-xs uppercase tracking-wider font-semibold mb-6">
                    <i class="fas fa-trophy mr-2"></i>
                    Kenapa Memilih Kami
                </span>
                <h2 class="text-4xl md:text-5xl font-black mb-6">
                    Alasan Brand Percaya
                    <span class="block bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                        30Design Studio
                    </span>
                </h2>
                <p class="text-gray-700 text-lg max-w-3xl mx-auto">
                    Bukan sekadar jasa desain biasa. Kami adalah <strong>partner strategis</strong>
                    yang membantu brand Anda tumbuh melalui packaging yang efektif.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left - Visual -->
                <div class="relative order-2 md:order-1">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500 via-pink-500 to-purple-600 blur-3xl opacity-30 rounded-3xl transform -rotate-6"></div>
                    <img src="{{ asset('assets/website/img/why-us.jpg') }}"
                        alt="Why Choose 30Design Studio"
                        class="relative rounded-3xl shadow-2xl transform hover:scale-105 transition-transform duration-500">

                    <!-- Floating Stats -->
                    <div class="absolute -top-6 -right-6 bg-white p-6 rounded-2xl shadow-2xl animate-float">
                        <p class="text-3xl font-black bg-gradient-to-r from-orange-500 to-pink-500 bg-clip-text text-transparent">98%</p>
                        <p class="text-sm text-gray-600">Satisfaction Rate</p>
                    </div>
                </div>

                <!-- Right - Reasons -->
                <div class="space-y-6 order-1 md:order-2">
                    <!-- Reason 1 -->
                    <div class="group bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-orange-200">
                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-gradient-to-br from-orange-500 to-pink-500 flex items-center justify-center text-white text-2xl shadow-lg group-hover:scale-110 transition-transform">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <div>
                                <h3 class="font-black text-xl mb-3 text-gray-900">Desain yang Siap Jual</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Tidak hanya cantik, tapi juga <strong>strategis</strong>. Setiap elemen dirancang
                                    untuk meningkatkan daya tarik produk di mata konsumen.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Reason 2 -->
                    <div class="group bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-pink-200">
                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-gradient-to-br from-pink-500 to-purple-500 flex items-center justify-center text-white text-2xl shadow-lg group-hover:scale-110 transition-transform">
                                <i class="fas fa-brain"></i>
                            </div>
                            <div>
                                <h3 class="font-black text-xl mb-3 text-gray-900">Disesuaikan dengan Target Market</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Kami menyesuaikan <strong>visual language</strong> dengan karakteristik produk
                                    dan preferensi target audience Anda.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Reason 3 -->
                    <div class="group bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-purple-200">
                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center text-white text-2xl shadow-lg group-hover:scale-110 transition-transform">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div>
                                <h3 class="font-black text-xl mb-3 text-gray-900">Production Ready Files</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    File desain dengan <strong>standar industri</strong>, lengkap dengan spesifikasi
                                    teknis untuk proses cetak yang smooth.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Reason 4 -->
                    <div class="group bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-orange-200">
                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-gradient-to-br from-orange-500 to-yellow-500 flex items-center justify-center text-white text-2xl shadow-lg group-hover:scale-110 transition-transform">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div>
                                <h3 class="font-black text-xl mb-3 text-gray-900">One-Stop Solution</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Dari konsep hingga produksi, <strong>semua terintegrasi</strong>.
                                    Hemat waktu, tenaga, dan biaya koordinasi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trust Badges -->
            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center p-6 bg-white rounded-2xl shadow-md">
                    <i class="fas fa-shield-alt text-3xl text-orange-500 mb-2"></i>
                    <p class="font-bold text-gray-900">100% Legal</p>
                    <p class="text-sm text-gray-600">Licensed & Insured</p>
                </div>
                <div class="text-center p-6 bg-white rounded-2xl shadow-md">
                    <i class="fas fa-redo text-3xl text-pink-500 mb-2"></i>
                    <p class="font-bold text-gray-900">Free Revisi</p>
                    <p class="text-sm text-gray-600">Sampai Puas</p>
                </div>
                <div class="text-center p-6 bg-white rounded-2xl shadow-md">
                    <i class="fas fa-clock text-3xl text-purple-500 mb-2"></i>
                    <p class="font-bold text-gray-900">On-Time</p>
                    <p class="text-sm text-gray-600">Guarantee</p>
                </div>
                <div class="text-center p-6 bg-white rounded-2xl shadow-md">
                    <i class="fas fa-headset text-3xl text-orange-500 mb-2"></i>
                    <p class="font-bold text-gray-900">24/7 Support</p>
                    <p class="text-sm text-gray-600">Always Available</p>
                </div>
            </div>
        </div>
    </section>

    @include('website.components.cta')
    @include('website.components.footer')

    <!-- Counter Animation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.counter');
            const speed = 200;

            const observerOptions = {
                threshold: 0.5
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = +counter.getAttribute('data-target');
                        const increment = target / speed;

                        const updateCount = () => {
                            const count = +counter.innerText;
                            if (count < target) {
                                counter.innerText = Math.ceil(count + increment);
                                setTimeout(updateCount, 10);
                            } else {
                                counter.innerText = target;
                            }
                        };

                        updateCount();
                        observer.unobserve(counter);
                    }
                });
            }, observerOptions);

            counters.forEach(counter => observer.observe(counter));

            // Parallax effect
            window.addEventListener('scroll', function() {
                const parallaxBg = document.querySelector('.parallax-bg');
                if (parallaxBg) {
                    const scrolled = window.pageYOffset;
                    parallaxBg.style.transform = `translateY(${scrolled * 0.5}px)`;
                }
            });
        });
    </script>

</body>
</html>
