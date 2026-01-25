<div id="page-loader"
        class="fixed inset-0 z-[9999] flex items-center justify-center bg-white transition-all duration-700">

        <div class="flex flex-col items-center gap-6">

            <!-- LOGO -->
            <img src="{{ asset('assets/website/img/logo.webp') }}"
                alt="Logo"
                class="w-32 md:w-40 animate-pulse">

            <!-- LOADING BAR -->
            <div class="w-48 h-1 bg-gray-200 rounded-full overflow-hidden">
                <div class="h-full bg-orange-600 animate-loading-bar"></div>
            </div>

        </div>
    </div>
