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

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .editor-content {
            line-height: 1.8;
        }

        .editor-content h2 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-top: 2rem;
            margin-bottom: 1rem;
            color: #111827;
        }

        .editor-content h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
            color: #1f2937;
        }

        .editor-content p {
            margin-bottom: 1rem;
            color: #374151;
        }

        .editor-content ul, .editor-content ol {
            margin-left: 1.5rem;
            margin-bottom: 1rem;
        }

        .editor-content li {
            margin-bottom: 0.5rem;
            color: #374151;
        }

        .editor-content strong {
            font-weight: 700;
            color: #111827;
        }

        .thumbnail-active {
            ring-width: 3px;
            --tw-ring-color: #f97316;
        }

        .image-gallery-main {
            transition: opacity 0.3s ease;
        }

        .portfolio-modal-image {
            animation: zoomIn 0.3s ease-out;
        }
    </style>
</head>
<body class="bg-white text-gray-800 overflow-x-hidden">

@include('website.components.loading')
@include('website.components.header')

<!-- ================= HERO SECTION ================= -->
<section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden">
    <!-- Background Image with Parallax Effect -->
    <div class="absolute inset-0">
        <img src="{{ asset('storage/' . $service->hero_image) }}"
             alt="{{ $service->name }}"
             class="w-full h-full object-cover scale-110">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/50 to-black/70"></div>
    </div>

    <!-- Floating Gradient Orbs -->
    <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-gradient-to-br from-orange-500 to-pink-500 opacity-20 blur-3xl rounded-full animate-float"></div>
    <div class="absolute -bottom-32 -left-32 w-[400px] h-[400px] bg-gradient-to-br from-purple-500 to-pink-500 opacity-20 blur-3xl rounded-full animate-float" style="animation-delay: 2s;"></div>

    <div class="relative z-10 max-w-screen-xl mx-auto px-6 md:px-20 py-32 text-center">
        <!-- Badge -->
        <div class="animate-fade-in-up mb-8" style="animation-delay: 0.1s;">
            <span class="inline-flex items-center px-5 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white text-xs uppercase tracking-wider font-bold shadow-lg">
                <i class="fas fa-star mr-2"></i>
                Premium Service
            </span>
        </div>

        <!-- Main Heading -->
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-black text-white leading-tight mb-6 animate-fade-in-up" style="animation-delay: 0.2s;">
            {{ $service->headline }}
        </h1>

        <!-- Subheading -->
        <p class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto mb-10 animate-fade-in-up" style="animation-delay: 0.3s;">
            {{ $service->headline_description ?? 'Solusi desain profesional untuk kebutuhan brand Anda' }}
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-wrap gap-4 justify-center animate-fade-in-up" style="animation-delay: 0.4s;">
            <a href="https://wa.me/{{ $contact->phone }}"
               target="_blank"
               class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-full font-bold shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                <i class="fab fa-whatsapp text-xl"></i>
                <span>Konsultasi Gratis</span>
                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
            </a>
            <a href="#portfolio"
               class="inline-flex items-center gap-3 px-8 py-4 bg-white/10 backdrop-blur-md text-white border-2 border-white/30 rounded-full font-bold hover:bg-white/20 transform hover:scale-105 transition-all duration-300">
                <i class="fas fa-images"></i>
                <span>Lihat Portfolio</span>
            </a>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i class="fas fa-chevron-down text-white text-2xl"></i>
        </div>
    </div>
</section>

<!-- ================= BREADCRUMB ================= -->
<section class="bg-gray-50 border-b border-gray-200">
    <div class="max-w-screen-xl mx-auto px-6 md:px-20 py-4">
        <div class="flex items-center gap-2 text-sm text-gray-600">
            <a href="/" class="hover:text-orange-500 transition">
                <i class="fas fa-home mr-1"></i>
                Beranda
            </a>
            <i class="fas fa-chevron-right text-xs"></i>
            <a href="/services" class="hover:text-orange-500 transition">Layanan</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-orange-600 font-semibold">{{ $service->name }}</span>
        </div>
    </div>
</section>

