@extends('layouts.app')

@section('title', 'Layanan & Produk - CV Solusi Arya Prima')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content fade-scroll text-center">
            <span class="badge">{{ __('PRODUK & LAYANAN') }}</span>
            <h1 class="text-gradient">{{ __('Solusi Teknologi untuk Masa Depan Perkantoran') }}</h1>
            <p style="max-width: 800px; margin: 0 auto; color: var(--slate-600); font-size: 1.15rem;">{{ __('Berbagai solusi IT dan elektronik perkantoran untuk kebutuhan Anda.') }}</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="bento-grid">
            @if(isset($services) && $services->count() > 0)
                @foreach($services as $p)
                <div class="bento-card fade-scroll" id="service-{{ $p->id }}">
                    <div style="width: 50px; height: 50px; background: var(--primary-soft); color: var(--primary); border: 1px solid rgba(238, 46, 36, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 32px; overflow: hidden;">
                        @if($p->image)
                            <img src="{{ asset('storage/' . $p->image) }}" alt="{{ $p->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                        @elseif($p->icon)
                            {!! $p->icon !!}
                        @else
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        @endif
                    </div>
                    <h3 style="margin-bottom: 16px;">{{ $p->title }}</h3>
                    <p style="color: var(--slate-600); font-size: 0.95rem; line-height: 1.6;">{{ $p->description }}</p>
                    <div style="margin-top: 32px; font-size: 0.75rem; color: var(--primary); font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">{{ __('KATEGORI: PRODUK UNGGULAN') }}</div>
                </div>
                @endforeach
            @else
                <div style="grid-column: 1 / -1; text-align: center; padding: 40px;">
                    <p style="color: var(--slate-600);">{{ __('Belum ada layanan / produk yang ditambahkan.') }}</p>
                </div>
                </div>
            @endif
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title fade-scroll text-center" style="margin-bottom: 80px;">
            <span style="color: var(--primary); font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">{{ __('SALURAN PENGADAAN') }}</span>
            <h2 class="text-gradient" style="font-size: 2.5rem; margin-top: 12px;">{{ __('Pusat Akuisisi Strategis') }}</h2>
            <p style="color: var(--slate-600); max-width: 600px; margin: 24px auto 0; text-align: center;">{{ __('Saluran pengadaan digital legal dan transparan yang terintegrasi dengan standar tata kelola nasional.') }}</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px;">
            <div class="bento-card fade-scroll" style="border-top: 4px solid var(--primary);">
                <div style="font-weight: 800; color: var(--primary); margin-bottom: 24px; font-size: 0.8rem;">{{ __('E-KATALOG') }}</div>
                <h4 style="margin-bottom: 16px;">{{ __('LKPP V.6') }}</h4>
                <p style="font-size: 0.9rem; color: var(--slate-600); line-height: 1.8; margin-bottom: 32px;">{{ __('Portal pengadaan resmi pemerintah untuk akuisisi langsung dan audit teknis yang transparan.') }}</p>
                <a href="https://e-katalog.lkpp.go.id/" target="_blank" class="btn btn-solid" style="width: 100%;">{{ __('Akses Portal') }}</a>
            </div>

            <div class="bento-card fade-scroll" style="border-top: 4px solid var(--primary);">
                <div style="font-weight: 800; color: var(--primary); margin-bottom: 24px; font-size: 0.8rem;">{{ __('MARKETPLACE') }}</div>
                <h4 style="margin-bottom: 16px;">{{ __('Mbiz & Bela Pengadaan') }}</h4>
                <p style="font-size: 0.9rem; color: var(--slate-600); line-height: 1.8; margin-bottom: 32px;">{{ __('Ekosistem marketplace digital untuk pengadaan yang gesit and integrasi transaksi yang mulus.') }}</p>
                <a href="https://www.mbizmarket.co.id/" target="_blank" class="btn btn-solid" style="width: 100%;">{{ __('Akses Hub') }}</a>
            </div>

            <div class="bento-card fade-scroll" style="border-top: 4px solid var(--primary);">
                <div style="font-weight: 800; color: var(--primary); margin-bottom: 24px; font-size: 0.8rem;">{{ __('SUPPORT') }}</div>
                <h4 style="margin-bottom: 16px;">{{ __('Konsultasi Produk') }}</h4>
                <p style="font-size: 0.9rem; color: var(--slate-600); line-height: 1.8; margin-bottom: 32px;">{{ __('Layanan konsultasi langsung untuk spesifikasi perangkat khusus and kebutuhan kustom.') }}</p>
                <a href="{{ route('contact') }}" class="btn btn-solid" style="width: 100%;">{{ __('Hubungi Kami') }}</a>
            </div>
        </div>
    </div>
</section>

<section class="section" style="padding-bottom: 100px;">
    <div class="container">
        <div class="bento-card red-box-animated" style="padding: 80px 40px; text-align: center; background: linear-gradient(135deg, var(--primary) 0%, #d32f2f 100%); border: none; color: white;">
            <h2 style="font-size: 2.5rem; margin-bottom: 24px; color: white;">{{ __('Katalog Produk Lengkap') }}</h2>
            <p style="color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto; margin-bottom: 40px;">{{ __('Temukan ribuan item IT dan elektronik perkantoran lainnya melalui portal katalog produk resmi kami.') }}</p>
            <a href="https://premmiere.co.id/" target="_blank" class="btn btn-solid btn-white">{{ __('Lihat Semua Produk') }}</a>
        </div>
    </div>
</section>
@endsection
