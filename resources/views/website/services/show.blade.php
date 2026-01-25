<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $service->meta_title ?? $service->name }} - 30design.studio</title>
    <link href="{{asset('assets/website/img/favicon.ico')}}" rel="icon">
    <meta name="description" content="{{ $service->meta_description ?? $service->headline_description }}">

    <meta property="og:title" content="{{ $service->meta_title ?? $service->name }}">
    <meta property="og:description" content="{{ $service->meta_description }}">
    <meta property="og:image" content="{{ asset('storage/' . ($service->meta_image ?? $service->hero_image)) }}">
    <meta property="og:type" content="website">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800">

@include('website.components.loading')
@include('website.components.header')

<!-- ================= HERO ================= -->
<section class="relative overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('storage/' . $service->hero_image) }}"
             alt="{{ $service->name }}"
             class="w-full h-full object-cover scale-105">
        <div class="absolute inset-0 bg-black/80"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-45 text-center text-white">
        <h1 class="text-4xl md:text-5xl lg:text-7xl font-extrabold leading-tight">
            {{ $service->headline }}
        </h1>
    </div>
</section>

<!-- ================= ABOUT SERVICE ================= -->
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Breadcrumb (optional tapi bikin premium feel) -->
        <div class="text-sm text-gray-500 mb-6">
            <a href="/" class="hover:text-orange-500">Beranda</a>
            <span class="mx-2">/</span>
            <span class="text-gray-800">{{ $service->name }}</span>
        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-2 gap-14 items-start">

            <!-- LEFT: CONTENT -->
            <div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                    {{ $service->name }}
                </h1>

                <p class="mt-6 text-gray-600 leading-relaxed">
                    {!! $service->description !!}
                </p>


                <!-- CTA -->
                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="https://wa.me/{{ $contact->phone }}"
                       target="_blank"
                       class="inline-flex items-center justify-center px-6 py-3 rounded-xl font-semibold text-white
                       bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600
                       shadow-lg hover:opacity-90 transition">
                        Konsultasi Sekarang
                    </a>

                    <a href="{{ route('portfolio') }}"
                       class="inline-flex items-center justify-center px-6 py-3 rounded-xl font-semibold text-gray-800 border border-gray-300 hover:bg-gray-50 transition">
                        Lihat Portofolio
                    </a>
                </div>
            </div>

            <!-- RIGHT: VISUAL / IMAGE -->
            <div class="relative">
                <div class="bg-white/70 backdrop-blur border border-orange-100 rounded-3xl shadow-xl p-4">

                    <img
                        src="{{ asset('storage/' . $service->hero_image) }}"
                        alt="{{ $service->name }}"
                        class="rounded-2xl w-full object-cover"
                    >

                </div>
            </div>
        </div>

        <!-- EXTRA SECTION (like spec/info box on bungkust) -->
        <div class="mt-20 grid md:grid-cols-3 gap-8">

            <div class="p-6 rounded-2xl border bg-white shadow-sm">
                <h4 class="font-bold text-gray-900 mb-2">Cocok Untuk</h4>
                <p class="text-sm text-gray-600">UMKM, Brand Fashion, Produk Makanan, Skincare, Corporate</p>
            </div>

            <div class="p-6 rounded-2xl border bg-white shadow-sm">
                <h4 class="font-bold text-gray-900 mb-2">Output File</h4>
                <p class="text-sm text-gray-600">AI, PDF, PNG, JPG siap cetak & digital</p>
            </div>

            <div class="p-6 rounded-2xl border bg-white shadow-sm">
                <h4 class="font-bold text-gray-900 mb-2">Estimasi Waktu</h4>
                <p class="text-sm text-gray-600">2 – 5 hari kerja tergantung kompleksitas</p>
            </div>

        </div>
    </div>
</section>


<!-- ================= PORTFOLIO ================= -->
<section id="portfolio" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                Showcase {{ $service->name }}
            </h2>
        </div>

        @if($service->portfolios->count())

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-2">

            <!-- PORTFOLIO BESAR -->
            <div class="lg:col-span-2">
                @php $portfolio = $service->portfolios[0]; @endphp

                <div
                    class="group relative h-[460px] rounded-xl overflow-hidden shadow-lg cursor-pointer"
                    onclick='openPortfolio(@json(
                        $portfolio->images->map(fn($img) => asset("storage/".$img->image))
                    ))'>

                    <img src="{{ asset('storage/'.$portfolio->cover) }}"
                         alt="{{ $portfolio->name }}"
                         class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105">

                    <div class="absolute inset-0 bg-black/40"></div>

                    <div class="absolute bottom-6 left-6 z-10">
                        <h3 class="text-xl font-semibold text-white">
                            {{ $portfolio->name }}
                        </h3>
                    </div>
                </div>
            </div>

            <!-- PORTFOLIO KECIL -->
            <div class="grid grid-rows-2 gap-2">
                @foreach($service->portfolios->skip(1) as $portfolio)
                    <div
                        class="group relative h-[220px] rounded-xl overflow-hidden shadow-lg cursor-pointer"
                        onclick='openPortfolio(@json(
                            $portfolio->images->map(fn($img) => asset("storage/".$img->image))
                        ))'>

                        <img src="{{ asset('storage/'.$portfolio->cover) }}"
                             alt="{{ $portfolio->name }}"
                             class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105">

                        <div class="absolute inset-0 bg-black/40"></div>

                        <div class="absolute bottom-4 left-4 z-10">
                            <h3 class="text-sm font-semibold text-white">
                                {{ $portfolio->name }}
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        @else
            <p class="text-center text-gray-500">
                Portofolio akan segera ditampilkan.
            </p>
        @endif

    </div>
</section>

<!-- ================= CTA ================= -->
<section class="py-28 bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 text-white">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold">
            Siap Mengembangkan Brand Anda?
        </h2>

        <p class="mt-6 text-white/90 max-w-2xl mx-auto">
            Konsultasikan kebutuhan {{ $service->name }} Anda sekarang dan dapatkan solusi desain
            yang tepat sasaran dan profesional.
        </p>

        <a href="https://wa.me/628xxxxxxxxx"
           target="_blank"
           class="inline-flex items-center gap-3 mt-10 px-10 py-4 rounded-full
                  bg-white text-gray-900 font-semibold shadow-xl hover:scale-105 transition">
            <i class="fab fa-whatsapp text-xl"></i>
            Konsultasi Sekarang
        </a>
    </div>
</section>

@include('website.components.footer')

</body>
</html>
