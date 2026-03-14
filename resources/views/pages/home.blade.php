@extends('layouts.app')

@section('title', 'Solusi Teknologi Masa Depan Perkantoran - CV Solusi Arya Prima')

@section('content')

<style>

    .slider-dot {
        width: 12px !important;
        height: 12px !important;
        background: transparent !important;
        border: 2px solid rgba(255, 255, 255, 0.5) !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        transition: all 0.3s ease;
    }

    .slider-dot::after {
        content: '';
        width: 4px;
        height: 4px;
        background: transparent;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .slider-dot.active {
        background: rgba(255, 255, 255, 0.9) !important;
        border-color: white !important;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1) !important;
    }

    .slider-dot.active::after {
        background: var(--primary) !important;
    }
</style>

<!-- HERO SECTION WITH ULTRA-HD FINAL CUSTOM BACKGROUND -->
<section id="homepageHero" class="hero hero-split" style="{{ isset($siteSettings) && $siteSettings->hero_bg ? "--hero-bg-url: url('" . asset('storage/' . $siteSettings->hero_bg) . "');" : '' }}">
    <div class="container">
        <div class="text-center" style="margin-bottom: 40px;">
            <span class="badge" id="heroBadge">{{ isset($siteSettings) && $siteSettings->hero_badge ? $siteSettings->hero_badge : '#SolusiTeknologiTerpadu' }}</span>
        </div>
        
        <div class="hero-split-content">
            <!-- Static Text Content -->
            <div class="hero-content fade-scroll">
                <h1 class="text-gradient" id="heroTitle">{{ isset($siteSettings) && $siteSettings->hero_title ? $siteSettings->hero_title : __('Solusi Teknologi untuk Masa Depan Perkantoran') }}</h1>
                <p id="heroDesc">{{ isset($siteSettings) && $siteSettings->hero_description ? $siteSettings->hero_description : __('Penyedia peralatan elektronik perkantoran dan IT terpercaya sejak 1988. Mitra pengadaan barang/jasa untuk pemerintah dan swasta.') }}</p>
                <div class="hero-actions">
                    <a href="{{ route('contact') }}" class="btn btn-solid" id="heroBtn1">{{ __('Hubungi Sekarang') }}</a>
                    <a href="{{ route('services') }}" class="btn btn-outline" id="heroBtn2">{{ __('Lihat Produk') }}</a>
                </div>
            </div>

            <!-- Visual Column (Slider + Dots) -->
            <div class="hero-visual-column">
                <div class="hero-slider" id="heroSlider" style="width: 100%;">
                    <!-- Slider Arrows -->
                    <div class="slider-arrow prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
                    </div>
                    <div class="slider-arrow next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                    </div>

                    @forelse($sliders as $index => $slider)
                    <div class="hero-slide {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}">
                        @php
                            $isImage = $slider->image && preg_match('/\.(jpg|jpeg|png|webp|svg|gif)$/i', $slider->image);
                            $sliderLink = $slider->button_link ?? '#';
                        @endphp
                        
                        <a href="{{ $sliderLink }}" class="hero-visual-link" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 5; cursor: pointer; display: block;">
                            <span class="sr-only">{{ $slider->title }}</span>
                        </a>

                        <div class="hero-visual" style="position: relative; z-index: 1; width: 100%; height: 100%;">
                            @if($isImage)
                                <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                            @else
                                <!-- Dynamic Content Layout based on title or description if image is missing -->
                                <div class="dashboard-mockup">
                                    <div class="floating-element element-main" style="background: white;">
                                        <div class="mockup-header">
                                            <div class="mockup-dot" style="background: #ff5f56;"></div>
                                            <div class="mockup-dot" style="background: #ffbd2e;"></div>
                                            <div class="mockup-dot" style="background: #27c93f;"></div>
                                        </div>
                                        <div style="padding: 20px; display: flex; flex-direction: column; justify-content: space-between; height: calc(100% - 30px);">
                                            <div>
                                                <h3 style="margin-bottom: 10px;">{{ $slider->title }}</h3>
                                                <p>{{ $slider->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    @empty
                    <!-- Fallback Slide 1: IT Infrastructure -->
                    <div class="hero-slide active" data-index="0">
                        <div class="hero-visual">
                            <div class="dashboard-mockup">
                                <div class="floating-element element-main" style="background: white;">
                                    <div class="mockup-header">
                                        <div class="mockup-dot" style="background: #ff5f56;"></div>
                                        <div class="mockup-dot" style="background: #ffbd2e;"></div>
                                        <div class="mockup-dot" style="background: #27c93f;"></div>
                                    </div>
                                    <div class="mockup-grid-wrapper" style="gap: 20px;">
                                        <div class="mockup-content-skeleton">
                                            <div class="skeleton-line" style="width: 100%;"></div>
                                            <div class="skeleton-line" style="width: 80%;"></div>
                                            <div class="skeleton-line" style="width: 90%;"></div>
                                        </div>
                                        <div style="background: var(--slate-50); height: 160px; border-radius: 12px; display: flex; align-items: flex-end; gap: 8px; padding: 15px;">
                                            <div style="flex: 1; height: 40%; background: var(--primary); opacity: 0.3; border-radius: 4px;"></div>
                                            <div style="flex: 1; height: 80%; background: var(--primary); opacity: 0.6; border-radius: 4px;"></div>
                                            <div style="flex: 1; height: 60%; background: var(--primary); opacity: 0.4; border-radius: 4px;"></div>
                                            <div style="flex: 1; height: 100%; background: var(--primary); border-radius: 4px;"></div>
                                            <div style="flex: 1; height: 50%; background: var(--primary); opacity: 0.2; border-radius: 4px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>

                <!-- Slider Navigation Dots -->
                <div class="hero-slider-nav">
                    @if($sliders->count() > 0)
                        @foreach($sliders as $index => $slider)
                            <div class="slider-dot {{ $index === 0 ? 'active' : '' }}" data-target="{{ $index }}"></div>
                        @endforeach
                    @else
                        <div class="slider-dot active" data-target="0"></div>
                        <div class="slider-dot" data-target="1"></div>
                        <div class="slider-dot" data-target="2"></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.slider-dot');
    const prevBtn = document.querySelector('.slider-arrow.prev');
    const nextBtn = document.querySelector('.slider-arrow.next');
    let currentSlide = 0;
    let slideInterval;

    function showSlide(index) {
        slides.forEach(s => s.classList.remove('active'));
        dots.forEach(d => d.classList.remove('active'));
        
        slides[index].classList.add('active');
        dots[index].classList.add('active');
        currentSlide = index;
    }

    function nextSlide() {
        let next = (currentSlide + 1) % slides.length;
        showSlide(next);
    }

    function prevSlide() {
        let prev = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prev);
    }

    function startAutoSlide() {
        stopAutoSlide();
        slideInterval = setInterval(nextSlide, 6000);
    }

    function stopAutoSlide() {
        if (slideInterval) clearInterval(slideInterval);
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showSlide(index);
            startAutoSlide();
        });
    });

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            prevSlide();
            startAutoSlide();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
            startAutoSlide();
        });
    }

    // Touch Events for Swipe
    let touchStartX = 0;
    let touchEndX = 0;

    const sliderContainer = document.getElementById('heroSlider');
    
    if (sliderContainer) {
        sliderContainer.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        sliderContainer.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });
    }

    function handleSwipe() {
        const swipeThreshold = 50;
        if (touchEndX < touchStartX - swipeThreshold) {
            nextSlide();
            startAutoSlide();
        }
        if (touchEndX > touchStartX + swipeThreshold) {
            prevSlide();
            startAutoSlide();
        }
    }

    startAutoSlide();
});
</script>

