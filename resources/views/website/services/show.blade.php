<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $service->meta_title ?? $service->name }} - 30design.studio</title>
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

        <p class="mt-6 max-w-2xl mx-auto text-white/90 text-base md:text-lg">
            {{ $service->headline_description }}
        </p>

        <div class="mt-10 flex justify-center flex-wrap gap-4">
            <a href="#portfolio"
               class="px-8 py-3 rounded-xl bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600
                      text-white font-semibold shadow-lg hover:scale-105 transition">
                Buat {{$service->name}} Sekarang
            </a>
        </div>
    </div>
</section>

<!-- ================= ABOUT SERVICE ================= -->
<section class="py-24 bg-white">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
            Solusi {{ $service->name }} untuk Brand yang Lebih Kuat
        </h2>

        <p class="mt-8 text-gray-600 leading-relaxed text-base">
            Kami menghadirkan layanan <strong>{{ $service->name }}</strong> yang dirancang secara strategis
            untuk membantu brand tampil lebih profesional, konsisten, dan mudah dikenali.
            Setiap desain dibuat dengan pendekatan visual yang kuat dan tujuan bisnis yang jelas.
        </p>
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
