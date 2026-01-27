<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karya Terbaik Kami - 30design.studio</title>

    <link href="{{asset('assets/website/img/favicon.ico')}}" rel="icon">
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
<body class="bg-white overflow-x-hidden">

    @include('website.components.loading')
    @include('website.components.header')

    <!-- ================= HERO SECTION ================= -->
    <section class="relative pt-40 pb-20 overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-orange-50/50 via-white to-pink-50/50"></div>
        </div>

        <!-- Floating Gradient Orbs -->
        <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-gradient-to-br from-orange-300 to-pink-300 opacity-20 blur-3xl rounded-full animate-float"></div>
        <div class="absolute bottom-0 -left-32 w-[400px] h-[400px] bg-gradient-to-br from-purple-300 to-pink-300 opacity-20 blur-3xl rounded-full animate-float" style="animation-delay: 2s;"></div>

        <div class="relative z-10 w-full max-w-screen-xl mx-auto px-6 md:px-20">

            <!-- Breadcrumb -->
            <div class="flex items-center justify-center gap-2 text-sm text-gray-600 mb-6 animate-fade-in-up">
                <a href="/" class="hover:text-orange-500 transition">Home</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-orange-500 font-semibold">Portfolio</span>
            </div>

            <!-- Main Content -->
            <div class="text-center mb-16">
                <div class="animate-fade-in-up" style="animation-delay: 0.1s;">
                    <span class="inline-flex items-center px-5 py-2 rounded-full bg-white border-2 border-orange-200 text-orange-600 text-xs uppercase tracking-wider font-bold mb-8 shadow-sm">
                        <i class="fas fa-images mr-2"></i>
                        Karya Terbaik Kami
                    </span>
                </div>

                <h1 class="text-5xl md:text-7xl font-black text-gray-900 leading-tight mb-6 animate-fade-in-up" style="animation-delay: 0.2s;">
                    Portfolio
                    <span class="block bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                        30Design Studio
                    </span>
                </h1>

                <p class="mt-6 max-w-3xl mx-auto text-gray-700 text-lg leading-relaxed animate-fade-in-up" style="animation-delay: 0.3s;">
                    Koleksi project <strong>desain packaging</strong>, <strong>branding</strong>, dan <strong>visual identity</strong>
                    yang telah berhasil membantu brand berkembang dan meningkatkan penjualan.
                </p>
            </div>

            <!-- Stats Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto animate-fade-in-up" style="animation-delay: 0.4s;">
                <div class="text-center p-8 bg-white rounded-3xl shadow-lg border border-gray-100">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-orange-500 to-pink-500 mb-4">
                        <i class="fas fa-check-circle text-white text-2xl"></i>
                    </div>
                    <p class="text-4xl font-black bg-gradient-to-r from-orange-500 to-pink-500 bg-clip-text text-transparent mb-2">250+</p>
                    <p class="text-gray-600 font-semibold">Projects Completed</p>
                </div>

                <div class="text-center p-8 bg-white rounded-3xl shadow-lg border border-gray-100">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-pink-500 to-purple-500 mb-4">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <p class="text-4xl font-black bg-gradient-to-r from-pink-500 to-purple-500 bg-clip-text text-transparent mb-2">150+</p>
                    <p class="text-gray-600 font-semibold">Happy Clients</p>
                </div>

                <div class="text-center p-8 bg-white rounded-3xl shadow-lg border border-gray-100">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 to-orange-500 mb-4">
                        <i class="fas fa-star text-white text-2xl"></i>
                    </div>
                    <p class="text-4xl font-black bg-gradient-to-r from-purple-500 to-orange-500 bg-clip-text text-transparent mb-2">98%</p>
                    <p class="text-gray-600 font-semibold">Satisfaction Rate</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= PORTFOLIO GRID ================= -->
    <section id="portfolio" class="relative py-20 bg-white overflow-hidden">

        <div class="w-full max-w-screen-xl mx-auto px-6 md:px-20">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-4">
                    Lihat Hasil Kerja
                    <span class="bg-gradient-to-r from-orange-500 to-pink-500 bg-clip-text text-transparent">
                        Kami
                    </span>
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Setiap project adalah kolaborasi yang menghasilkan desain berkualitas tinggi dan siap produksi
                </p>
            </div>

            <!-- Portfolio Grid -->
            <div class="masonry-layout">
                @foreach ($portfolios as $index => $portfolio)
                <div class="portfolio-item portfolio-card rounded-xl shadow-lg hover:shadow-2xl cursor-pointer overflow-hidden"
                    onclick='openPortfolio(@json(
                        $portfolio->images
                            ->map(fn($img) => asset("storage/".$img->image))
                            ->values()
                    ), "{{ $portfolio->name }}", "{{ $portfolio->service->name ?? '-' }}")'>

                    <!-- Image Container -->
                    <div class="portfolio-image-container aspect-[4/3] relative">
                        <img src="{{ asset('storage/'.$portfolio->cover) }}"
                            alt="{{ $portfolio->name }}"
                            class="portfolio-image">

                        <!-- Overlay -->
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h3 class="text-xl font-black text-white mb-2 drop-shadow-lg">
                                    {{ $portfolio->name }}
                                </h3>
                                <div class="flex items-center gap-2 text-white/90 text-sm">
                                    <i class="fas fa-tag"></i>
                                    <span>{{ $portfolio->service->name ?? '-' }}</span>
                                </div>
                                <div class="mt-4 inline-flex items-center gap-2 px-4 py-2 bg-white/20 backdrop-blur-md rounded-full text-white text-sm font-semibold border border-white/30">
                                    <i class="fas fa-eye"></i>
                                    <span>Lihat Detail</span>
                                </div>
                            </div>
                        </div>

                        <!-- Badge -->
                        <div class="portfolio-badge">
                            <i class="fas fa-arrow-up-right-from-square mr-1"></i>
                            View Project
                        </div>
                    </div>

                    <!-- Card Footer Info (Always Visible) -->
                    <div class="p-6 bg-white">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">
                            {{ $portfolio->name }}
                        </h3>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600">
                                <i class="fas fa-folder-open text-orange-500 mr-1"></i>
                                {{ $portfolio->service->name ?? '-' }}
                            </span>
                            <span class="text-xs text-gray-400">2024</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ================= TESTIMONIAL SECTION ================= -->
    <section class="relative py-24 bg-gradient-to-br from-gray-50 to-white overflow-hidden">
        <div class="absolute top-20 right-20 w-96 h-96 bg-orange-200/30 blur-3xl rounded-full"></div>

        <div class="relative max-w-screen-xl mx-auto px-6 md:px-20">
            <div class="text-center mb-16">
                <span class="inline-flex items-center px-5 py-2 rounded-full bg-white border-2 border-orange-200 text-orange-600 text-xs uppercase tracking-wider font-bold mb-6 shadow-sm">
                    <i class="fas fa-quote-left mr-2"></i>
                    Kata Klien Kami
                </span>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                    Dipercaya oleh
                    <span class="bg-gradient-to-r from-orange-500 to-pink-500 bg-clip-text text-transparent">
                        Brand Berkembang
                    </span>
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100">
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "Desain packaging dari 30Design Studio benar-benar meningkatkan penjualan produk kami. Profesional dan detail!"
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-orange-500 to-pink-500"></div>
                        <div>
                            <p class="font-bold text-gray-900">Sarah Johnson</p>
                            <p class="text-sm text-gray-600">CEO, Beauty Brand</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100">
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "Kerjasama yang sangat menyenangkan. Tim sangat responsif dan hasil desainnya selalu memuaskan!"
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-pink-500 to-purple-500"></div>
                        <div>
                            <p class="font-bold text-gray-900">Ahmad Rizki</p>
                            <p class="text-sm text-gray-600">Owner, F&B Business</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100">
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "File desain yang diberikan sangat rapi dan siap cetak. Tidak perlu revisi berkali-kali. Recommended!"
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-purple-500 to-orange-500"></div>
                        <div>
                            <p class="font-bold text-gray-900">Lisa Permata</p>
                            <p class="text-sm text-gray-600">Marketing Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= CALL TO ACTION ================= -->
    @include('website.components.cta')

    <!-- ================= PORTFOLIO MODAL ================= -->
    <div id="portfolioModal"
        class="fixed inset-0 z-[9999] hidden items-center justify-center bg-black/95 backdrop-blur-xl px-4 py-10 overflow-y-auto">

        <!-- Close Button -->
        <button onclick="closePortfolio()"
            class="fixed top-6 right-6 z-50 w-14 h-14 rounded-full bg-white/10 backdrop-blur-md border-2 border-white/20 flex items-center justify-center text-white hover:bg-white/20 hover:scale-110 transition-all duration-300 group">
            <i class="fas fa-times text-xl group-hover:rotate-90 transition-transform"></i>
        </button>

        <!-- Modal Content -->
        <div class="relative w-full max-w-7xl mx-auto">

            <!-- Project Info Header -->
            <div class="text-center mb-10">
                <h2 id="modalTitle" class="text-3xl md:text-5xl font-black text-white mb-3"></h2>
                <div class="inline-flex items-center gap-2 px-6 py-3 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
                    <i class="fas fa-tag text-orange-400"></i>
                    <span id="modalCategory" class="text-white font-semibold"></span>
                </div>
            </div>

            <!-- Images Grid -->
            <div id="portfolioImages" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Images will be inserted here -->
            </div>

        </div>
    </div>

    @include('website.components.footer')

    <!-- Scripts -->
    <script>
        // Open Portfolio Modal
        function openPortfolio(images, title = '', category = '') {
            const modal = document.getElementById('portfolioModal');
            const container = document.getElementById('portfolioImages');
            const modalTitle = document.getElementById('modalTitle');
            const modalCategory = document.getElementById('modalCategory');

            // Set title and category
            modalTitle.textContent = title;
            modalCategory.textContent = category;

            // Clear previous images
            container.innerHTML = '';

            // Add images
            images.forEach((imgSrc, index) => {
                const imgWrapper = document.createElement('div');
                imgWrapper.className = 'modal-image relative group overflow-hidden rounded-2xl shadow-2xl bg-white';
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

            // Show modal
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        // Close Portfolio Modal
        function closePortfolio() {
            const modal = document.getElementById('portfolioModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto';
        }

        // View Full Image
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

        // Share Portfolio
        function sharePortfolio() {
            if (navigator.share) {
                navigator.share({
                    title: 'Portfolio 30Design Studio',
                    text: 'Lihat portfolio desain packaging profesional dari 30Design Studio!',
                    url: window.location.href
                }).catch(() => {});
            } else {
                navigator.clipboard.writeText(window.location.href);
                alert('Link berhasil disalin!');
            }
        }

        // Close modal with ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closePortfolio();
                document.querySelectorAll('.fixed.z-\\[10000\\]').forEach(el => el.remove());
            }
        });

        // Smooth scroll reveal animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'scale(1)';
                }
            });
        }, observerOptions);

        // Observe all portfolio items on load
        document.addEventListener('DOMContentLoaded', function() {
            const items = document.querySelectorAll('.portfolio-item');
            items.forEach(item => observer.observe(item));
        });
    </script>

</body>
</html>