<!-- SOLUTIONS BENTO GRID -->
<section id="solusi" class="section">
    <div class="container">
        <div class="section-title fade-scroll text-center" style="margin-bottom: 30px;">
            <span style="color: var(--primary); font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">{{ __('KEMAMPUAN KAMI') }}</span>
            <h2 class="text-gradient" style="font-size: 2.5rem; margin-top: 10px;">{{ __('Infrastruktur Siap Masa Depan') }}</h2>
        </div>

        <div class="bento-grid" style="gap: 24px;">
            @if(isset($services) && $services->count() > 0)
                @foreach($services as $index => $result)
                    @php
                        $isFeatured = $index === 0;
                        $gridColumn = $isFeatured ? 'grid-column: 1 / -1;' : '';
                        $stagger = 'stagger-' . (($index % 3) + 1);
                        $bgGradient = ($index % 3 === 2) ? 'background: linear-gradient(135deg, var(--primary-soft) 0%, transparent 100%);' : '';
                    @endphp
                    <div class="bento-card fade-scroll {{ $stagger }}" style="{{ $gridColumn }} padding: {{ $isFeatured ? '48px' : '32px' }}; {{ $bgGradient }} display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div class="icon-box" style="margin-bottom: 20px; width: {{ $isFeatured ? '64px' : '48px' }}; height: {{ $isFeatured ? '64px' : '48px' }}; overflow: hidden;">
                                @if($result->image)
                                    <img src="{{ asset('storage/' . $result->image) }}" alt="{{ $result->title }}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                                @elseif($result->icon)
                                    {!! $result->icon !!}
                                @else
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                @endif
                            </div>
                            <h3 style="font-size: {{ $isFeatured ? '2.2rem' : '1.5rem' }}; margin-bottom: 12px;">{{ $result->title }}</h3>
                            <p style="color: var(--slate-600); font-size: {{ $isFeatured ? '1.1rem' : '0.95rem' }}; max-width: {{ $isFeatured ? '600px' : '100%' }};">{{ Str::limit($result->description, 180) }}</p>
                            @if($isFeatured)
                            <div style="display: flex; gap: 12px; margin-top: 32px; flex-wrap: wrap;">
                                <span style="font-size: 0.75rem; padding: 6px 12px; background: var(--slate-50); border: 1px solid var(--slate-100); border-radius: 6px; font-weight: 600;">LAYANAN UNGGULAN</span>
                            </div>
                            @endif
                        </div>
                        @if(!$isFeatured)
                            <a href="{{ route('services') }}" style="color: var(--primary); text-decoration: none; font-size: 0.85rem; font-weight: 700; margin-top: 24px; display: inline-block;">{{ __('LIHAT SEMUA →') }}</a>
                        @endif
                    </div>
                @endforeach
            @else
                 <div class="bento-card" style="grid-column: 1 / -1; text-align: center; padding: 40px;">
                     <p style="color: var(--slate-600);">{{ __('Layanan belum tersedia.') }}</p>
                 </div>
            @endif
        </div>
    </div>
