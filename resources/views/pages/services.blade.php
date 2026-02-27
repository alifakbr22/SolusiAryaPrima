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
            @php
                $products = [
                    [
                        'id' => 'komputer',
                        'title' => __('Komputer & Server'),
                        'desc' => __('Berbagai jenis komputer dengan spesifikasi sesuai kebutuhan. Premmiere.co.id menghadirkan berbagai jenis Server dan Storage Option, Server Data Storage, Rack System & Aksesoris.'),
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>'
                    ],
                    [
                        'id' => 'supplies',
                        'title' => __('Supplies & Consumables'),
                        'desc' => __('Consumables untuk berbagai perangkat kantor. Berbagai jenis consumables printer, scanner, mesin fax, fotocopy, duplicator, dan mesin ketik.'),
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>'
                    ],
                    [
                        'id' => 'recording',
                        'title' => __('Alat Perekam & CCTV'),
                        'desc' => __('Perangkat untuk keperluan dokumentasi dan keamanan. Lensa kamera, Tripod, Drone, CCTV, Kamera Digital, Aksesoris, Lighting, Voice Recorder, Camcorder.'),
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>'
                    ],
                    [
                        'id' => 'software',
                        'title' => __('Perangkat Lunak (Software)'),
                        'desc' => __('Lisensi software untuk berbagai kebutuhan: Software Developer, Data Analysis, Network Licensing, Design & Multimedia, serta Security & Antivirus.'),
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>'
                    ],
                    [
                        'id' => 'office',
                        'title' => __('Perlengkapan Kantor'),
                        'desc' => __('Peralatan lengkap untuk produktivitas: Projector, Mesin Fax & Ketik, Mesin Absensi & Access Control, serta Papan Tulis Interaktif.'),
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="4"/><line x1="8" y1="2" x2="8" y2="4"/><line x1="3" y1="10" x2="21" y2="10"/></svg>'
                    ],
                    [
                        'id' => 'komunikasi',
                        'title' => __('Alat Komunikasi'),
                        'desc' => __('Perangkat komunikasi modern: PABX & Teleconference, IP Phone, Smartphone Bisnis, serta Radio Device & Repeater.'),
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>'
                    ],
                    [
                        'id' => 'meubelair',
                        'title' => __('Meubelair & Smart Class'),
                        'desc' => __('Furniture kantor (kursi, lemari, meja) dan sistem Smart Class: kombinasi pembelajaran online/offline interaktif.'),
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v19M5 8h14M15 15h2a2 2 0 012 2v2M5 19v-2a2 2 0 012-2h2"/></svg>'
                    ],
                    [
                        'id' => 'interior',
                        'title' => __('Desain Interior & Persewaan'),
                        'desc' => __('Pelayanan Dekorasi Interior hunian/non-hunian dan jasa Persewaan Laptop dengan spesifikasi sesuai kebutuhan.'),
                        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>'
                    ]
                ];
            @endphp
            @foreach($products as $p)
            <div class="bento-card fade-scroll" id="{{ $p['id'] }}">
                <div style="width: 50px; height: 50px; background: var(--primary-soft); color: var(--primary); border: 1px solid rgba(238, 46, 36, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 32px;">
                    {!! $p['icon'] !!}
                </div>
                <h3 style="margin-bottom: 16px;">{{ $p['title'] }}</h3>
                <p style="color: var(--slate-600); font-size: 0.95rem; line-height: 1.6;">{{ $p['desc'] }}</p>
                <div style="margin-top: 32px; font-size: 0.75rem; color: var(--primary); font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">{{ __('KATEGORI: PRODUK UNGGULAN') }}</div>
            </div>
            @endforeach
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
