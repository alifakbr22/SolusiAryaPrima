@extends('layouts.app')

@section('title', 'Kantor Cabang - CV Solusi Arya Prima')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content fade-scroll text-center">
            <span class="badge">{{ __('LOKASI KAMI') }}</span>
            <h1 class="text-gradient">{{ __('Jangkauan Layanan Nasional') }}</h1>
            <p style="max-width: 800px; margin: 0 auto; color: var(--slate-600); font-size: 1.15rem;">{{ __('Berpusat di Semarang dengan jaringan kantor cabang dan perwakilan di seluruh penjuru Indonesia.') }}</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title fade-scroll">
            <span class="text-primary" style="font-weight: 600; font-size: 0.9rem; letter-spacing: 2px; text-transform: uppercase;">{{ __('Kantor Pusat & Showroom') }}</span>
            <h2 style="margin-top: 12px;">Semarang</h2>
        </div>

        <div class="bento-grid" style="grid-template-columns: repeat(2, 1fr);">
            <div class="bento-card" style="grid-column: span 1;">
                <div class="icon-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M3 7v1a3 3 0 006 0V7m0 1a3 3 0 006 0V7m0 1a3 3 0 006 0V7M4 21V4a2 2 0 012-2h12a2 2 0 012 2v17M9 21V12h6v9"/></svg>
                </div>
                <h3>{{ __('Kantor Pusat Semarang') }}</h3>
                <p style="opacity: 0.8; margin-top: 16px;">
                    Jalan S. Parman No. 47 B, Semarang 50232<br>
                    Telp: (024) 8508899 / 8505363<br>
                    Fax: (024) 8500599<br>
                    WA: 0821-3763-9224<br>
                    E-mail: solusiaryaprima@premmiere.co.id
                </p>
            </div>
            <div class="bento-card fade-scroll" style="padding: 0; overflow: hidden; height: 350px;">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0!2d110.413294!3d-7.005702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b6fb3bddd77%3A0xb199b012abeed485!2sSolusi%20Arya%20Prima%20(Premmiere%20Store)!5e0!3m2!1sen!2sid!4v1740474600000!5m2!1sen!2sid" 
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <div class="section-title fade-scroll" style="margin-top: 40px;">
            <span class="text-primary" style="font-weight: 600; font-size: 0.9rem; letter-spacing: 2px; text-transform: uppercase;">{{ __('Kantor Cabang Pusat') }}</span>
            <h2 style="margin-top: 12px;">{{ __('Area Operasional') }}</h2>
        </div>

        <div class="bento-grid">
            <!-- Yogyakarta -->
            <div class="bento-card fade-scroll">
                <h4>Yogyakarta</h4>
                <p style="font-size: 0.85rem; color: var(--slate-600); margin-top: 12px;">
                    Jl. Madumurti No. 44, Wirobrajan, Yogyakarta 55182<br>
                    Telp: (0274) 2870231
                </p>
            </div>

            <!-- Bali -->
            <div class="bento-card fade-scroll">
                <h4>Bali - Nusantara</h4>
                <p style="font-size: 0.85rem; color: var(--slate-600); margin-top: 12px;">
                    Jl. Gatot Subroto I/XXIII no 8, Denpasar 80234<br>
                    Telp: 0811-2961-935
                </p>
            </div>

            <!-- Jawa Barat -->
            <div class="bento-card fade-scroll">
                <h4>{{ __('Jawa Barat (Bandung)') }}</h4>
                <p style="font-size: 0.85rem; color: var(--slate-600); margin-top: 12px;">
                    Jl. Kurdi Timur III No. 43, Pelindung Hewan, Kota Bandung 40243<br>
                    Telp: (022) 42826686
                </p>
            </div>

            <!-- DKI Jakarta -->
            <div class="bento-card fade-scroll">
                <h4>DKI Jakarta - Banten</h4>
                <p style="font-size: 0.85rem; color: var(--slate-600); margin-top: 12px;">
                    Ruko Mangga Dua Square, Jl. Mangga Dua Raya Blok E-3, Jakarta Utara 14430<br>
                    Telp: (021) 22685386
                </p>
            </div>

            <!-- Lampung -->
            <div class="bento-card fade-scroll">
                <h4>Lampung - Bengkulu</h4>
                <p style="font-size: 0.85rem; color: var(--slate-600); margin-top: 12px;">
                    Jl. Griya Indah Blok. II/1 No.11 Way Halim Permai, Bandar Lampung 35135<br>
                    Telp: (0721) 5615234
                </p>
            </div>

            <!-- Sumsel -->
            <div class="bento-card fade-scroll">
                <h4>{{ __('Sumsel - Bangka Belitung') }}</h4>
                <p style="font-size: 0.85rem; color: var(--slate-600); margin-top: 12px;">
                    Perumahan Bukit Sejahtera Blok BR-06, Kel. Karang Jaya, Palembang<br>
                    Telp: 0811-2995-038
                </p>
            </div>

            <!-- Jawa Timur -->
            <div class="bento-card fade-scroll">
                <h4>{{ __('Jawa Timur (Surabaya)') }}</h4>
                <p style="font-size: 0.85rem; color: var(--slate-600); margin-top: 12px;">
                    Jl. Mayjen Sungkono, Kompleks Darmo Park 1 Blok 3c/12, Surabaya<br>
                    Telp: (031) 5682030
                </p>
            </div>
        </div>

        <div class="section-title fade-scroll" style="margin-top: 40px;">
            <span class="text-primary" style="font-weight: 600; font-size: 0.9rem; letter-spacing: 2px; text-transform: uppercase;">{{ __('Sales Area Representatives') }}</span>
            <h2 style="margin-top: 12px;">{{ __('Layanan Nasional') }}</h2>
        </div>

        <div class="grid-container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 40px;">
            @if(isset($branches) && $branches->count() > 0)
                @foreach($branches as $branch)
                <div class="bento-card fade-scroll">
                    <h5 style="margin-bottom: 5px;">{{ $branch->name }}</h5>
                    <p style="font-size: 0.8rem; opacity: 0.7;">{{ $branch->phone ?? 'Belum ada nomor' }}</p>
                </div>
                @endforeach
            @else
                <div style="grid-column: 1 / -1; text-align: center; padding: 20px;">
                    <p style="color: var(--slate-600);">{{ __('Belum ada data perwakilan cabang.') }}</p>
                </div>
            @endif
        </div>
    </div>
