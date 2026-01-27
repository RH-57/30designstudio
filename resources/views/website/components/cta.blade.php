<section class="relative py-24 bg-gradient-to-br from-gray-900 via-gray-800 to-black overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>

    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-gradient-to-br from-orange-500 to-pink-500 opacity-20 blur-3xl"></div>

    <div class="relative max-w-screen-xl mx-auto px-6 md:px-20 text-center">
        <span class="inline-flex items-center px-5 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white text-xs uppercase tracking-wider font-bold mb-8">
            <i class="fas fa-rocket mr-2"></i>
            Mari Mulai Project Anda
        </span>

        <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
            Siap Membuat Packaging yang
            <span class="block bg-gradient-to-r from-orange-400 to-pink-400 bg-clip-text text-transparent">
                Meningkatkan Penjualan?
            </span>
        </h2>

        <p class="text-gray-300 text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
            Diskusikan kebutuhan desain Anda bersama kami dan ciptakan packaging
            yang membuat brand Anda stand out di pasar!
        </p>

        <div class="flex flex-wrap gap-4 justify-center">
            <a href="#contact" class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-full font-bold shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                <span>Konsultasi Gratis</span>
                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>

        <!-- Contact Info -->
        <div class="mt-16 flex flex-wrap justify-center gap-8 text-gray-400">
            <div class="flex items-center gap-3">
                <i class="fas fa-phone text-orange-400"></i>
                <span>+{{$contact->phone}}</span>
            </div>
            <div class="flex items-center gap-3">
                <i class="fas fa-envelope text-pink-400"></i>
                <span>{{$contact->email}}</span>
            </div>
            <div class="flex items-center gap-3">
                <i class="fab fa-whatsapp text-green-400"></i>
                <span>WhatsApp Available</span>
            </div>
        </div>
    </div>
</section>
