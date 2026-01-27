<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jasa Desain & Cetak Packaging Terbaik - 30Design Studio</title>
    <link href="{{asset('assets/website/img/favicon.ico')}}" rel="icon">

    <meta name="description" content="30Design Studio menyediakan jasa desain dan cetak packaging profesional untuk berbagai produk. Mulai dari konsep desain kemasan, visual branding, hingga proses cetak berkualitas tinggi agar produk Anda tampil menarik dan siap bersaing di pasaran.">

    <meta name="keywords" content="jasa desain packaging, jasa cetak packaging, jasa desain kemasan produk, desain kemasan profesional, cetak kemasan produk, jasa desain dan cetak packaging, studio desain packaging">

    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="Jasa Desain & Cetak Packaging Profesional | 30Design Studio">
    <meta property="og:description" content="Layanan desain dan cetak packaging berkualitas untuk produk UMKM hingga brand profesional. Desain menarik, cetak rapi, dan siap jual.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/website/img/og-image.jpg') }}">
    <meta property="og:site_name" content="30Design Studio">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Jasa Desain & Cetak Packaging | 30Design Studio">
    <meta name="twitter:description" content="Desain kemasan produk dan cetak packaging profesional untuk meningkatkan nilai dan daya jual brand Anda.">
    <meta name="twitter:image" content="{{ asset('assets/website/img/og-image.jpg') }}">

    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </noscript>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <!-- PAGE LOADER -->
    @include('website.components.loading')

    <!-- Floating Header (TailwindCSS v4) -->
    @include('website.components.header')

    <section id="hero" class="relative pt-30 pb-20 bg-white overflow-hidden">

        <!-- Soft Gradient -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-orange-200/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-yellow-200/30 blur-3xl rounded-full"></div>
        </div>

        <!-- CONTENT WRAPPER - Sama persis seperti header -->
        <div class="w-full max-w-screen-xl mx-auto px-4 md:px-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

                <!-- LEFT TEXT -->
                <div class="space-y-6 text-center md:text-left">

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight">
                        Jasa <span class="bg-gradient-to-r from-orange-500 to-pink-500 bg-clip-text text-transparent">Desain </span> & <span class="bg-gradient-to-r from-pink-500 to-purple-600 bg-clip-text text-transparent">Cetak</span> Packaging Terbaik.
                    </h1>

                    <p class="text-sm md:text-lg text-gray-800 leading-relaxed">
                        Layanan lengkap desain packaging hingga proses cetak berkualitas tinggi.
                        Membantu produk Anda tampil lebih menarik, dipercaya, dan siap bersaing di pasar.
                    </p>

                    <div class="flex gap-4 justify-center md:justify-start">
                        <a href="#contact" class="relative inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-white rounded-xl
                        bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600
                        shadow-[0_8px_20px_rgba(236,72,153,0.45)]
                        transition-all duration-300
                        hover:-translate-y-0.5 hover:shadow-[0_12px_28px_rgba(168,85,247,0.55)]
                        active:translate-y-0 active:shadow-[0_6px_14px_rgba(0,0,0,0.25)]
                        overflow-hidden group">
                            Buat Desain Sekarang
                        </a>

                        <a href="#services" class="inline-block p-[2px] rounded-lg bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600">
                            <span class="block px-2 py-3 rounded-lg bg-white text-orange-600 font-semibold hover:bg-orange-50 transition">
                                Pelajari Layanan
                            </span>
                        </a>

                    </div>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="relative flex justify-center md:justify-end">
                    <!-- GRADIENT SHAPE (UKURAN TETAP) -->
                    <div id="scroll-image-container" class="relative
                        w-[240px] h-[240px]
                        md:w-[300px] md:h-[300px]
                        lg:w-[340px] lg:h-[340px]
                        rounded-full"> <!-- Tambahkan overflow-hidden -->

                        <!-- GRADIENT BLUR BACKGROUND -->
                        <div class="absolute inset-0 rounded-full
                            bg-gradient-to-br from-orange-500 via-pink-500 to-purple-600
                            opacity-60 blur-xl">
                        </div>

                        <!-- IMAGE (DIPERBESAR KELUAR DARI CONTAINER) -->
                        <img
                            src="{{ asset('assets/website/img/about.webp') }}"
                            alt="Contoh Desain"
                            id="scroll-image"
                            class="w-[200%] h-auto object-contain drop-shadow-2xl"> <!-- w-[120%] untuk lebih besar -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS SECTION -->
    <section id="stats" class="relative py-16 bg-white overflow-hidden">

        <!-- Soft Gradient Background -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute -top-10 left-10 w-96 h-96 bg-orange-200/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 right-20 w-[500px] h-[500px] bg-yellow-200/40 blur-3xl rounded-full"></div>
        </div>

        <div class="w-full max-w-screen-xl mx-auto px-6 md:px-20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- CARD -->
                <div class="relative overflow-hidden rounded-3xl shadow-lg group">

                    <!-- BACKGROUND IMAGE -->
                    <img src="{{ asset('assets/website/img/about.png') }}"
                        class="absolute inset-0 w-full h-full object-cover scale-105 group-hover:scale-110 transition duration-700"
                        alt="Packaging Design">

                    <!-- OVERLAY -->
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>

                    <!-- CONTENT -->
                    <div class="relative z-10 flex items-center gap-5 py-6 px-7 backdrop-blur-sm">

                        <!-- ICON -->
                        <div class="bg-white/20 p-4 rounded-2xl">
                            <i class="fas fa-check text-3xl bg-gradient-to-r from-orange-400 via-pink-400 to-purple-400 bg-clip-text text-transparent"></i>
                        </div>

                        <!-- TEXT -->
                        <div>
                            <div class="flex items-end gap-1">
                                <span class="text-4xl font-extrabold text-white counter" data-target="250">0</span>
                                <span class="text-orange-400 text-2xl font-bold">+</span>
                            </div>
                            <p class="text-white/80 text-sm">Project Completed</p>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="relative overflow-hidden rounded-3xl shadow-lg group">
                    <img src="{{ asset('assets/website/img/about.png') }}"
                        class="absolute inset-0 w-full h-full object-cover scale-105 group-hover:scale-110 transition duration-700"
                        alt="Happy Client">

                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>

                    <div class="relative z-10 flex items-center gap-5 py-6 px-7 backdrop-blur-sm">
                        <div class="bg-white/20 p-4 rounded-2xl">
                            <i class="fas fa-award text-3xl bg-gradient-to-r from-orange-400 via-pink-400 to-purple-400 bg-clip-text text-transparent"></i>
                        </div>

                        <div>
                            <div class="flex items-end gap-1">
                                <span class="text-4xl font-extrabold text-white counter" data-target="150">0</span>
                                <span class="text-orange-400 text-2xl font-bold">+</span>
                            </div>
                            <p class="text-white/80 text-sm">Happy Client</p>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="relative overflow-hidden rounded-3xl shadow-lg group">
                    <img src="{{ asset('assets/website/img/about.png') }}"
                        class="absolute inset-0 w-full h-full object-cover scale-105 group-hover:scale-110 transition duration-700"
                        alt="Experience">

                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>

                    <div class="relative z-10 flex items-center gap-5 py-6 px-7 backdrop-blur-sm">
                        <div class="bg-white/20 p-4 rounded-2xl">
                            <i class="fas fa-clock text-3xl bg-gradient-to-r from-orange-400 via-pink-400 to-purple-400 bg-clip-text text-transparent"></i>
                        </div>

                        <div>
                            <div class="flex items-end gap-1">
                                <span class="text-4xl font-extrabold text-white counter" data-target="11">0</span>
                                <span class="text-orange-400 text-2xl font-bold">k</span>
                            </div>
                            <p class="text-white/80 text-sm">Hours Experience</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="our-clients" class="relative py-16 bg-white overflow-hidden">

        <!-- Soft Gradient Background -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-10 left-10 w-96 h-96 bg-orange-200/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 right-10 w-[500px] h-[500px] bg-yellow-200/30 blur-3xl rounded-full"></div>
        </div>

        <div class="w-full max-w-screen-xl mx-auto px-4 md:px-20">

            <!-- TITLE -->
            <div class="text-center mb-14">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">
                    <span class="bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                        Klien
                    </span>
                     Kami
                </h2>
                <p class="text-gray-600 text-sm mt-4 max-w-2xl mx-auto">
                    Dipercaya oleh ribuan bisnis dari berbagai bidang dan skala usaha.
                </p>
            </div>

            <!-- MARQUEE -->
            <div class="relative space-y-8 overflow-hidden">

                <!-- FADE -->
                <div class="pointer-events-none absolute left-0 top-0 h-full w-12 sm:w-20 md:w-24 bg-gradient-to-r from-white to-transparent z-10"></div>
                <div class="pointer-events-none absolute right-0 top-0 h-full w-12 sm:w-20 md:w-24 bg-gradient-to-l from-white to-transparent z-10"></div>

                <!-- ROW 1 (LEFT) -->
                <div class="overflow-hidden">
                    <div class="flex min-w-full md:w-[200%] gap-16 animate-[marquee-left_35s_linear_infinite] hover:[animation-play-state:paused]">

                        {{-- SET A --}}
                        <div class="flex shrink-0 items-center gap-14 md:gap-16">
                            @foreach($brands as $brand)
                                <div class="w-24 sm:w-28 md:w-32 flex justify-center">
                                    <img
                                        src="{{ asset('storage/'.$brand->logo) }}"
                                        alt="{{ $brand->name }}"
                                        class="h-14 max-w-full object-contain
                                            opacity-60 grayscale
                                            hover:opacity-100 hover:grayscale-0 transition">
                                </div>
                            @endforeach
                        </div>

                        {{-- SET B (DUPLIKASI) --}}
                        <div class="flex shrink-0 items-center gap-14 md:gap-16">
                            @foreach($brands as $brand)
                                <div class="w-24 sm:w-28 md:w-32 flex justify-center">
                                    <img
                                        src="{{ asset('storage/'.$brand->logo) }}"
                                        alt="{{ $brand->name }}"
                                        class="h-14 max-w-full object-contain
                                            opacity-60 grayscale
                                            hover:opacity-100 hover:grayscale-0 transition">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- ROW 2 (RIGHT) -->
                <div class="overflow-hidden">
                    <div class="flex min-w-full md:w-[200%] gap-20 animate-[marquee-right_40s_linear_infinite] hover:[animation-play-state:paused]">

                        <div class="flex shrink-0 items-center gap-16 md:gap-20">
                            @foreach($brands as $brand)
                                <div class="w-24 sm:w-28 md:w-32 flex justify-center">
                                    <img
                                        src="{{ asset('storage/'.$brand->logo) }}"
                                        alt="{{ $brand->name }}"
                                        class="h-14 max-w-full object-contain
                                            opacity-60 grayscale
                                            hover:opacity-100 hover:grayscale-0 transition">
                                </div>
                            @endforeach
                        </div>

                        <div class="flex shrink-0 items-center gap-16 md:gap-20">
                            @foreach($brands as $brand)
                                <div class="w-24 sm:w-28 md:w-32 flex justify-center">
                                    <img
                                        src="{{ asset('storage/'.$brand->logo) }}"
                                        alt="{{ $brand->name }}"
                                        class="h-14 max-w-full object-contain
                                            opacity-60 grayscale
                                            hover:opacity-100 hover:grayscale-0 transition">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="relative py-16 bg-white overflow-hidden">

        <!-- Soft Background -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-orange-100/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-pink-100/30 blur-3xl rounded-full"></div>
        </div>

        <div class="w-full max-w-screen-xl mx-auto px-4 md:px-20">

            <!-- TITLE -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">
                    <span class="bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                        Layanan
                    </span>
                    Kami
                </h2>
                <p class="text-gray-600 text-sm mt-4 max-w-2xl mx-auto">
                    Kami membantu brand tampil lebih profesional, menarik, dan siap bersaing melalui solusi desain yang strategis.
                </p>
            </div>

            <!-- SERVICES GRID -->
            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach($services as $service)
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500">

                    <!-- IMAGE -->
                    <div class="relative h-64 overflow-hidden">
                        <img
                            src="{{ asset('storage/' . $service->hero_image) }}"
                            alt="{{ $service->name }}"
                            class="absolute inset-0 w-full h-full object-cover
                                group-hover:scale-105 transition duration-700"
                        >

                        <!-- Soft Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/10 to-transparent"></div>
                    </div>

                    <!-- CONTENT -->
                    <div class="p-6 flex flex-col min-h-[220px]">

                        <h3 class="text-lg font-bold text-orange-500 mb-2">
                            {{ $service->name }}
                        </h3>

                        <p class="text-sm text-gray-600 leading-relaxed mb-6 line-clamp-3">
                            {{ $service->headline_description ?? 'Solusi desain profesional untuk meningkatkan nilai dan daya tarik brand Anda.' }}
                        </p>

                        <!-- ACTION -->
                        <div class="mt-auto flex items-center justify-between gap-3">

                            <!-- DETAIL -->
                            <a href="{{ route('show.service', $service->slug) }}"
                            class="text-sm font-semibold text-gray-700 hover:text-orange-500 transition">
                                Lihat Detail →
                            </a>

                            <!-- CTA
                            <a href="https://wa.me/628xxxxxxxxx"
                            target="_blank"
                            class="inline-flex items-center gap-2 px-4 py-2
                                    rounded-lg
                                    bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600
                                    text-white text-xs font-semibold
                                    shadow-md hover:shadow-lg
                                    transition active:scale-95">
                                Konsultasi Gratis
                            </a> -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section id="portfolio" class="relative py-16 bg-white overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-10 left-10 w-96 h-96 bg-orange-200/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 right-10 w-[500px] h-[500px] bg-yellow-200/30 blur-3xl rounded-full"></div>
        </div>

        <div class="w-full max-w-screen-xl mx-auto px-4 md:px-20">

            <!-- TITLE -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">
                    <span class="bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                        Portofolio
                    </span>
                     Kami
                </h2>
                <p class="text-gray-600 text-sm mt-4 max-w-2xl mx-auto">
                    Beberapa project yang telah kami kerjakan untuk berbagai brand dan kebutuhan bisnis.
                </p>
            </div>

            <!-- PORTFOLIO GRID -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">

                @foreach ($portfolios as $portfolio)
                <div
                    class="group relative rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition cursor-pointer"
                    onclick='openPortfolio(@json(
                        $portfolio->images
                            ->map(fn($img) => asset("storage/".$img->image))
                            ->values()
                    ))'>

                    <img
                        src="{{ asset('storage/'.$portfolio->cover) }}"
                        alt="{{ $portfolio->name }}"
                        class="w-full aspect-square object-cover group-hover:scale-105 transition duration-700"
                    >

                    <!-- OVERLAY -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

                    <!-- TEXT -->
                    <div class="absolute bottom-0 left-0 right-0 p-4 z-10">
                        <h3 class="text-base font-semibold text-white/95">
                            {{ $portfolio->name }}
                        </h3>
                        <p class="text-xs text-white/80">
                            {{ $portfolio->service->name ?? '-' }}
                        </p>
                    </div>
                </div>
                @endforeach


            </div>

        </div>
    </section>

    @include('website.components.cta')

    <!-- CONTACT SECTION -->
    <section id="contact" class="relative py-24 bg-white overflow-hidden">

        <!-- Soft Gradient Background -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-10 left-10 w-96 h-96 bg-orange-200/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 right-10 w-[500px] h-[500px] bg-yellow-200/30 blur-3xl rounded-full"></div>
        </div>

        <div class="w-full max-w-screen-xl mx-auto px-4 md:px-20">

            <!-- TITLE -->
            <div class="text-center mb-14">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">
                    Siap
                    <span class="bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">Cetak Packaging</span>
                     Brand Kamu?
                </h2>
                <p class="text-gray-600 text-sm mt-4 max-w-2xl mx-auto">
                    Siap membantu Anda untuk konsultasi proyek, penawaran harga, atau pertanyaan lainnya.
                </p>
            </div>

            <!-- GRID WRAPPER -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                <!-- LEFT CONTACT INFO -->
                <div class="space-y-8">

                    <!-- CARD -->
                    <div class="bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl shadow-lg p-3">
                        <div class="flex items-start gap-5">
                            <div class="bg-orange-500/10 p-4 rounded-2xl">
                                <i class="fas fa-phone bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent text-3xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900">Telepon / Whatsapp</h4>
                                <p class="text-gray-600 text-sm">+{{$contact->phone}}</p>
                            </div>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl shadow-lg p-3">
                        <div class="flex items-start gap-5">
                            <div class="bg-orange-500/10 p-4 rounded-2xl">
                                <i class="fas fa-envelope bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent text-3xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900">Email</h4>
                                <p class="text-gray-600 text-sm">{{$contact->email}}</p>
                            </div>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl shadow-lg p-3">
                        <div class="flex items-start gap-5">
                            <div class="bg-orange-500/10 p-4 rounded-2xl">
                                <i class="fas fa-map-marker-alt bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent text-3xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900">Alamat Kantor</h4>
                                <p class="text-gray-600 text-sm">{{$contact->address}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT MAPS -->
                <div class="bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl shadow-lg p-3 overflow-hidden">

                    <div class="relative w-full h-[400px] rounded-2xl overflow-hidden">

                        <!-- Google Maps Embed -->
                        <iframe
                            src="https://www.google.com/maps?q={{ urlencode($contact->address) }}&output=embed"
                            class="w-full h-full border-0"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

                        <!-- Optional overlay label -->
                        <div class="absolute top-4 left-4 bg-white/80 backdrop-blur px-4 py-2 rounded-xl text-sm font-semibold text-gray-800 shadow">
                            Lokasi Kantor Kami
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- PORTFOLIO PREVIEW MODAL -->
    <div id="portfolioModal"
        class="fixed inset-0 z-[9999] hidden bg-black/80 backdrop-blur-md px-4 py-10 overflow-y-auto">

        <!-- CLOSE -->
        <button onclick="closePortfolio()"
            class="fixed top-6 right-6 text-white text-4xl hover:scale-110 transition">
            &times;
        </button>

        <div id="portfolioImages"
            class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        </div>
    </div>



    <!-- FOOTER -->
    @include('website.components.footer')
    <script src="https://www.youtube.com/iframe_api"></script>
    <!-- Include GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script>
    gsap.registerPlugin(ScrollTrigger);

    document.addEventListener('DOMContentLoaded', function() {
        const image = document.getElementById('scroll-image');
        const container = document.getElementById('scroll-image-container');

        // Animasi saat scroll
        gsap.to(image, {
            scale: 1.5, // Skala maksimal
            ease: "power1.out",
            scrollTrigger: {
                trigger: container,
                start: "top 80%",    // Mulai animasi ketika 80% dari top viewport
                end: "bottom 20%",   // Selesai ketika 20% dari bottom viewport
                scrub: 1,            // Smooth follow scroll
                onUpdate: (self) => {
                    // Optional: tambahkan efek parallax
                    image.style.transform = `scale(${1 + (self.progress * 0.5)})`;
                },
                onEnterBack: () => {
                    // Reset saat scroll ke atas
                    gsap.to(image, { scale: 1, duration: 0.5 });
                }
            }
        });

        // Animasi container juga
        gsap.to(container, {
            scale: 1.2,
            ease: "power1.out",
            scrollTrigger: {
                trigger: container,
                start: "top 80%",
                end: "bottom 20%",
                scrub: 1
            }
        });
    });
    </script>

</body>
</html>