</section>

<!-- UNIQUE CABANG BOTTOM: Regional Support -->
<section class="section" style="padding: 0 24px 40px;">
    <div class="bento-card red-box-animated" style="padding: 80px 48px; background: linear-gradient(135deg, var(--primary) 0%, #d32f2f 100%); border: none; border-radius: 40px; overflow: hidden; position: relative;">
        <div class="container" style="position: relative; z-index: 2;">
            <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 40px; align-items: center;">
                <div class="fade-scroll" style="color: white;">
                    <span style="color: rgba(255,255,255,0.8); font-weight: 700; letter-spacing: 2px; text-transform: uppercase;">{{ __('DISTRIBUSI NASIONAL') }}</span>
                    <h2 style="font-size: 2.5rem; margin: 16px 0 24px; color: white;">{{ __('Jangkauan Distribusi Nasional') }}</h2>
                    <p style="color: rgba(255,255,255,0.9); line-height: 1.8; margin-bottom: 40px; font-size: 1.1rem;">{{ __('Dengan titik distribusi yang tersebar dari Sumatera hingga Kalimantan, kami menjamin kecepatan pengiriman dan keamanan barang sampai ke lokasi tujuan.') }}</p>
                    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <a href="https://wa.me/6282137639224" target="_blank" class="btn btn-white">{{ __('Hubungi Via WhatsApp') }}</a>
                        <a href="{{ route('contact') }}" class="btn btn-light-outline">{{ __('Kirim Penawaran') }}</a>
                    </div>
                </div>
                <div class="fade-scroll" style="position: relative; text-align: center;">
                    <div class="bento-card" style="display: inline-block; padding: 48px; border-radius: 32px; background: white; border: none;">
                        <div style="font-size: 3.5rem; font-weight: 800; color: var(--primary); margin-bottom: 8px;">500+</div>
                        <div style="font-weight: 700; color: var(--slate-500); letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">{{ __('KOTA TERLAYANI') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
