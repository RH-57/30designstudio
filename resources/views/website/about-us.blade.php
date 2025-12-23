<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerita di Balik Karya Kami - 30design.studio</title>

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
                Mengenal Lebih Dekat
                <span class="block bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                    30Design Studio
                </span>
            </h1>
              <!-- BREADCRUMB -->
            <p class="text-xs uppercase tracking-widest text-gray-500 mb-4">
                Home / Tentang Kami
            </p>
        </div>
    </section>


    <section class="relative py-28 bg-white">

        <div class="max-w-screen-xl mx-auto px-6 md:px-20 grid md:grid-cols-2 gap-20 items-center">

            <!-- STORY TEXT -->
            <div>
                <p class="text-sm text-gray-500 mb-4 uppercase tracking-wide">
                    Awal Perjalanan
                </p>

                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Semua Dimulai dari
                    <span class="text-orange-500">Satu Ide Sederhana</span>
                </h2>

                <p class="text-gray-600 leading-relaxed">
                    Kami melihat banyak brand memiliki produk hebat,
                    namun kesulitan menyampaikannya secara visual.
                    Dari situlah 30Design Studio hadir —
                    menjadi jembatan antara ide dan persepsi.
                </p>
            </div>

            <!-- VISUAL -->
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-br from-orange-500 via-pink-500 to-purple-600 blur-2xl opacity-40 rounded-3xl"></div>
                <img
                    src="{{ asset('assets/website/img/about.png') }}"
                    class="relative rounded-3xl shadow-xl"
                    alt="Perjalanan 30Design">
            </div>

        </div>
    </section>

    <section class="relative py-28 bg-gray-50 overflow-hidden">

        <div class="max-w-screen-xl mx-auto px-6 md:px-20">

            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 text-gray-900">
                Nilai yang Kami Pegang
            </h2>

            <div class="grid md:grid-cols-4 gap-10">

                <!-- Card -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition">
                    <i class="fas fa-palette text-3xl text-orange-500 mb-4"></i>
                    <h4 class="font-bold text-lg mb-2">Berkarakter</h4>
                    <p class="text-sm text-gray-600">
                        Desain harus punya identitas, bukan sekadar indah.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition">
                    <i class="fas fa-lightbulb text-3xl text-pink-500 mb-4"></i>
                    <h4 class="font-bold text-lg mb-2">Strategis</h4>
                    <p class="text-sm text-gray-600">
                        Setiap visual punya tujuan dan arah.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition">
                    <i class="fas fa-clock text-3xl text-purple-500 mb-4"></i>
                    <h4 class="font-bold text-lg mb-2">Disiplin</h4>
                    <p class="text-sm text-gray-600">
                        Komitmen pada kualitas dan waktu.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition">
                    <i class="fas fa-layer-group text-3xl text-orange-400 mb-4"></i>
                    <h4 class="font-bold text-lg mb-2">Siap Digunakan</h4>
                    <p class="text-sm text-gray-600">
                        Digital maupun cetak, tanpa kompromi.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="relative py-28 bg-white">

        <div class="max-w-screen-xl mx-auto px-6 md:px-20">

            <h2 class="text-3xl md:text-4xl font-bold text-center mb-20">
                Bagaimana Kami Bekerja
            </h2>

            <div class="grid md:grid-cols-3 gap-16 text-center">

                <div>
                    <div class="text-5xl font-extrabold text-orange-500 mb-4">01</div>
                    <h4 class="font-bold mb-2">Memahami</h4>
                    <p class="text-sm text-gray-600">
                        Mendalami brand, target, dan kebutuhan Anda.
                    </p>
                </div>

                <div>
                    <div class="text-5xl font-extrabold text-pink-500 mb-4">02</div>
                    <h4 class="font-bold mb-2">Menciptakan</h4>
                    <p class="text-sm text-gray-600">
                        Merangkai konsep visual yang relevan dan kuat.
                    </p>
                </div>

                <div>
                    <div class="text-5xl font-extrabold text-purple-500 mb-4">03</div>
                    <h4 class="font-bold mb-2">Menyempurnakan</h4>
                    <p class="text-sm text-gray-600">
                        Menjadi solusi siap pakai untuk brand Anda.
                    </p>
                </div>

            </div>

        </div>
    </section>

    @include('website.components.cta')

    <!-- FOOTER -->
    @include('website.components.footer')

</body>
</html>