<!-- ================= SERVICE DETAIL ================= -->
<section class="py-24 bg-white">
    <div class="max-w-screen-xl mx-auto px-6 md:px-20">

        <div class="grid lg:grid-cols-2 gap-16 items-start">

            <!-- LEFT: CONTENT -->
            <div class="space-y-8">
                <!-- Service Title -->
                <div>
                    <span class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-orange-500/10 to-pink-500/10 border border-orange-200 text-orange-600 text-xs uppercase tracking-wider font-bold mb-6">
                        <i class="fas fa-sparkles mr-2"></i>
                        {{ $service->name }}
                    </span>

                    <h2 class="text-3xl md:text-5xl font-black text-gray-900 leading-tight mt-6">
                        {{ $service->name }}
                    </h2>
                </div>

                <!-- Description -->
                <div class="editor-content prose prose-lg max-w-none">
                    {!! $service->description !!}
                </div>

                <!-- Features/Benefits -->
                <div class="bg-gradient-to-br from-orange-50 to-pink-50 rounded-3xl p-8 border border-orange-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-orange-500 to-pink-500 flex items-center justify-center">
                            <i class="fas fa-check text-white"></i>
                        </div>
                        Mengapa Memilih Layanan Ini?
                    </h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-circle-check text-orange-500 mt-1"></i>
                            <span class="text-gray-700">Desain profesional & berkualitas</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-circle-check text-orange-500 mt-1"></i>
                            <span class="text-gray-700">File siap cetak (print-ready)</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-circle-check text-pink-500 mt-1"></i>
                            <span class="text-gray-700">Revisi unlimited hingga puas</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-circle-check text-pink-500 mt-1"></i>
                            <span class="text-gray-700">Fast response & on-time delivery</span>
                        </div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="https://wa.me/{{ $contact->phone }}"
                       target="_blank"
                       class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-full font-bold shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                        <i class="fab fa-whatsapp text-xl"></i>
                        <span>Tanya Harga Sekarang</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>

                    <a href="{{ route('portfolio') }}"
                       class="inline-flex items-center gap-3 px-8 py-4 bg-white text-gray-800 rounded-full font-bold border-2 border-gray-200 hover:border-orange-500 hover:bg-orange-50 transform hover:scale-105 transition-all duration-300">
                        <i class="fas fa-folder-open"></i>
                        <span>Lihat Semua Portfolio</span>
                    </a>
                </div>

                <!-- Trust Badges -->
                <div class="grid grid-cols-3 gap-4 pt-8">
                    <div class="text-center p-4 bg-white rounded-2xl shadow-md border border-gray-100">
                        <div class="text-3xl font-black bg-gradient-to-r from-orange-500 to-pink-500 bg-clip-text text-transparent">250+</div>
                        <p class="text-xs text-gray-600 mt-1">Projects Done</p>
                    </div>
                    <div class="text-center p-4 bg-white rounded-2xl shadow-md border border-gray-100">
                        <div class="text-3xl font-black bg-gradient-to-r from-pink-500 to-purple-500 bg-clip-text text-transparent">98%</div>
                        <p class="text-xs text-gray-600 mt-1">Satisfaction</p>
                    </div>
                    <div class="text-center p-4 bg-white rounded-2xl shadow-md border border-gray-100">
                        <div class="text-3xl font-black bg-gradient-to-r from-purple-500 to-orange-500 bg-clip-text text-transparent">24/7</div>
                        <p class="text-xs text-gray-600 mt-1">Support</p>
                    </div>
                </div>
            </div>

            <!-- RIGHT: IMAGE GALLERY -->
            <div class="lg:sticky lg:top-24 space-y-6">

                <!-- Main Image -->
                <div class="relative bg-gradient-to-br from-orange-50 to-pink-50 rounded-3xl p-4 shadow-xl border border-orange-100">
                    <div class="relative rounded-2xl overflow-hidden aspect-[4/3] bg-white">
                        <img
                            id="mainImage"
                            src="{{ asset('storage/' . ($service->images->first()->image_path ?? $service->hero_image)) }}"
                            alt="{{ $service->name }}"
                            class="image-gallery-main w-full h-full object-cover"
                        >

                        <!-- Zoom Icon -->
                        <div class="absolute top-4 right-4 w-12 h-12 rounded-full bg-white/90 backdrop-blur-md flex items-center justify-center cursor-pointer hover:bg-white transition shadow-lg" onclick="openImageModal()">
                            <i class="fas fa-expand text-gray-700"></i>
                        </div>
                    </div>

                    <!-- Image Counter -->
                    <div class="absolute bottom-8 left-8 px-4 py-2 bg-black/70 backdrop-blur-md rounded-full text-white text-sm font-semibold">
                        <i class="fas fa-images mr-2"></i>
                        <span id="imageCounter">1</span> / {{ $service->images->count() ?: 1 }}
                    </div>
                </div>

                <!-- Thumbnail Gallery -->
                @if($service->images->count())
                    <div class="grid grid-cols-4 gap-3">
                        @foreach($service->images as $index => $image)
                            <div
                                class="relative group cursor-pointer rounded-xl overflow-hidden aspect-square bg-gray-100 border-2 border-transparent hover:border-orange-500 transition-all {{ $loop->first ? 'ring-3 ring-orange-500' : '' }}"
                                onclick="changeImage(this, {{ $index + 1 }})"
                                data-src="{{ asset('storage/' . $image->image_path) }}">
                                <img
                                    src="{{ asset('storage/' . $image->image_path) }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                                    alt="Thumbnail {{ $loop->iteration }}">

                                <!-- Overlay on hover -->
                                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors"></div>
                            </div>
                        @endforeach
                    </div>
                @endif

                <!-- Info Card
                <div class="bg-gradient-to-br from-gray-900 to-gray-800 rounded-3xl p-8 text-white">
                    <h3 class="text-xl font-bold mb-4 flex items-center gap-3">
                        <i class="fas fa-info-circle text-orange-400"></i>
                        Informasi Layanan
                    </h3>
                    <div class="space-y-3 text-sm">
                        <div class="flex items-center justify-between pb-3 border-b border-white/10">
                            <span class="text-gray-400">Kategori:</span>
                            <span class="font-semibold">{{ $service->name }}</span>
                        </div>
                        <div class="flex items-center justify-between pb-3 border-b border-white/10">
                            <span class="text-gray-400">Waktu Pengerjaan:</span>
                            <span class="font-semibold">3-7 Hari Kerja</span>
                        </div>
                        <div class="flex items-center justify-between pb-3 border-b border-white/10">
                            <span class="text-gray-400">Format File:</span>
                            <span class="font-semibold">AI, PDF, JPG, PNG</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-400">Revisi:</span>
                            <span class="font-semibold text-green-400">Unlimited</span>
                        </div>
                    </div>

                    <a href="https://wa.me/{{ $contact->phone }}" target="_blank" class="mt-6 w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-full font-bold hover:shadow-xl transform hover:scale-105 transition-all">
                        <i class="fab fa-whatsapp"></i>
                        <span>Chat Sekarang</span>
                    </a>
                </div> -->

            </div>

        </div>
    </div>
