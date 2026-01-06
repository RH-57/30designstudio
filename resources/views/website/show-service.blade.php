<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jasa Desain Packaging Produk Profesional | 30Design Studio</title>

    <meta name="description" content="Jasa desain packaging produk profesional untuk UMKM & brand. Desain menarik, siap cetak, meningkatkan kepercayaan dan penjualan produk Anda.">
    <meta name="keywords" content="jasa desain packaging, desain kemasan produk, jasa desain kemasan, desain packaging UMKM">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:title" content="Jasa Desain Packaging Produk Profesional">
    <meta property="og:description" content="Desain kemasan produk yang menarik, profesional, dan siap cetak untuk meningkatkan daya jual brand Anda.">
    <meta property="og:image" content="{{ asset('assets/website/services/service-2.webp') }}">
    <meta property="og:type" content="website">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@include('website.components.header')

<!-- HERO SERVICE -->
<section class="relative pt-28 md:pt-15 pb-20 bg-white overflow-hidden">

    <div class="absolute inset-0 -z-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-orange-200/30 blur-3xl rounded-full"></div>
        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-pink-200/30 blur-3xl rounded-full"></div>
    </div>

    <div class="max-w-screen-xl mx-auto px-6 md:px-20 grid md:grid-cols-2 gap-14 items-center">

        <!-- TEXT -->
        <div class="space-y-6">
            <span class="inline-block text-sm font-semibold text-orange-600 bg-orange-100 px-4 py-1 rounded-full">
                Layanan Unggulan
            </span>

            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                Jasa <span class="bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                Desain Packaging Produk
                </span>
            </h1>

            <p class="text-gray-600 text-lg">
                Kami membantu brand Anda tampil lebih menarik, dipercaya, dan siap bersaing di rak toko maupun marketplace.
                Desain packaging dibuat strategis, estetik, dan siap cetak.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="https://wa.me/628xxxxxxxxx"
                   class="px-6 py-3 rounded-xl bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 text-white font-semibold shadow-lg hover:-translate-y-0.5 transition">
                    Konsultasi Gratis
                </a>
                <a href="#portfolio" class="px-6 py-3 rounded-xl border border-orange-300 text-orange-600 font-semibold hover:bg-orange-50 transition">
                    Lihat Contoh Desain
                </a>
            </div>
        </div>

        <!-- IMAGE -->
        <div class="relative md:mt-8 lg:mt-12">
            <img src="{{ asset('assets/website/services/service-2.webp') }}"
                alt="Desain Packaging Produk"
                class="rounded-3xl shadow-2xl w-full max-w-lg mx-auto">
        </div>

    </div>
</section>

<!-- PROBLEM & SOLUTION -->
<section class="py-24 bg-white">
    <div class="max-w-screen-xl mx-auto px-6 md:px-20">

        <div class="grid md:grid-cols-2 gap-16 items-center">

            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-6">
                    Kenapa Packaging Itu Sangat Penting?
                </h2>

                <ul class="space-y-4 text-gray-600">
                    <li>❌ Produk bagus tapi terlihat biasa</li>
                    <li>❌ Tidak terlihat profesional & kurang dipercaya</li>
                    <li>❌ Kalah saing di rak toko & marketplace</li>
                </ul>
            </div>

            <div class="bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl p-8 shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    Solusi dari 30Design Studio
                </h3>
                <p class="text-gray-600">
                    Kami merancang desain kemasan yang bukan hanya menarik,
                    tapi juga memperkuat identitas brand dan meningkatkan nilai jual produk Anda.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- BENEFIT -->
<section class="py-24 bg-white">
    <div class="max-w-screen-xl mx-auto px-6 md:px-20">

        <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-16">
            Apa yang Anda Dapatkan?
        </h2>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="p-6 rounded-3xl bg-white shadow-lg text-center">
                <i class="fas fa-palette text-4xl text-orange-500 mb-4"></i>
                <h4 class="font-bold text-gray-800">Desain Eksklusif</h4>
                <p class="text-sm text-gray-600 mt-2">Tidak menggunakan template</p>
            </div>

            <div class="p-6 rounded-3xl bg-white shadow-lg text-center">
                <i class="fas fa-print text-4xl text-orange-500 mb-4"></i>
                <h4 class="font-bold text-gray-800">Siap Cetak</h4>
                <p class="text-sm text-gray-600 mt-2">CMYK & ukuran akurat</p>
            </div>

            <div class="p-6 rounded-3xl bg-white shadow-lg text-center">
                <i class="fas fa-layer-group text-4xl text-orange-500 mb-4"></i>
                <h4 class="font-bold text-gray-800">File Lengkap</h4>
                <p class="text-sm text-gray-600 mt-2">AI, PDF, JPG, PNG</p>
            </div>

            <div class="p-6 rounded-3xl bg-white shadow-lg text-center">
                <i class="fas fa-comments text-4xl text-orange-500 mb-4"></i>
                <h4 class="font-bold text-gray-800">Revisi Fleksibel</h4>
                <p class="text-sm text-gray-600 mt-2">Sampai sesuai keinginan</p>
            </div>

        </div>
    </div>
</section>

<!-- PORTFOLIO -->
<section id="portfolio" class="py-24 bg-white">
    <div class="max-w-screen-xl mx-auto px-6 md:px-20">

        <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-16">
            Contoh Desain Packaging
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <img src="{{ asset('assets/website/services/service-1.webp') }}" class="rounded-2xl shadow-lg">
            <img src="{{ asset('assets/website/services/service-2.webp') }}" class="rounded-2xl shadow-lg">
            <img src="{{ asset('assets/website/services/service-3.webp') }}" class="rounded-2xl shadow-lg">
            <img src="{{ asset('assets/website/services/service-1.webp') }}" class="rounded-2xl shadow-lg">
        </div>

    </div>
</section>

<!-- CTA -->
@include('website.components.cta')

</body>
</html>