</section>

<!-- STATS SECTION -->
<section class="section">
    <div class="container">
        <div class="bento-card" style="padding: 40px 30px; border-radius: 40px;">
            <div class="stats-grid fade-scroll">
                @forelse($stats as $index => $stat)
                    <div class="stat-item" {!! $index > 0 ? 'style="border-left: 1px solid var(--slate-100);"' : '' !!}>
                        <h4>{{ $stat->value }}</h4>
                        <p>{{ $stat->label }}</p>
                    </div>
                @empty
                    <div class="stat-item">
                        <h4>36+</h4>
                        <p>Tahun Pengalaman</p>
                    </div>
                    <div class="stat-item" style="border-left: 1px solid var(--slate-100);">
                        <h4>ISO</h4>
                        <p>Kualitas Terjamin</p>
                    </div>
                    <div class="stat-item" style="border-left: 1px solid var(--slate-100);">
                        <h4>6</h4>
                        <p>Unit Bisnis</p>
                    </div>
                    <div class="stat-item" style="border-left: 1px solid var(--slate-100);">
                        <h4>LKPP</h4>
                        <p>E-Katalog LKPP</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>

<!-- VISI MISI SECTION -->
<section class="section">
    <div class="container">
        <!-- DESKTOP: 2 kolom (Visi kiri, Misi kanan) -->
        <div class="grid-2-cols responsive-gap align-start visi-misi-desktop">
            <div class="fade-scroll stagger-1" style="max-width: 100%;">
                <span style="color: var(--primary); font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">{{ isset($siteSettings) && $siteSettings->company_name ? strtoupper($siteSettings->company_name) : 'CV SOLUSI ARYA PRIMA' }}</span>
                <h2 class="text-gradient" style="font-size: 2.5rem; margin-top: 12px; margin-bottom: 32px;">Visi & Misi Perusahaan</h2>
                <div class="bento-card" style="padding: 48px; border-left: 4px solid var(--primary);">
                    <h4 style="color: var(--primary); margin-bottom: 20px; font-size: 0.9rem; text-transform: uppercase;">{{ __('VISI KAMI') }}</h4>
                    <p style="font-style: italic; color: var(--slate-700); line-height: 1.8; font-size: 1.2rem;">"{{ isset($siteSettings) && $siteSettings->vision ? $siteSettings->vision : __('Menjadi Pemenang dalam kegiatan pengadaan barang dan jasa sesuai dengan Norma yang berlaku.') }}"</p>
                </div>
            </div>
            <div class="fade-scroll stagger-2">
                <h4 style="margin-bottom: 40px; font-size: 0.9rem; color: var(--slate-50); text-transform: uppercase; letter-spacing: 2px; opacity: 0;">MISI STRATEGIS</h4>
                <ul style="list-style: none; padding: 0;">
                    @php
                        $missions = isset($siteSettings) && $siteSettings->mission 
                            ? array_filter(explode("\n", str_replace("\r", "", $siteSettings->mission)))
                            : [
                                __('Memenuhi kebutuhan pengadaan barang/jasa di bidang solusi Teknologi Informasi'),
                                __('Menyelesaikan kegiatan dengan perhitungan tepat, barang sesuai, mutu terbaik'),
                                __('Menjalin hubungan baik dan berkesinambungan dengan seluruh mitra kerja'),
                                __('Menciptakan lapangan pekerjaan dan mendidik setiap karyawan'),
                                __('Mengembangkan potensi karyawan untuk kesejahteraan yang baik')
                            ];
                    @endphp
                    @foreach($missions as $index => $mission)
                    <li style="margin-bottom: 20px; display: flex; gap: 20px; align-items: flex-start;">
                        <div style="font-weight: 800; color: var(--primary); font-size: 1.1rem; min-width: 30px;">✓</div>
                        <p style="font-size: 1rem; color: var(--slate-600); line-height: 1.5;">{{ trim($mission) }}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- MOBILE: Visi + Misi gabung dalam satu card -->
        <div class="visi-misi-mobile fade-scroll">
            <span style="color: var(--primary); font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">{{ isset($siteSettings) && $siteSettings->company_name ? strtoupper($siteSettings->company_name) : 'CV SOLUSI ARYA PRIMA' }}</span>
            <h2 class="text-gradient" style="font-size: 2.5rem; margin-top: 12px; margin-bottom: 32px;">Visi & Misi Perusahaan</h2>
            <div class="bento-card" style="padding: 28px 22px; border-left: 4px solid var(--primary); background: white;">
                <div style="margin-bottom: 32px;">
                    <h4 style="color: var(--primary); margin-bottom: 16px; font-size: 0.9rem; text-transform: uppercase;">{{ __('VISI KAMI') }}</h4>
                    <p style="font-style: italic; color: var(--slate-700); line-height: 1.8; font-size: 1.05rem;">"{{ isset($siteSettings) && $siteSettings->vision ? $siteSettings->vision : __('Menjadi Pemenang dalam kegiatan pengadaan barang dan jasa sesuai dengan Norma yang berlaku.') }}"</p>
                </div>
                <div>
                    <h4 style="color: var(--primary); margin-bottom: 16px; font-size: 0.9rem; text-transform: uppercase;">{{ __('MISI KAMI') }}</h4>
                    <ul style="list-style: none; padding: 0; font-size: 0.95rem; color: var(--slate-600); display: flex; flex-direction: column; gap: 14px;">
                        @foreach($missions as $mission)
                        <li style="display: flex; gap: 12px;"><span style="color: var(--primary); font-weight: 800;">✓</span> {{ trim($mission) }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS SECTION -->
<section class="section">
    <div class="container">
        <div class="section-title fade-scroll text-center" style="margin-bottom: 30px;">
            <span style="color: var(--primary); font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">{{ __('KEPERCAYAAN & FEEDBACK') }}</span>
            <h2 class="text-gradient" style="font-size: 2.5rem; margin-top: 10px;">{{ __('Cerita Sukses Klien') }}</h2>
        </div>

        <div class="bento-grid grid-2-cols" style="gap: 24px;">
            @forelse($testimonials as $index => $testimonial)
                <div class="bento-card fade-scroll" style="padding: 40px;">
                    <div style="color: var(--primary); font-weight: 800; font-size: 1.2rem; margin-bottom: 24px;">
                        {{ __('TESTIMONI') }} #{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </div>
                    <p style="font-style: italic; color: var(--slate-600); line-height: 1.8; font-size: 1.1rem; margin-bottom: 32px;">
                        "{{ $testimonial->content }}"
                    </p>
                    <div>
                        <h5 style="margin: 0;">{{ $testimonial->client_name }}</h5>
                        @if($testimonial->client_sector)
                            <small style="color: var(--primary); font-weight: 700;">{{ strtoupper($testimonial->client_sector) }}</small>
                        @endif
                    </div>
                </div>
            @empty
                <div class="bento-card fade-scroll" style="padding: 40px;">
                    <div style="color: var(--primary); font-weight: 800; font-size: 1.2rem; margin-bottom: 24px;">{{ __('TESTIMONI #01') }}</div>
                    <p style="font-style: italic; color: var(--slate-600); line-height: 1.8; font-size: 1.1rem; margin-bottom: 32px;">"{{ __('CV Solusi Arya Prima memberikan layanan profesional tingkat tinggi. Solusi infrastrukturnya diterapkan dengan presisi dan ketepatan waktu yang luar biasa.') }}"</p>
                    <div>
                        <h5 style="margin: 0;">{{ __('Badan KOMINFO Jawa Tengah') }}</h5>
                        <small style="color: var(--primary); font-weight: 700;">{{ __('SEKTOR PEMERINTAH') }}</small>
                    </div>
                </div>
                <div class="bento-card fade-scroll" style="padding: 40px;">
                    <div style="color: var(--primary); font-weight: 800; font-size: 1.2rem; margin-bottom: 24px;">{{ __('TESTIMONI #02') }}</div>
                    <p style="font-style: italic; color: var(--slate-600); line-height: 1.8; font-size: 1.1rem; margin-bottom: 32px;">"{{ __('Kolaborasi yang luar biasa dalam pengadaan TI untuk infrastruktur kampus kami. Responsif, teknis, dan sangat andal.') }}"</p>
                    <div>
                        <h5 style="margin: 0;">{{ __('Universitas Diponegoro') }}</h5>
                        <small style="color: var(--primary); font-weight: 700;">{{ __('SEKTOR PENDIDIKAN') }}</small>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- LEGAL & ACCREDITATION SECTION -->
<section class="section">
    <div class="container">
        <div class="responsive-grid-200">
            <div class="bento-card fade-scroll stagger-1" style="padding: 32px; text-align: center;">
                <h3 style="color: var(--primary); font-size: 1.5rem; margin-bottom: 8px;">ISO 9001:2015</h3>
                <p style="font-size: 0.75rem; color: var(--slate-500); text-transform: uppercase; font-weight: 700;">{{ __('Manajemen Mutu') }}</p>
            </div>
            <div class="bento-card fade-scroll stagger-2" style="padding: 32px; text-align: center;">
                <h3 style="color: var(--primary); font-size: 1.5rem; margin-bottom: 8px;">ISO 27001:2013</h3>
                <p style="font-size: 0.75rem; color: var(--slate-500); text-transform: uppercase; font-weight: 700;">{{ __('Keamanan Informasi') }}</p>
            </div>
            <div class="bento-card fade-scroll stagger-3" style="padding: 32px; text-align: center;">
                <h3 style="font-size: 1.25rem; margin-bottom: 8px;">NPWP & PKP</h3>
                <p style="font-size: 0.75rem; color: var(--slate-500); text-transform: uppercase; font-weight: 700;">{{ __('Kepatuhan Pajak') }}</p>
            </div>
            <div class="bento-card fade-scroll stagger-4" style="padding: 32px; text-align: center;">
                <h3 style="font-size: 1.25rem; margin-bottom: 8px;">NIB & SIUP</h3>
                <p style="font-size: 0.75rem; color: var(--slate-500); text-transform: uppercase; font-weight: 700;">{{ __('Akreditasi Dagang') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- COLLABORATION STAGES -->
<section class="section">
    <div class="container">
        <div class="section-title fade-scroll text-center" style="margin-bottom: 30px;">
            <span style="color: var(--primary); font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">{{ __('TAHAPAN KERJA') }}</span>
            <h2 class="text-gradient" style="font-size: 2.5rem; margin-top: 10px;">{{ __('Proses Kolaborasi Strategis') }}</h2>
        </div>

        <div class="responsive-grid-240">
            @php
                $steps = [
                    ['title' => __('Audit Teknis'), 'desc' => __('Analisis mendalam terhadap infrastruktur TI yang ada dan kebutuhan spesifik bisnis.')],
                    ['title' => __('Desain Solusi'), 'desc' => __('Perancangan cetak biru integrasi perangkat keras dan lunak yang dioptimalkan.')],
                    ['title' => __('Implementasi'), 'desc' => __('Pemasangan dan konfigurasi profesional oleh tim ahli teknis bersertifikat.')],
                    ['title' => __('Optimasi'), 'desc' => __('Pemantauan dan pemeliharaan berkelanjutan untuk memastikan kinerja operasional puncak.')]
                ];
            @endphp
            @foreach($steps as $index => $step)
            <div class="bento-card fade-scroll" style="padding: 40px 32px; text-align: center;">
                <div style="width: 50px; height: 50px; background: var(--primary-soft); color: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; font-weight: 800; margin: 0 auto 24px; border: 1px solid rgba(238, 46, 36, 0.1);">
                    0{{ $index + 1 }}
                </div>
                <h4 style="margin-bottom: 16px;">{{ $step['title'] }}</h4>
                <p style="font-size: 0.9rem; color: var(--slate-600); line-height: 1.6;">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- NEWS SECTION -->
<section class="section">
    <div class="container">
        <div class="section-title fade-scroll text-center" style="margin-bottom: 30px;">
            <span style="color: var(--primary); font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">{{ __('HUBUNGAN & INFORMASI') }}</span>
            <h2 class="text-gradient" style="font-size: 2.5rem; margin-top: 10px;">{{ __('Berita Terbaru') }}</h2>
        </div>

        <div class="bento-grid news-grid">
            @forelse($news as $item)
                <div class="bento-card fade-scroll" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="height: 200px; position: relative;">
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                        @else
                            <div style="width: 100%; height: 100%; background: var(--slate-100); display: flex; align-items: center; justify-content: center; color: var(--slate-400);">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 21v-2a4 4 0 00-4-4H9a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </div>
                        @endif
                        <div style="position: absolute; top: 15px; right: 15px;">
                             <span style="background: rgba(255,255,255,0.9); padding: 5px 12px; border-radius: 20px; font-size: 0.7rem; font-weight: 700; color: var(--primary);">{{ $item->published_at ? $item->published_at->format('d M Y') : $item->created_at->format('d M Y') }}</span>
                        </div>
                    </div>
                    <div style="padding: 24px;">
                        <h4 style="margin-bottom: 12px; line-height: 1.4;">{{ Str::limit($item->title, 60) }}</h4>
                        <p style="font-size: 0.85rem; color: var(--slate-600); margin-bottom: 20px;">{{ Str::limit(strip_tags($item->content), 100) }}</p>
                        <a href="{{ route('news.show', $item->slug) }}" style="color: var(--primary); text-decoration: none; font-size: 0.8rem; font-weight: 700; display: flex; align-items: center; gap: 5px;">
                            {{ __('BACA SELENGKAPNYA') }}
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            @empty
                <div class="bento-card" style="grid-column: 1 / -1; text-align: center; padding: 40px;">
                    <p style="color: var(--slate-600);">{{ __('Belum ada berita terbaru.') }}</p>
                </div>
            @endforelse
        </div>

        <div class="text-center" style="margin-top: 40px;">
            <a href="{{ route('news.index') }}" class="btn btn-outline">{{ __('Lihat Semua Berita') }}</a>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="section" style="padding: 0 24px 40px;">
    <div class="bento-card red-box-animated" style="padding: 60px 40px; text-align: center; background: linear-gradient(135deg, var(--primary) 0%, #d32f2f 100%); border: none; border-radius: 40px; overflow: hidden; position: relative;">
        <div class="container" style="position: relative; z-index: 2;">
            <div class="hero-content text-center fade-scroll">
                <h2 style="font-size: clamp(2rem, 5vw, 3.5rem); line-height: 1.1; margin-bottom: 24px; color: white;">{{ __('Tingkatkan Kapabilitas Industri Anda') }}</h2>
                <p style="color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto; font-size: 1.15rem;">{{ __('Bermitra dengan pelopor industri sejak 1988 untuk infrastruktur teknologi tingkat profesional.') }}</p>
                <div class="hero-actions" style="margin-top: 48px; display: flex; gap: 20px; justify-content: center;">
                    <a href="{{ route('contact') }}" class="btn btn-white">{{ __('Hubungi Sekarang') }}</a>
                    <a href="https://premmiere.co.id/" target="_blank" class="btn btn-light-outline">{{ __('Jelajahi Katalog Produk') }}</a>
                </div>
            </div>
        </div>
        <!-- Decorative Circles -->
        <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: rgba(255,255,255,0.1); filter: blur(40px); border-radius: 50%;"></div>
        <div style="position: absolute; bottom: -50px; left: -50px; width: 200px; height: 200px; background: rgba(255,255,255,0.1); filter: blur(40px); border-radius: 50%;"></div>
    </div>
</section>

@endsection
