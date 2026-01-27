import AOS from 'aos';
import 'aos/dist/aos.css';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

AOS.init({
    duration: 1000,
    once: true,
    offset: 200,
});

(function(){
    const btn = document.getElementById('hamburger');
    const mobile = document.getElementById('mobileMenu');

    if (btn) {
    btn.addEventListener('click', () => {
        mobile.classList.toggle('hidden');
    });
    }

    // Optional: close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
    if (!btn.contains(e.target) && !mobile.contains(e.target)) {
        if (!mobile.classList.contains('hidden')) mobile.classList.add('hidden');
    }
    });
})();

//counter
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    const startCounting = (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = +el.getAttribute("data-target");
                const duration = 1500;
                const frame = 60;
                let current = 0;
                const increment = target / (duration / frame);

                const update = () => {
                    current += increment;
                    if (current < target) {
                        el.textContent = Math.floor(current);
                        requestAnimationFrame(update);
                    } else {
                        el.textContent = target.toLocaleString();
                    }
                };

                update();
                observer.unobserve(el);
            }
        });
    };

    const observer = new IntersectionObserver(startCounting, { threshold: 0.3 });
    counters.forEach(counter => observer.observe(counter));
});

document.addEventListener("DOMContentLoaded", function () {
    const video = document.getElementById("about-video");
    const player = new YT.Player(video, {
        events: {
            onReady: function (event) {
                const observer = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                event.target.playVideo();
                            }
                        });
                    },
                    { threshold: 0.5 }
                );
                observer.observe(document.getElementById("about"));
            }
        }
    });
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute("href"));
        const headerOffset = 80; // sesuaikan tinggi header
        const elementPosition = target.offsetTop;
        const offsetPosition = elementPosition - headerOffset;

        window.scrollTo({
            top: offsetPosition,
            behavior: "smooth"
        });
    });
});

 window.addEventListener('load', () => {
    const loader = document.getElementById('page-loader');

    setTimeout(() => {
        loader.classList.add('opacity-0', 'scale-95');

        setTimeout(() => {
            loader.style.display = 'none';
        }, 600);

    }, 600); // durasi minimum loading
});

document.addEventListener('DOMContentLoaded', () => {
    const serviceToggle = document.getElementById('mobileServiceToggle');
    const serviceMenu = document.getElementById('mobileServiceMenu');
    const serviceIcon = document.getElementById('mobileServiceIcon');

    if (!serviceToggle || !serviceMenu) return;

    serviceToggle.addEventListener('click', (e) => {
        e.stopPropagation(); // penting!
        serviceMenu.classList.toggle('hidden');
        serviceIcon.classList.toggle('rotate-180');
    });
});

// Portfolio Gallery Modal
const modal = document.getElementById('portfolioModal');
const container = document.getElementById('portfolioImages');

window.openPortfolio = function (images) {
    if (!modal || !container) return;

    container.innerHTML = '';

    images.forEach(img => {
        container.innerHTML += `
            <img src="${img}"
                class="w-full rounded-2xl shadow-lg hover:scale-105 transition duration-300 cursor-pointer"
                loading="lazy">
        `;
    });

    modal.classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
};

window.closePortfolio = function () {
    if (!modal) return;

    modal.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
};

// Close on background click
modal?.addEventListener('click', function (e) {
    if (e.target === modal) window.closePortfolio();
});

// Close on ESC
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') window.closePortfolio();
});


// Close on background click
modal.addEventListener('click', function (e) {
    if (e.target === modal) window.closePortfolio();
});

// Close on ESC
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') window.closePortfolio();
});