</section>

<!-- ================= PORTFOLIO SHOWCASE ================= -->
<section id="portfolio" class="py-24 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-screen-xl mx-auto px-6 md:px-20">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-flex items-center px-5 py-2 rounded-full bg-gradient-to-r from-orange-500/10 to-pink-500/10 border border-orange-200 text-orange-600 text-xs uppercase tracking-wider font-bold mb-6">
                <i class="fas fa-folder-open mr-2"></i>
                Portfolio Terpilih
            </span>

            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                Hasil Karya
                <span class="bg-gradient-to-r from-orange-500 to-pink-500 bg-clip-text text-transparent">
                    {{ $service->name }}
                </span>
            </h2>

            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Lihat bagaimana kami membantu brand lain mencapai kesuksesan melalui desain yang berkualitas
            </p>
        </div>

        @if($service->portfolios->count())

        <!-- Portfolio Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- LARGE PORTFOLIO (First Item) -->
            <div class="lg:col-span-2">
                @php $portfolio = $service->portfolios[0]; @endphp

                <div
                    class="group relative h-[500px] rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl cursor-pointer bg-white transition-all duration-300 hover:scale-[1.02]"
                    onclick='openPortfolio(@json(
                        $portfolio->images->map(fn($img) => asset("storage/".$img->image))->values()
                    ), "{{ $portfolio->name }}")'>

                    <img src="{{ asset('storage/'.$portfolio->cover) }}"
                         alt="{{ $portfolio->name }}"
                         class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110">

                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

                    <!-- Hover Icon -->
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="w-16 h-16 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center border-2 border-white/40 transform scale-75 group-hover:scale-100 transition-transform">
                            <i class="fas fa-search-plus text-white text-2xl"></i>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="absolute bottom-0 left-0 right-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform">
                        <div class="flex items-center gap-2 text-orange-400 text-sm font-semibold mb-3">
                            <i class="fas fa-star"></i>
                            <span>Featured Project</span>
                        </div>
                        <h3 class="text-2xl font-black text-white mb-2">
                            {{ $portfolio->name }}
                        </h3>
                        <div class="flex items-center gap-3 text-white/80 text-sm">
                            <span>{{ $service->name }}</span>
                            <span>•</span>
                            <span>2024</span>
                        </div>
                    </div>

                    <!-- Badge -->
                    <div class="absolute top-6 right-6 px-4 py-2 bg-gradient-to-r from-orange-500 to-pink-500 text-white text-xs font-bold rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
                        View Project
                    </div>
                </div>
            </div>

            <!-- SMALL PORTFOLIOS (Grid) -->
            <div class="grid grid-rows-2 gap-6">
                @foreach($service->portfolios->skip(1)->take(2) as $portfolio)
                    <div
                        class="group relative h-[242px] rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl cursor-pointer bg-white transition-all duration-300 hover:scale-[1.02]"
                        onclick='openPortfolio(@json(
                            $portfolio->images->map(fn($img) => asset("storage/".$img->image))->values()
                        ), "{{ $portfolio->name }}")'>

                        <img src="{{ asset('storage/'.$portfolio->cover) }}"
                             alt="{{ $portfolio->name }}"
                             class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-110">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>

                        <!-- Hover Icon -->
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="w-12 h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center border-2 border-white/40">
                                <i class="fas fa-search-plus text-white text-lg"></i>
                            </div>
                        </div>

                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-lg font-bold text-white mb-1">
                                {{ $portfolio->name }}
                            </h3>
                            <p class="text-white/80 text-xs">{{ $service->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        <!-- View More Button -->
        <div class="text-center mt-16">
            <a href="{{ route('portfolio') }}" class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-full font-bold shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                <span>Lihat Semua Portfolio</span>
                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>

        @else
            <div class="text-center py-20">
                <div class="w-24 h-24 mx-auto mb-6 rounded-full bg-gradient-to-br from-orange-100 to-pink-100 flex items-center justify-center">
                    <i class="fas fa-folder-open text-4xl text-orange-500"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Portfolio Segera Hadir</h3>
                <p class="text-gray-600">Kami sedang menyiapkan portfolio terbaik untuk Anda</p>
            </div>
        @endif

    </div>
</section>

<!-- ================= FAQ SECTION ================= -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-6 md:px-20">

        <div class="text-center mb-16">
            <span class="inline-flex items-center px-5 py-2 rounded-full bg-gradient-to-r from-orange-500/10 to-pink-500/10 border border-orange-200 text-orange-600 text-xs uppercase tracking-wider font-bold mb-6">
                <i class="fas fa-question-circle mr-2"></i>
                FAQ
            </span>

            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                Pertanyaan
                <span class="bg-gradient-to-r from-orange-500 to-pink-500 bg-clip-text text-transparent">
                    Yang Sering Ditanya
                </span>
            </h2>
        </div>

        <div class="space-y-4">
            @foreach($faqs as $faq)
            <div class="bg-white border-2 border-gray-200 rounded-2xl p-6 hover:border-orange-300 transition-colors">
                <h3 class="font-bold text-lg text-gray-900 mb-2">{{$faq->question}}</h3>
                <p class="text-gray-600">{{$faq->answer}}</p>
            </div>
            @endforeach()
        </div>

    </div>
</section>

<!-- ================= CTA ================= -->
@include('website.components.cta')

@include('website.components.footer')

<!-- ================= IMAGE MODAL ================= -->
<div id="imageModal" class="fixed inset-0 z-[9999] hidden items-center justify-center bg-black/95 backdrop-blur-xl p-4">
    <button onclick="closeImageModal()" class="absolute top-6 right-6 w-14 h-14 rounded-full bg-white/10 backdrop-blur-md border-2 border-white/20 flex items-center justify-center text-white hover:bg-white/20 hover:rotate-90 transition-all">
        <i class="fas fa-times text-xl"></i>
    </button>
    <img id="modalImage" src="" class="max-w-[95%] max-h-[95%] object-contain rounded-2xl shadow-2xl">
</div>

<!-- ================= PORTFOLIO MODAL ================= -->
<div id="portfolioModal" class="fixed inset-0 z-[9999] hidden items-center justify-center bg-black/95 backdrop-blur-xl px-4 py-10 overflow-y-auto">

    <button onclick="closePortfolio()" class="fixed top-6 right-6 z-50 w-14 h-14 rounded-full bg-white/10 backdrop-blur-md border-2 border-white/20 flex items-center justify-center text-white hover:bg-white/20 hover:scale-110 transition-all duration-300 group">
        <i class="fas fa-times text-xl group-hover:rotate-90 transition-transform"></i>
    </button>

    <div class="relative w-full max-w-7xl mx-auto">
        <div class="text-center mb-10">
            <h2 id="modalTitle" class="text-3xl md:text-5xl font-black text-white mb-3"></h2>
            <div class="inline-flex items-center gap-2 px-6 py-3 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
                <i class="fas fa-tag text-orange-400"></i>
                <span class="text-white font-semibold">{{ $service->name }}</span>
            </div>
        </div>

        <div id="portfolioImages" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Images will be inserted here -->
        </div>
    </div>
</div>

<script>
    // Change main image in gallery
    function changeImage(element, imageNumber) {
        const mainImg = document.getElementById('mainImage');
        const newSrc = element.getAttribute('data-src');

        // Fade effect
        mainImg.style.opacity = '0.5';

        setTimeout(() => {
            mainImg.src = newSrc;
            mainImg.style.opacity = '1';
        }, 150);

        // Update counter
        document.getElementById('imageCounter').textContent = imageNumber;

        // Update active thumbnail
        document.querySelectorAll('[onclick^="changeImage"]').forEach(thumb => {
            thumb.classList.remove('ring-3', 'ring-orange-500');
            thumb.classList.add('border-transparent');
        });

        element.classList.add('ring-3', 'ring-orange-500');
        element.classList.remove('border-transparent');
    }

    // Open image in modal
    function openImageModal() {
        const mainImg = document.getElementById('mainImage');
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');

        modalImg.src = mainImg.src;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    // Close image modal
    function closeImageModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = 'auto';
    }

    // Open portfolio modal
    function openPortfolio(images, title = '') {
        const modal = document.getElementById('portfolioModal');
        const container = document.getElementById('portfolioImages');
        const modalTitle = document.getElementById('modalTitle');

        modalTitle.textContent = title;
        container.innerHTML = '';

        images.forEach((imgSrc, index) => {
            const imgWrapper = document.createElement('div');
            imgWrapper.className = 'portfolio-modal-image relative group overflow-hidden rounded-2xl shadow-2xl bg-white';
            imgWrapper.style.animationDelay = `${index * 0.1}s`;

            imgWrapper.innerHTML = `
                <img src="${imgSrc}"
                     alt="Portfolio Image ${index + 1}"
                     class="w-full h-full object-cover cursor-zoom-in hover:scale-105 transition-transform duration-500"
                     onclick="viewFullImage('${imgSrc}')">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="absolute bottom-4 left-4 right-4 flex justify-between items-center">
                        <span class="text-white text-sm font-semibold">Image ${index + 1}</span>
                        <button onclick="viewFullImage('${imgSrc}')" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white hover:bg-white/30 transition border border-white/30">
                            <i class="fas fa-expand-alt text-sm"></i>
                        </button>
                    </div>
                </div>
            `;

            container.appendChild(imgWrapper);
        });

        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    // Close portfolio modal
    function closePortfolio() {
        const modal = document.getElementById('portfolioModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = 'auto';
    }

    // View full image
    function viewFullImage(imgSrc) {
        const fullImageModal = document.createElement('div');
        fullImageModal.className = 'fixed inset-0 z-[10000] flex items-center justify-center bg-black/95 backdrop-blur-xl p-4';
        fullImageModal.innerHTML = `
            <button onclick="this.parentElement.remove()" class="absolute top-6 right-6 w-14 h-14 rounded-full bg-white/10 backdrop-blur-md border-2 border-white/20 flex items-center justify-center text-white hover:bg-white/20 hover:rotate-90 transition-all">
                <i class="fas fa-times text-xl"></i>
            </button>
            <img src="${imgSrc}" class="max-w-[95%] max-h-[95%] object-contain rounded-2xl shadow-2xl" style="animation: zoomIn 0.3s ease-out">
        `;
        document.body.appendChild(fullImageModal);
        fullImageModal.onclick = function(e) {
            if (e.target === fullImageModal) {
                fullImageModal.remove();
            }
        };
    }

    // Close modals with ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeImageModal();
            closePortfolio();
            document.querySelectorAll('.fixed.z-\\[10000\\]').forEach(el => el.remove());
        }
    });
</script>

</body>
</html>
