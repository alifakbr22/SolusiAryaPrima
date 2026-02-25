<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', App::getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CV Solusi Arya Prima - Solusi Pengadaan IT & Perkantoran')</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="CV Solusi Arya Prima - Penyedia solusi teknologi informasi, komputer, meubelair, dan peralatan kantor terpercaya sejak 1988 di Semarang dan seluruh Indonesia.">
    <meta name="keywords" content="Solusi Arya Prima, Pengadaan IT, Komputer Semarang, E-Katalog LKPP, Meubelair Kantor, Software Digitalisasi">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    @stack('styles')
</head>
<body class="bg-light-gradient">
    @include('partials.navbar')

    <main style="position: relative; z-index: 1;">
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Scripts -->
    <script>
        // Global Fade-in on Scroll + Bento Reveal
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal');
                        entry.target.classList.add('show'); // Legacy support
                    }
                });
            }, observerOptions);

            const animatableElements = document.querySelectorAll('.bento-card, .news-card, .fade-scroll, .section-title');
            animatableElements.forEach((el, index) => {
                // Determine animation delay
                const delay = (index % 3) * 0.1;
                el.style.transitionDelay = `${delay}s`;
                observer.observe(el);
            });

            // Smart Navbar: Hide on scroll down, show on scroll up
            const nav = document.querySelector('.navbar');
            let lastScrollY = window.scrollY;

            window.addEventListener('scroll', () => {
                const currentScrollY = window.scrollY;

                // Add background on scroll
                if (currentScrollY > 50) {
                    nav.classList.add('scrolled');
                } else {
                    nav.classList.remove('scrolled');
                }

                // Hide/Show logic
                if (currentScrollY > lastScrollY && currentScrollY > 100) {
                    // Scrolling down
                    nav.classList.add('navbar--hidden');
                } else {
                    // Scrolling up
                    nav.classList.remove('navbar--hidden');
                }

                lastScrollY = currentScrollY;
            });

            // Mobile Menu Toggle
            const menuToggle = document.getElementById('menuToggle');
            const navMenu = document.getElementById('navMenu');
            if (menuToggle && navMenu) {
                menuToggle.addEventListener('click', () => {
                    navMenu.classList.toggle('active');
                });
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
