<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - 30design.studio</title>

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

    <!-- HEADER -->
    @include('website.components.header')

    <!-- HERO CONTACT -->
    <section class="relative pt-40 pb-20 bg-white overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/website/img/hero-about.jpg') }}"
                 alt="Hubungi 30Design Studio"
                 class="w-full h-full object-cover opacity-20">
        </div>

        <div class="absolute inset-0 bg-gradient-to-br from-white via-white/80 to-white"></div>

        <div class="absolute -top-24 -right-24 w-96 h-96 bg-orange-200/40 blur-3xl rounded-full"></div>
        <div class="absolute -bottom-24 -left-24 w-[450px] h-[450px] bg-pink-200/40 blur-3xl rounded-full"></div>

        <div class="relative z-10 max-w-screen-xl mx-auto px-4 md:px-20 text-center">
            <p class="text-xs uppercase tracking-widest text-gray-500 mb-4">
                Home / Contact Us
            </p>

            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">
                Hubungi
                <span class="block bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                    30Design Studio
                </span>
            </h1>

        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="relative py-20 bg-white overflow-hidden">

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
                    <span class="bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">Wujudkan </span>
                    Ide Kamu?
                </h2>
                <p class="text-gray-800 text-sm mt-4 max-w-2xl mx-auto">
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
                                <h4 class="text-xl font-bold text-gray-900">Telepon</h4>
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

                <!-- RIGHT FORM -->
                <div class="bg-white/70 backdrop-blur-xl border border-orange-100 rounded-3xl shadow-lg p-5">
                    <form action="" method="POST" class="space-y-6">

                        <!-- Name -->
                        <div>
                            <label class="text-gray-700 text-sm font-semibold">Nama Lengkap</label>
                            <div class="mt-2 rounded-xl p-[2px] bg-gray-200
                                        focus-within:bg-gradient-to-r
                                        focus-within:from-orange-500
                                        focus-within:via-pink-500
                                        focus-within:to-purple-600
                                        transition">
                                <input
                                    type="text"
                                    required
                                    class="w-full px-5 py-3 rounded-[10px]
                                        bg-white
                                        border border-transparent
                                        outline-none
                                        focus:ring-0">
                            </div>
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="text-gray-700 text-sm font-semibold">Email</label>
                            <div class="mt-2 rounded-xl p-[2px] bg-gray-200
                                        focus-within:bg-gradient-to-r
                                        focus-within:from-orange-500
                                        focus-within:via-pink-500
                                        focus-within:to-purple-600
                                        transition">
                                <input
                                    type="email"
                                    required
                                    class="w-full px-5 py-3 rounded-[10px]
                                        bg-white
                                        border border-transparent
                                        outline-none
                                        focus:ring-0">
                            </div>
                        </div>

                        <!-- Message -->
                        <div>
                            <label class="text-gray-700 text-sm font-semibold">Pesan / Pertanyaan</label>
                            <div class="mt-2 rounded-xl p-[2px] bg-gray-200
                                        focus-within:bg-gradient-to-r
                                        focus-within:from-orange-500
                                        focus-within:via-pink-500
                                        focus-within:to-purple-600
                                        transition">
                                <textarea
                                    rows="4"
                                    required
                                    class="w-full px-5 py-3 rounded-[10px]
                                        bg-white
                                        border border-transparent
                                        outline-none
                                        resize-none
                                        focus:ring-0"></textarea>
                            </div>
                        </div>

                        <!-- Button -->
                        <button
                            class="w-full bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600
                                hover:opacity-90
                                text-white py-3 rounded-xl font-semibold shadow-lg transition">
                            Kirim Pesan
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- MAPS SECTION -->
    <section class="relative py-20 bg-white overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-10 left-10 w-96 h-96 bg-orange-200/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 right-10 w-[500px] h-[500px] bg-pink-200/30 blur-3xl rounded-full"></div>
        </div>

        <div class="max-w-screen-xl mx-auto px-4 md:px-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">
                    Lokasi
                    <span class="bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600 bg-clip-text text-transparent">
                        Kami
                    </span>
                </h2>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-xl border border-orange-100">
                <iframe
                    src="{{$contact->address}}"
                    class="w-full h-[450px] border-0"
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

    @include('website.components.cta')
    @include('website.components.footer')

</body>
</html>
