<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Desain Kreatif & Packaging - 30design.studio</title>

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

    <section id="hero" class="relative pt-25 pb-20 bg-white overflow-hidden">

        <!-- Soft Gradient -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-orange-200/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-yellow-200/30 blur-3xl rounded-full"></div>
        </div>

        <!-- CONTENT WRAPPER - Sama persis seperti header -->
        <div class="w-full max-w-screen-xl mx-auto px-4 md:px-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

                <!-- LEFT TEXT -->
                <div class="space-y-6">

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight">
                        Solusi <span class="bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">Desain </span>untuk Berbagai Kebutuhan Brand Anda
                    </h1>

                    <p class="text-sm md:text-lg text-gray-600 leading-relaxed">
                        Layanan lengkap desain packaging hingga proses cetak berkualitas tinggi.
                        Membantu produk Anda tampil lebih menarik, dipercaya, dan siap bersaing di pasar.
                    </p>

                    <div class="flex gap-4">
                        <a href="#contact" class="relative inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-white rounded-xl
                        bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600
                        shadow-[0_8px_20px_rgba(236,72,153,0.45)]
                        transition-all duration-300
                        hover:-translate-y-0.5 hover:shadow-[0_12px_28px_rgba(168,85,247,0.55)]
                        active:translate-y-0 active:shadow-[0_6px_14px_rgba(0,0,0,0.25)]
                        overflow-hidden group">
                            Konsultasi Gratis
                        </a>

                        <a href="#service" class="inline-block p-[2px] rounded-lg bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600">
                            <span class="block px-6 py-3 rounded-lg bg-white text-orange-600 font-semibold hover:bg-orange-50 transition">
                                Pelajari Layanan
                            </span>
                        </a>

                    </div>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="relative flex justify-center md:justify-end">

                    <!-- GRADIENT SHAPE (LEBIH KECIL) -->
                    <div class="relative
                        w-[240px] h-[240px]
                        md:w-[300px] md:h-[300px]
                        lg:w-[340px] lg:h-[340px]
                        rounded-[2.5rem]
                        bg-gradient-to-br from-orange-500 via-pink-500 to-purple-600
                        flex items-center justify-center">

                        <!-- IMAGE (LEBIH BESAR & DOMINAN) -->
                        <img
                            src="{{ asset('assets/website/img/about.png') }}"
                            alt="Contoh Desain"
                            class="w-[95%] h-auto object-contain drop-shadow-2xl">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- STATS SECTION -->
    <section id="stats" class="relative py-16 bg-white overflow-hidden">

        <!-- Soft Gradient -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute -top-10 left-10 w-96 h-96 bg-orange-200/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 right-20 w-[500px] h-[500px] bg-yellow-200/40 blur-3xl rounded-full"></div>
        </div>

        <div class="w-full max-w-screen-xl mx-auto px-6 md:px-20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- CARD 1 -->
                <div class="flex items-center gap-5 bg-white/70 backdrop-blur-xl border border-orange-100
                            rounded-3xl shadow-lg py-6 px-7 transition hover:shadow-xl">

                    <!-- icon box -->
                    <div class="bg-orange-500/10 p-4 rounded-2xl">
                        <i class="fas fa-check text-3xl bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent"></i>
                    </div>

                    <!-- number -->
                    <div>
                        <div class="flex items-end gap-1">
                            <span class="text-4xl font-extrabold text-gray-900 counter" data-target="250">0</span>
                            <span class="text-orange-600 text-2xl font-bold">+</span>
                        </div>
                        <p class="text-gray-600 text-sm">Project Completed</p>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="flex items-center gap-5 bg-white/70 backdrop-blur-xl border border-orange-100
                            rounded-3xl shadow-lg py-6 px-7 transition hover:shadow-xl">

                    <div class="bg-orange-500/10 p-4 rounded-2xl">
                        <i class="fas fa-award text-3xl bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent"></i>
                    </div>

                    <div>
                        <div class="flex items-end gap-1">
                            <span class="text-4xl font-extrabold text-gray-900 counter" data-target="150">0</span>
                            <span class="text-orange-600 text-2xl font-bold">+</span>
                        </div>
                        <p class="text-gray-600 text-sm">Happy Client</p>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="flex items-center gap-5 bg-white/70 backdrop-blur-xl border border-orange-100
                            rounded-3xl shadow-lg py-6 px-7 transition hover:shadow-xl">

                    <div class="bg-orange-500/10 p-4 rounded-2xl">
                        <i class="fas fa-clock text-3xl bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent"></i>
                    </div>

                    <div>
                        <div class="flex items-end gap-1">
                            <span class="text-4xl font-extrabold text-gray-900 counter" data-target="11">0</span>
                            <span class="text-orange-600 text-2xl font-bold">k</span>
                        </div>
                        <p class="text-gray-600 text-sm">Hours Experience</p>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section id="about" class="relative py-24 bg-white overflow-hidden">

        <!-- Soft Gradient Background -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-10 right-10 w-96 h-96 bg-orange-100/40 blur-3xl rounded-full"></div>
            <div class="absolute -bottom-20 left-0 w-[500px] h-[500px] bg-yellow-100/40 blur-3xl rounded-full"></div>
        </div>

        <!-- WRAPPER -->
        <div class="w-full max-w-screen-xl mx-auto px-4 md:px-20">

            <!-- TITLE -->
            <div class="text-center mb-14">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">
                    Tentang <span class="text-orange-600">Kami</span>
                </h2>
                <p class="text-gray-600 text-sm mt-4 max-w-2xl mx-auto">
                    Kami adalah perusahaan konstruksi profesional yang berkomitmen memberikan
                    kualitas terbaik, ketepatan waktu, dan hasil yang memuaskan pada setiap proyek.
                </p>
            </div>

            <!-- CONTENT GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">

                <!-- LEFT VIDEO -->
                <div class="flex justify-center">
                    <div class="rounded-2xl overflow-hidden shadow-xl w-full max-w-md md:max-w-lg">
                        <iframe id="about-video"
                            class="w-full aspect-video"
                            src="https://www.youtube.com/embed/ScMzIvxBSi4?enablejsapi=1&controls=0&modestbranding=1&playsinline=1&rel=0&mute=1&autoplay=0"
                            allow="autoplay"
                            title="Tentang Kami Video"></iframe>
                    </div>
                </div>

                <!-- RIGHT TEXT & FEATURES -->
                <div class="space-y-8">

                    <p class="text-gray-700 text-sm leading-relaxed">
                        Dengan pengalaman lebih dari 10 tahun, kami telah menangani berbagai proyek skala kecil sampai besar.
                        Kami percaya bahwa kepercayaan dan kualitas adalah kunci utama dalam setiap pekerjaan yang kami lakukan.
                    </p>

                    <!-- FEATURES LIST -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">

                        <!-- Feature 1 -->
                        <div class="flex items-start gap-4">
                            <div class="text-orange-600 text-4xl">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800">Profesional</h4>
                                <p class="text-gray-600 text-sm">
                                    Tenaga ahli berpengalaman dan bersertifikat di bidang konstruksi.
                                </p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="flex items-start gap-4">
                            <div class="text-orange-600 text-4xl">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800">Peralatan Modern</h4>
                                <p class="text-gray-600 text-sm">
                                    Menggunakan teknologi dan peralatan terkini untuk hasil optimal.
                                </p>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="flex items-start gap-4">
                            <div class="text-orange-600 text-4xl">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800">Tepat Waktu</h4>
                                <p class="text-gray-600 text-sm">
                                    Komitmen penuh untuk menyelesaikan proyek sesuai jadwal.
                                </p>
                            </div>
                        </div>

                        <!-- Feature 4 -->
                        <div class="flex items-start gap-4">
                            <div class="text-orange-600 text-4xl">
                                <i class="fas fa-building"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800">Skala Besar & Kecil</h4>
                                <p class="text-gray-600 text-sm">
                                    Siap mengerjakan proyek mulai dari rumah, gedung, hingga infrastruktur.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="visi" class="relative py-24 bg-white overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-0 left-10 w-96 h-96 bg-orange-100/40 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-yellow-100/40 blur-3xl rounded-full"></div>
        </div>

        <div class="w-full max-w-screen-xl mx-auto px-4 md:px-20">

            <!-- TITLE -->
            <div class="text-center mb-14">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">
                    Visi <span class="text-orange-600">&</span> Misi
                </h2>
                <p class="text-gray-600 text-sm mt-4 max-w-2xl mx-auto">
                    Landasan utama perusahaan dalam memberikan layanan konstruksi yang profesional, modern, dan berkelanjutan.
                </p>
            </div>

            <!-- GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">


                <!-- CARD VISI -->
                <div class="relative rounded-3xl shadow-lg overflow-hidden border border-orange-100
                            bg-cover bg-center bg-no-repeat"
                    style="background-image: url('/assets/website/img/visi.webp');">

                    <!-- OVERLAY -->
                    <div class="absolute inset-0 bg-black/40"></div>

                    <!-- CONTENT -->
                    <div class="relative p-10 text-white">
                        <h3 class="text-3xl font-bold mb-4">Visi</h3>
                        <p class="text-sm leading-relaxed">
                            Menjadi perusahaan konstruksi terpercaya yang menghadirkan inovasi, kualitas,
                            dan ketepatan dalam setiap solusi pembangunan untuk masa depan yang lebih baik.
                        </p>
                    </div>
                </div>


                <!-- CARD MISI -->
                <div class="relative rounded-3xl shadow-lg overflow-hidden border border-orange-100
                            bg-cover bg-center bg-no-repeat"
                    style="background-image: url('/assets/website/img/misi.webp');">

                    <!-- OVERLAY -->
                    <div class="absolute inset-0 bg-black/40"></div>

                    <!-- CONTENT -->
                    <div class="relative p-10 text-white">
                        <h3 class="text-3xl font-bold mb-4">Misi</h3>

                        <ul class="space-y-4 text-sm leading-relaxed">
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check mt-1 text-orange-300"></i>
                                Memberikan layanan konstruksi berkualitas tinggi dengan standar profesional.
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check mt-1 text-orange-300"></i>
                                Menggunakan teknologi modern untuk meningkatkan efisiensi dan hasil proyek.
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check mt-1 text-orange-300"></i>
                                Menjaga ketepatan waktu sebagai komitmen utama kepada setiap klien.
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check mt-1 text-orange-300"></i>
                                Membangun hubungan jangka panjang berdasarkan kepercayaan dan integritas.
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </section>



    <!-- PROYEK BERLANGSUNG -->
    <section id="proyek" class="relative py-24 bg-white overflow-hidden">

        <!-- Soft Gradient Background -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-10 left-10 w-80 h-80 bg-orange-200/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-yellow-200/30 blur-3xl rounded-full"></div>
        </div>

        <div class="w-full max-w-screen-xl mx-auto px-4 md:px-20">

            <!-- TITLE -->
            <div class="text-center mb-14">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">
                    Proyek <span class="text-orange-600">Berlangsung</span>
                </h2>
                <p class="text-gray-600 text-sm mt-4 max-w-2xl mx-auto">
                    Pantau aktivitas pembangunan secara real-time melalui camera CCTV.
                </p>
            </div>

            <!-- GRID PROJECT LIST -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                <!-- PROJECT CARD 1 -->
                <div class="bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">

                    <!-- CCTV LIVE TAG -->
                    <div class="absolute m-4 px-3 py-1 bg-red-600 text-white text-xs font-semibold rounded-full shadow-lg">
                        LIVE
                    </div>

                    <!-- STREAM -->
                    <iframe
                        src="https://www.youtube.com/embed/ScMzIvxBSi4?autoplay=1&mute=1&controls=0"
                        class="w-full aspect-video rounded-t-3xl"
                        allow="autoplay; encrypted-media">
                    </iframe>

                    <!-- TEXT -->
                    <div class="p-6 space-y-2">
                        <h3 class="text-xl font-bold text-gray-900">Salaryevo Park</h3>
                        <p class="text-gray-600 text-sm">
                            Salaryevo • 3 menit dari pusat kota
                        </p>
                    </div>
                </div>


                <!-- PROJECT CARD 2 -->
                <div class="bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">

                    <!-- LIVE LABEL -->
                    <div class="absolute m-4 px-3 py-1 bg-red-600 text-white text-xs font-semibold rounded-full shadow-lg">
                        LIVE
                    </div>

                    <!-- STREAM -->
                    <iframe
                        src="https://www.youtube.com/embed/lX0O8_v6pG0?autoplay=1&mute=1&controls=0"
                        class="w-full aspect-video rounded-t-3xl"
                        allow="autoplay; encrypted-media">
                    </iframe>

                    <!-- TEXT -->
                    <div class="p-6 space-y-2">
                        <h3 class="text-xl font-bold text-gray-900">East Butovo</h3>
                        <p class="text-gray-600 text-sm">
                            Dryding Donskoy Boulevard • 15 menit dari pusat kota
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="service" class="relative py-24 bg-white overflow-hidden">

        <!-- Soft Gradient Background -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-10 left-10 w-96 h-96 bg-orange-200/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 right-10 w-[500px] h-[500px] bg-yellow-200/30 blur-3xl rounded-full"></div>
        </div>

        <div class="w-full max-w-screen-xl mx-auto px-4 md:px-20">

            <!-- TITLE -->
            <div class="text-center mb-14">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">
                    Layanan <span class="text-orange-600">Kami</span>
                </h2>
                <p class="text-gray-600 text-sm mt-4 max-w-2xl mx-auto">
                    Berbagai layanan konstruksi profesional untuk mewujudkan proyek impian Anda dengan kualitas terbaik.
                </p>
            </div>

            <!-- SERVICES GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

                <!-- Card 1 -->
                <div class="group bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl p-10 shadow-lg
                            hover:shadow-2xl hover:bg-white transition relative overflow-hidden">

                    <!-- ICON WRAPPER -->
                    <div class="bg-orange-500/10 p-5 rounded-2xl mb-6 w-fit">
                        <i class="fas fa-pencil-ruler text-orange-600 text-4xl"></i>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Perencanaan Proyek</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Perencanaan matang untuk memastikan proyek berjalan tepat waktu, efisien, dan sesuai standar modern.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="group bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl p-10 shadow-lg
                            hover:shadow-2xl hover:bg-white transition relative overflow-hidden">

                    <div class="bg-orange-500/10 p-5 rounded-2xl mb-6 w-fit">
                        <i class="fas fa-building text-orange-600 text-4xl"></i>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Pembangunan Gedung</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Layanan pembangunan untuk rumah, gedung, ruko, warehouse, hingga proyek skala besar lainnya.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="group bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl p-10 shadow-lg
                            hover:shadow-2xl hover:bg-white transition relative overflow-hidden">

                    <div class="bg-orange-500/10 p-5 rounded-2xl mb-6 w-fit">
                        <i class="fas fa-tools text-orange-600 text-4xl"></i>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Renovasi & Perbaikan</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Renovasi total ataupun perbaikan kecil dengan hasil rapi, cepat, dan sesuai kebutuhan.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="group bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl p-10 shadow-lg
                            hover:shadow-2xl hover:bg-white transition relative overflow-hidden">

                    <div class="bg-orange-500/10 p-5 rounded-2xl mb-6 w-fit">
                        <i class="fas fa-seedling text-orange-600 text-4xl"></i>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Landscape & Infrastruktur</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Penataan lingkungan, jalan, taman, dan fasilitas umum dengan standar modern dan estetika tinggi.
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="group bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl p-10 shadow-lg
                            hover:shadow-2xl hover:bg-white transition relative overflow-hidden">

                    <div class="bg-orange-500/10 p-5 rounded-2xl mb-6 w-fit">
                        <i class="fas fa-project-diagram text-orange-600 text-4xl"></i>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Manajemen Proyek</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Mengelola proyek secara profesional agar berjalan efisien, terukur, dan berkualitas tinggi.
                    </p>
                </div>

                <!-- Card 6 -->
                <div class="group bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl p-10 shadow-lg
                            hover:shadow-2xl hover:bg-white transition relative overflow-hidden">

                    <div class="bg-orange-500/10 p-5 rounded-2xl mb-6 w-fit">
                        <i class="fas fa-warehouse text-orange-600 text-4xl"></i>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Konstruksi Industrial</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Pembangunan pabrik, pergudangan, dan fasilitas industri sesuai standar keamanan & kualitas.
                    </p>
                </div>

            </div>
        </div>
    </section>

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
                    Hubungi <span class="text-orange-600">Kami</span>
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
                    <div class="bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl shadow-lg p-8">
                        <div class="flex items-start gap-5">
                            <div class="bg-orange-500/10 p-4 rounded-2xl">
                                <i class="fas fa-phone text-orange-600 text-3xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900">Telepon</h4>
                                <p class="text-gray-600 text-sm">+62 812-3456-7890</p>
                            </div>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl shadow-lg p-8">
                        <div class="flex items-start gap-5">
                            <div class="bg-orange-500/10 p-4 rounded-2xl">
                                <i class="fas fa-envelope text-orange-600 text-3xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900">Email</h4>
                                <p class="text-gray-600 text-sm">info@konstruksi.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl shadow-lg p-8">
                        <div class="flex items-start gap-5">
                            <div class="bg-orange-500/10 p-4 rounded-2xl">
                                <i class="fas fa-map-marker-alt text-orange-600 text-3xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900">Alamat Kantor</h4>
                                <p class="text-gray-600 text-sm">Jl. Pembangunan No. 45, Jakarta</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT FORM -->
                <div class="bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl shadow-lg p-10">
                    <form action="" method="POST" class="space-y-6">

                        <!-- Name -->
                        <div>
                            <label class="text-gray-700 text-sm font-semibold">Nama Lengkap</label>
                            <input type="text" required
                                class="mt-2 w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition">
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="text-gray-700 text-sm font-semibold">Email</label>
                            <input type="email" required
                                class="mt-2 w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition">
                        </div>

                        <!-- Message -->
                        <div>
                            <label class="text-gray-700 text-sm font-semibold">Pesan / Pertanyaan</label>
                            <textarea rows="4" required
                                class="mt-2 w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition"></textarea>
                        </div>

                        <!-- Button -->
                        <button
                            class="w-full bg-orange-600 hover:bg-orange-700 text-white py-3 rounded-xl font-semibold shadow-lg transition">
                            Kirim Pesan
                        </button>

                    </form>
                </div>

            </div>
        </div>
    </section>



    <!-- FOOTER -->
    @include('website.components.footer')
    <script src="https://www.youtube.com/iframe_api"></script>


</body>
</html>
