<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karya Terbaik Kami - 30design.studio</title>

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
</head>
<body>
    <!-- PAGE LOADER -->
    @include('website.components.loading')

    <!-- Floating Header (TailwindCSS v4) -->
    @include('website.components.header')

    <!-- HERO ABOUT -->
    <section class="relative pt-40 pb-20 bg-white overflow-hidden">

        <!-- BACKGROUND IMAGE -->
        <div class="absolute inset-0">
            <img
                src="{{ asset('assets/website/img/hero-about.jpg') }}"
                alt="Tentang 30Design Studio"
                class="w-full h-full object-cover object-center opacity-20">
        </div>

        <!-- GRADIENT OVERLAY -->
        <div class="absolute inset-0 bg-gradient-to-br from-white via-white/80 to-white"></div>

        <!-- SOFT DECOR -->
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-orange-200/40 blur-3xl rounded-full"></div>
        <div class="absolute -bottom-24 -left-24 w-[450px] h-[450px] bg-pink-200/40 blur-3xl rounded-full"></div>

        <!-- CONTENT -->
        <div class="relative z-10 w-full max-w-screen-xl mx-auto px-4 md:px-20 text-center">

            <!-- TITLE -->
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                <span class="block bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                    Karya Terbaik Kami
                </span>
            </h1>
              <!-- BREADCRUMB -->
            <p class="text-xs uppercase tracking-widest text-gray-500 mb-4">
                Home / Tentang Kami
            </p>
        </div>
    </section>

    <section id="portfolio" class="relative py-20 bg-white overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-10 left-10 w-96 h-96 bg-orange-200/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 right-10 w-[500px] h-[500px] bg-yellow-200/30 blur-3xl rounded-full"></div>
        </div>

        <div class="w-full max-w-screen-xl mx-auto px-4 md:px-20">

            <!-- TITLE -->
            <div class="text-center mb-16">
                <p class="text-gray-600 text-sm mt-4 max-w-2xl mx-auto">
                    Beberapa project yang telah kami kerjakan untuk berbagai brand dan kebutuhan bisnis.
                </p>
            </div>

            <!-- PORTFOLIO GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

                <!-- ITEM -->
                <div class="group relative rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition cursor-pointer"
                    onclick="openPortfolio('{{ asset('assets/website/services/service-1.webp') }}')">

                    <img
                        src="{{ asset('assets/website/services/service-1.webp') }}"
                        alt="Kopi Nusantara"
                        class="w-full aspect-square object-cover group-hover:scale-105 transition duration-700"
                    />


                    <!-- OVERLAY -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

                    <!-- TEXT -->
                    <div class="absolute bottom-0 left-0 right-0 p-6 z-10">
                        <h3 class="text-xl font-extrabold text-white
                                drop-shadow-[0_3px_8px_rgba(0,0,0,0.9)]">
                            Kopi Nusantara
                        </h3>
                        <p class="text-sm text-white/90 mt-1
                                drop-shadow-[0_2px_6px_rgba(0,0,0,0.9)]">
                            Desain Packaging
                        </p>
                    </div>
                </div>


                <!-- ITEM -->
                <div class="group relative rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition cursor-pointer"
                    onclick="openPortfolio('{{ asset('assets/website/services/service-2.webp') }}')">

                    <img src="{{ asset('assets/website/services/service-2.webp') }}"
                        alt="Kopi Nusantara"
                        class="w-full aspect-square object-cover group-hover:scale-105 transition duration-700">

                    <!-- OVERLAY -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

                    <!-- TEXT -->
                    <div class="absolute bottom-0 left-0 right-0 p-6 z-10">
                        <h3 class="text-xl font-extrabold text-white
                                drop-shadow-[0_3px_8px_rgba(0,0,0,0.9)]">
                            Kopi Nusantara
                        </h3>
                        <p class="text-sm text-white/90 mt-1
                                drop-shadow-[0_2px_6px_rgba(0,0,0,0.9)]">
                            Desain Packaging
                        </p>
                    </div>
                </div>

                <div class="group relative rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition cursor-pointer"
                    onclick="openPortfolio('{{ asset('assets/website/services/service-2.webp') }}')">

                    <img src="{{ asset('assets/website/services/service-2.webp') }}"
                        alt="Kopi Nusantara"
                        class="w-full aspect-square object-cover group-hover:scale-105 transition duration-700">

                    <!-- OVERLAY -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

                    <!-- TEXT -->
                    <div class="absolute bottom-0 left-0 right-0 p-6 z-10">
                        <h3 class="text-xl font-extrabold text-white
                                drop-shadow-[0_3px_8px_rgba(0,0,0,0.9)]">
                            Kopi Nusantara
                        </h3>
                        <p class="text-sm text-white/90 mt-1
                                drop-shadow-[0_2px_6px_rgba(0,0,0,0.9)]">
                            Desain Packaging
                        </p>
                    </div>
                </div>


                <!-- ITEM -->
                <div class="group relative rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition cursor-pointer"
                    onclick="openPortfolio('{{ asset('assets/website/services/service-3.webp') }}')">

                    <img src="{{ asset('assets/website/services/service-3.webp') }}"
                        alt="Kopi Nusantara"
                        class="w-full aspect-square object-cover group-hover:scale-105 transition duration-700">

                    <!-- OVERLAY -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

                    <!-- TEXT -->
                    <div class="absolute bottom-0 left-0 right-0 p-6 z-10">
                        <h3 class="text-xl font-extrabold text-white
                                drop-shadow-[0_3px_8px_rgba(0,0,0,0.9)]">
                            Kopi Nusantara
                        </h3>
                        <p class="text-sm text-white/90 mt-1
                                drop-shadow-[0_2px_6px_rgba(0,0,0,0.9)]">
                            Desain Packaging
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- PORTFOLIO PREVIEW MODAL -->
    <div id="portfolioModal"
        class="fixed inset-0 z-[9999] hidden items-center justify-center bg-black/80 backdrop-blur-md px-4">

        <!-- CLOSE BUTTON -->
        <button onclick="closePortfolio()"
                class="absolute top-6 right-6 text-white text-3xl hover:scale-110 transition">
            &times;
        </button>

        <!-- IMAGE -->
        <img id="portfolioModalImage"
            src=""
            alt="Preview"
            class="max-w-full max-h-[90vh] rounded-2xl shadow-2xl">
    </div>

    @include('website.components.cta')

    <!-- FOOTER -->
    @include('website.components.footer')

</body>
</html>
