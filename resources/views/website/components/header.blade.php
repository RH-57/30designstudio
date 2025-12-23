<header class="fixed inset-x-0 top-4 z-50 px-4 md:px-20">
    <div class="w-full max-w-screen-xl mx-auto rounded-2xl
            bg-white/20 backdrop-blur-xl border border-white/20 shadow-lg">

        <div class="px-4 md:px-6 py-3 flex items-center justify-between">

            <!-- LEFT: Logo -->
            <a href="/" class="flex items-center gap-3">
                <div class="h-8 w-8 rounded-md bg-orange-600 flex items-center justify-center text-white font-bold">PIK</div>
                <span class="hidden md:inline-block font-semibold
                            bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600
                            bg-clip-text text-transparent">
                    30Design.Studio
                </span>
            </a>

            <!-- CENTER: Menu (desktop only) -->
            <nav class="hidden md:flex justify-center">
                <ul class="flex gap-8 items-center text-gray-800 font-medium">
                    <li>
                        <a href="/" class="transition bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600
                                        bg-clip-text hover:text-transparent">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="/about-us" class="transition bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600
                                            bg-clip-text hover:text-transparent">
                            Tentang Kami
                        </a>
                    </li>
                    <li class="relative group">
                        <!-- Trigger -->
                        <button
                            class="flex items-center gap-1 transition
                                bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600
                                bg-clip-text hover:text-transparent focus:outline-none">

                            Layanan
                            <svg class="w-4 h-4 mt-[2px] transition-transform duration-200
                                        group-hover:rotate-180"
                                fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- DROPDOWN -->
                        <div
                            class="absolute left-0 top-full mt-3 w-56
                                rounded-xl bg-white shadow-xl border border-gray-100
                                opacity-0 invisible translate-y-2
                                group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                                transition-all duration-200 z-50">

                            <ul class="py-2 text-sm text-gray-700">
                                <li>
                                    <a href="#logo-design"
                                    class="block px-5 py-2 hover:bg-orange-50 hover:text-orange-600 transition">
                                        Desain Logo
                                    </a>
                                </li>
                                <li>
                                    <a href="#packaging-design"
                                    class="block px-5 py-2 hover:bg-orange-50 hover:text-orange-600 transition">
                                        Desain Packaging
                                    </a>
                                </li>
                                <li>
                                    <a href="#branding"
                                    class="block px-5 py-2 hover:bg-orange-50 hover:text-orange-600 transition">
                                        Branding & Identitas
                                    </a>
                                </li>
                                <li>
                                    <a href="#social-media"
                                    class="block px-5 py-2 hover:bg-orange-50 hover:text-orange-600 transition">
                                        Konten Media Sosial
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="/portfolio" class="transition bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600
                                                bg-clip-text hover:text-transparent">
                            Portofolio
                        </a>
                    </li>
                    <li>
                        <a href="/contact-us" class="transition bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600
                                                bg-clip-text hover:text-transparent">
                            Kontak
                        </a>
                    </li>
                </ul>
            </nav>


            <!-- RIGHT: Icons + CTA (desktop) -->
            <div class="hidden md:flex items-center gap-3">
                <a href="#contact"
                class="relative inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-white rounded-xl
                bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600
                shadow-[0_8px_20px_rgba(236,72,153,0.45)]
                transition-all duration-300
                hover:-translate-y-0.5 hover:shadow-[0_12px_28px_rgba(168,85,247,0.55)]
                active:translate-y-0 active:shadow-[0_6px_14px_rgba(0,0,0,0.25)]
                overflow-hidden group">

                    <!-- glossy layer -->
                    <span class="absolute inset-0 bg-white/20 opacity-0 group-hover:opacity-100 transition-opacity"></span>

                    <span class="relative z-10 flex items-center gap-2">
                        Hubungi Kami
                    </span>
                </a>

            </div>

            <!-- MOBILE: Hamburger -->
            <button id="hamburger"
                class="md:hidden inline-flex items-center justify-center p-2 rounded-md hover:bg-white/40 transition">
                <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M4 7h16M4 12h16M4 17h16" />
                </svg>
            </button>

        </div>

        <!-- MOBILE MENU -->
        <div id="mobileMenu" class="hidden md:hidden px-4 pb-4">
            <div class="flex flex-col gap-2 bg-white/60 backdrop-blur-xl rounded-b-2xl border border-white/30 px-4 py-4 shadow-inner">
                <a href="#about" class="py-2 border-b border-gray-100 text-gray-700">Beranda</a>
                <a href="#about" class="py-2 border-b border-gray-100 text-gray-700">Tentang Kami</a>
                <button id="mobileServiceToggle"
                    class="flex items-center justify-between py-2 border-b border-gray-100 text-gray-700 w-full">
                    <span>Layanan</span>
                    <svg id="mobileServiceIcon" class="w-4 h-4 transition-transform"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div id="mobileServiceMenu" class="hidden pl-4 pb-2">
                    <a href="#logo-design" class="block py-2 text-sm text-gray-600">Desain Logo</a>
                    <a href="#packaging-design" class="block py-2 text-sm text-gray-600">Desain Packaging</a>
                    <a href="#branding" class="block py-2 text-sm text-gray-600">Branding & Identitas</a>
                    <a href="#social-media" class="block py-2 text-sm text-gray-600">Konten Media Sosial</a>
                </div>

                <a href="#contact" class="py-2 text-gray-700">Portofolio</a>
                <a href="#contact" class="py-2 text-gray-700">Kontak</a>
                <a href="#contact"
                class="relative mt-3 inline-flex items-center justify-center w-full py-2.5 rounded-xl font-semibold text-white
                bg-gradient-to-r from-orange-500 via-pink-500 to-purple-600
                shadow-[0_6px_16px_rgba(236,72,153,0.45)]
                transition-all duration-300
                active:scale-95 overflow-hidden group">

                    <span class="absolute inset-0 bg-white/20 opacity-0 group-active:opacity-100 transition"></span>
                    <span class="relative z-10">Hubungi Kami</span>
                </a>

            </div>
        </div>

    </div>
</header>
