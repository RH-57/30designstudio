<footer class="relative bg-gradient-to-b from-white via-white to-purple-50
               text-gray-700 pt-20 pb-10 overflow-hidden">

    <!-- GRADIENT DEKORASI -->
    <div class="absolute inset-0 pointer-events-none -z-10">
        <div class="absolute -top-24 -left-24 w-80 h-80
                    bg-orange-200/30 blur-3xl rounded-full"></div>
        <div class="absolute bottom-0 right-0 w-[420px] h-[420px]
                    bg-purple-300/30 blur-3xl rounded-full"></div>
    </div>

    <div class="max-w-screen-xl mx-auto px-6 md:px-20">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">

            <!-- BRAND -->
            <div class="space-y-5">

                <!-- BRAND -->
                <a href="/" class="flex items-center gap-1">
                    <div class="h-8 w-8 rounded-md bg-orange-600 flex items-center justify-center text-white font-bold">30</div>
                    <span class="hidden lg:inline-block font-semibold
                                bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600
                                bg-clip-text text-transparent">
                        designstudio
                    </span>
                </a>

                <!-- DESKRIPSI -->
                <p class="text-gray-800 text-sm leading-relaxed">
                    Jasa desain packaging profesional dari konsep visual hingga siap cetak,
                    membantu produk tampil menonjol dan siap bersaing di pasaran.
                </p>

                <!-- FOLLOW US -->
                <div>
                    <p class="text-sm font-semibold text-gray-900 mb-2">Follow Us</p>
                    <div class="flex items-center gap-4 text-lg text-gray-500">
                        @foreach($mediasocials as $medsos)
                        <a href="{{$medsos->url}}" class="hover:text-orange-500 transition">
                            <i class="fab {{$medsos->icon}}"></i>
                        </a>
                        @endforeach
                    </div>
                </div>

            </div>


            <!-- NAVIGASI -->
            <div>
                <h3 class="text-gray-900 font-bold mb-4">Navigasi</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{route('home')}}" class="text-gray-800 hover:text-orange-500 transition">Beranda</a></li>
                    <li><a href="{{route('about')}}" class="text-gray-800 hover:text-orange-500 transition">Tentang Kami</a></li>
                    <li><a href="#our-clients" class="text-gray-800 hover:text-orange-500 transition">Portofolio</a></li>
                    <li><a href="#contact" class="text-gray-800 hover:text-orange-500 transition">Kontak</a></li>
                </ul>
            </div>

            <!-- LAYANAN -->
            <div>
                <h3 class="text-gray-900 font-bold mb-4">Layanan Kami</h3>
                <ul class="space-y-2 text-sm">
                    @foreach($services as $service)
                    <li><a href="" class="text-gray-800 hover:text-pink-500 transition">{{$service->name}}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- KONTAK -->
            <div>
                <h3 class="text-gray-900 font-bold mb-4">Hubungi Kami</h3>
                <ul class="space-y-3 text-sm text-gray-800">
                    <li>{{$contact->address}}</li>
                    <li>+{{$contact->phone}}</li>
                    <li>{{$contact->email}}</li>
                </ul>

                <!-- CTA WHATSAPP -->
                <a href="https://wa.me/628xxxxxxxxx"
                   class="inline-flex items-center gap-2 mt-5 px-5 py-2.5 rounded-full
                          bg-gradient-to-r from-orange-500 via-pink-500 to-purple-800
                          text-white text-sm font-semibold
                          shadow-lg hover:opacity-90 transition">
                    <i class="fab fa-whatsapp text-lg"></i>
                    Konsultasi Gratis
                </a>
            </div>

        </div>

        <!-- COPYRIGHT -->
        <div class="border-t border-gray-200 mt-14 pt-6
                    flex flex-col md:flex-row items-center justify-between
                    text-sm text-gray-500 gap-3">

            <span>
                © 2026 <strong class="text-gray-700">30designstudio</strong>. All Rights Reserved.
            </span>

            <span>
                Made by
                <a href="https://liradigi.id" class="font-semibold bg-gradient-to-r from-orange-500 via-pink-500 to-purple-800
                                  bg-clip-text text-transparent">
                    Liradigi
                </a>
            </span>
        </div>

    </div>
</footer>
