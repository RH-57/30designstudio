<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cerita di Balik Karya Kami - 30Design Studio</title>

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
<body class="bg-white text-gray-800">

    @include('website.components.loading')
    @include('website.components.header')

    <!-- ================= HERO ================= -->
    <section class="relative pt-36 pb-24 overflow-hidden">

        <!-- Background -->
        <div class="absolute inset-0">
            <img src="{{ asset('assets/website/img/hero-about.jpg') }}"
                 class="w-full h-full object-cover opacity-20"
                 alt="Tentang 30Design Studio">
            <div class="absolute inset-0 bg-gradient-to-br from-white via-white/90 to-white"></div>
        </div>

        <!-- Decor -->
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-orange-200/40 blur-3xl rounded-full"></div>
        <div class="absolute -bottom-24 -left-24 w-[420px] h-[420px] bg-pink-200/40 blur-3xl rounded-full"></div>

        <!-- Content -->
        <div class="relative max-w-screen-xl mx-auto px-4 md:px-20 text-center">
            <p class="text-xs uppercase tracking-widest text-gray-500 mb-4">
                Home / Tentang Kami
            </p>

            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                Mengenal Lebih Dekat
                <span class="block bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                    30Design Studio
                </span>
            </h1>
        </div>
    </section>

    <!-- ================= STORY ================= -->
    <section class="py-20">
        <div class="max-w-screen-xl mx-auto px-6 md:px-20 grid md:grid-cols-2 gap-16 items-center">

            <div>
                <p class="text-sm uppercase tracking-wide text-orange-500 mb-3">
                    Awal Perjalanan
                </p>

                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Semua Dimulai dari
                    <span class="text-orange-500">Satu Ide Sederhana</span>
                </h2>

                <p class="text-gray-800 leading-relaxed">
                    Banyak produk berkualitas gagal menarik perhatian karena kemasan yang kurang tepat.
                    Dari situlah 30Design Studio hadir — membantu brand membangun kemasan yang tidak hanya menarik,
                    tapi juga siap diproduksi dan dipasarkan.
                </p>
            </div>

            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-br from-orange-500 via-pink-500 to-purple-600 blur-2xl opacity-30 rounded-3xl"></div>
                <img src="{{ asset('assets/website/img/about.png') }}"
                     class="relative rounded-3xl shadow-xl"
                     alt="Perjalanan 30Design Studio">
            </div>

        </div>
    </section>

    <!-- ================= WHY CHOOSE US ================= -->
    <section class="relative py-20 overflow-hidden">

        <!-- Background decor -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-orange-300/30 blur-3xl rounded-full"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-purple-300/30 blur-3xl rounded-full"></div>

        <div class="relative max-w-screen-xl mx-auto px-6 md:px-20">

            <!-- Heading -->
            <div class="text-center mb-20">
                <p class="text-sm uppercase tracking-widest text-orange-500 mb-3">
                    Kenapa Kami
                </p>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">
                    Alasan Brand Memilih
                    <span class="block bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                        30Design Studio
                    </span>
                </h2>
                <p class="max-w-2xl mx-auto mt-4 text-gray-800">
                    Kami adalah partner desain packaging dari tahap konsep, desain visual,
                    hingga siap cetak untuk kebutuhan bisnis Anda.
                </p>
            </div>

            <!-- Content -->
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <!-- Left visual -->
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500 via-pink-500 to-purple-600 blur-2xl opacity-30 rounded-3xl"></div>
                    <img src="{{ asset('assets/website/img/why-us.jpg') }}"
                        alt="Kenapa memilih 30Design Studio"
                        class="relative rounded-3xl shadow-2xl">
                </div>

                <!-- Right reasons -->
                <div class="space-y-6">

                    <!-- Item -->
                    <div class="group bg-white p-6 rounded-2xl shadow-sm hover:shadow-xl transition flex gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-orange-500/10 flex items-center justify-center text-orange-500 text-xl group-hover:scale-110 transition">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Desain Packaging yang Siap Jual</h3>
                            <p class="text-sm text-gray-800">
                                Setiap desain kami dibuat dengan mempertimbangkan fungsi, estetika,
                                dan daya tarik di rak penjualan.
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="group bg-white p-6 rounded-2xl shadow-sm hover:shadow-xl transition flex gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-pink-500/10 flex items-center justify-center text-pink-500 text-xl group-hover:scale-110 transition">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Disesuaikan dengan Produk & Target Market</h3>
                            <p class="text-sm text-gray-800">
                                Kami menyesuaikan desain dengan karakter produk, segmen pasar,
                                dan kebutuhan branding jangka panjang.
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="group bg-white p-6 rounded-2xl shadow-sm hover:shadow-xl transition flex gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-purple-500/10 flex items-center justify-center text-purple-500 text-xl group-hover:scale-110 transition">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Siap Produksi & Siap Cetak</h3>
                            <p class="text-sm text-gray-800">
                                File desain kami disiapkan sesuai standar cetak,
                                sehingga aman untuk produksi massal tanpa kendala teknis.
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="group bg-white p-6 rounded-2xl shadow-sm hover:shadow-xl transition flex gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-orange-400/10 flex items-center justify-center text-orange-400 text-xl group-hover:scale-110 transition">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Satu Studio, Satu Solusi</h3>
                            <p class="text-sm text-gray-800">
                                Dari desain kemasan hingga kebutuhan cetak,
                                semua dikerjakan terintegrasi tanpa ribet.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- ================= PROCESS ================= -->
    <section class="py-20">
        <div class="max-w-screen-xl mx-auto px-6 md:px-20">

            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">
                Bagaimana Kami Bekerja
            </h2>

            <div class="grid md:grid-cols-3 gap-12 text-center">

                <div>
                    <div class="text-5xl font-extrabold text-orange-500 mb-4">01</div>
                    <h3 class="font-bold mb-2">Memahami</h3>
                    <p class="text-sm text-gray-800">
                        Mengenali brand dan kebutuhan Anda.
                    </p>
                </div>

                <div>
                    <div class="text-5xl font-extrabold text-pink-500 mb-4">02</div>
                    <h3 class="font-bold mb-2">Menciptakan</h3>
                    <p class="text-sm text-gray-800">
                        Mengolah konsep visual yang relevan.
                    </p>
                </div>

                <div>
                    <div class="text-5xl font-extrabold text-purple-500 mb-4">03</div>
                    <h3 class="font-bold mb-2">Menyempurnakan</h3>
                    <p class="text-sm text-gray-800">
                        Menjadi solusi siap pakai.
                    </p>
                </div>

            </div>
        </div>
    </section>

    @include('website.components.cta')
    @include('website.components.footer')

</body>
</html>
