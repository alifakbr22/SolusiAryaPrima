@extends('layouts.app')

@section('title', 'Portfolio & Pengalaman - CV Solusi Arya Prima')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content fade-scroll text-center">
            <span class="badge">{{ __('REKAM JEJAK PROYEK') }}</span>
            <h1 class="text-gradient">{{ __('Portofolio Klien') }}</h1>
            <p style="max-width: 800px; margin: 0 auto; color: var(--slate-600); font-size: 1.15rem;">{{ __('Catatan komprehensif penerapan teknologi industri tingkat tinggi dan kemitraan lintas sektor sejak 1988.') }}</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title fade-scroll" style="margin-bottom: 60px;">
            <span style="color: var(--primary); font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">{{ __('KLIEN UTAMA') }}</span>
            <h2 class="text-gradient" style="font-size: 2.5rem; margin-top: 10px;">{{ __('Mitra Institusional') }}</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px;">
            @php
                $clients = [
                    ['name' => __('KOMINFO Jawa Tengah'), 'task' => __('Pengadaan Infrastruktur IT Data Center')],
                    ['name' => __('Universitas Diponegoro'), 'task' => __('Sistem IT & Komputasi Berkinerja Tinggi')],
                    ['name' => __('RSUD Prof. Dr. Margono Soekarjo'), 'task' => __('Penerapan Sistem IT Medis - Paket I')],
                    ['name' => __('Kementerian Hukum & HAM'), 'task' => __('Arsitektur National Command Center')],
                    ['name' => __('BKD Provinsi Jawa Tengah'), 'task' => __('Infrastruktur Jaringan untuk CPNS Nasional 2020')],
                    ['name' => __('Balai Konservasi Borobudur'), 'task' => __('Surveilans Terintegrasi & Multimedia Lanjutan')]
                ];
            @endphp
            @foreach($clients as $index => $client)
            <div class="bento-card fade-scroll stagger-{{ ($index % 3) + 1 }}" style="padding: 32px; border-left: 4px solid var(--primary);">
                <div style="font-weight: 800; color: var(--primary); margin-bottom: 16px; font-size: 0.8rem;">{{ __('PROYEK #0') }}{{ $index + 1 }}</div>
                <h4 style="margin-bottom: 12px; font-size: 1.15rem;">{{ $client['name'] }}</h4>
                <p style="font-size: 0.9rem; color: var(--slate-600); line-height: 1.6;">{{ $client['task'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="section-title fade-scroll" style="margin-top: 100px; margin-bottom: 60px;">
            <span style="color: var(--primary); font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">{{ __('VALIDASI SISTEM') }}</span>
            <h2 class="text-gradient" style="font-size: 2.5rem; margin-top: 10px;">{{ __('Testimoni Mitra') }}</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 32px;">
            <div class="bento-card fade-scroll" style="padding: 48px; position: relative; background: white; border-top: 4px solid var(--primary);">
                <div style="font-size: 4rem; position: absolute; top: 20px; right: 40px; color: var(--primary); opacity: 0.1;">"</div>
                <p style="font-style: italic; color: var(--slate-700); font-size: 1.15rem; line-height: 1.8; margin-bottom: 32px;">
                    "{{ __('Solusi Arya Prima memberikan layanan profesional tingkat tinggi. Infrastruktur teknis yang disediakan sangat sesuai dengan kebutuhan operasional kami yang ketat.') }}"
                </p>
                <div style="display: flex; align-items: center; gap: 20px;">
                    <div style="width: 44px; height: 44px; background: var(--primary-soft); border: 1px solid rgba(238, 46, 36, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--primary); font-weight: 800;">KJ</div>
                    <div>
                        <h5 style="margin-bottom: 4px;">{{ __('Direktur KOMINFO Jateng') }}</h5>
                        <p style="font-size: 0.75rem; color: var(--primary); font-weight: 700; text-transform: uppercase;">{{ __('SEKTOR PEMERINTAH') }}</p>
                    </div>
                </div>
            </div>

            <div class="bento-card fade-scroll" style="padding: 48px; border-top: 4px solid var(--primary); background: white; position: relative;">
                <div style="font-size: 4rem; position: absolute; top: 20px; right: 40px; color: var(--primary); opacity: 0.1;">"</div>
                <p style="font-style: italic; color: var(--slate-700); font-size: 1.15rem; line-height: 1.8; margin-bottom: 32px;">
                    "{{ __('Kolaborasi luar biasa untuk penerapan IT di kampus kami. Mereka sangat responsif dan fokus pada rekayasa solusi yang stabil dan inovatif.') }}"
                </p>
                <div style="display: flex; align-items: center; gap: 20px;">
                    <div style="width: 44px; height: 44px; background: var(--primary-soft); border: 1px solid rgba(238, 46, 36, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--primary); font-weight: 800;">UD</div>
                    <div>
                        <h5 style="margin-bottom: 4px;">{{ __('Rektor Universitas Diponegoro') }}</h5>
                        <p style="font-size: 0.75rem; color: var(--primary); font-weight: 700; text-transform: uppercase;">{{ __('SEKTOR PENDIDIKAN') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- IMPACT STATISTICS -->
<section class="section">
    <div class="container">
        <div class="bento-card" style="padding: 80px 48px; border-radius: 40px; overflow: hidden; position: relative;">
            <div class="section-title fade-scroll text-center" style="margin-bottom: 60px;">
                <span style="color: var(--primary); font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">{{ __('DAMPAK SISTEM') }}</span>
                <h2 class="text-gradient" style="font-size: 2.5rem; margin-top: 10px;">{{ __('Metrik Operasional') }}</h2>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 32px;">
                @php
                    $stats = [
                        ['val' => '1.2jt+', 'label' => __('Unit Didistribusikan')],
                        ['val' => '500+', 'label' => __('Institusi Aktif')],
                        ['val' => '36', 'label' => __('Tahun Beroperasi')],
                        ['val' => '100%', 'label' => __('Tingkat Kepatuhan')]
                    ];
                @endphp
                @foreach($stats as $s)
                <div class="text-center">
                    <div style="font-size: 3rem; font-weight: 800; color: var(--slate-800); margin-bottom: 12px;">{{ $s['val'] }}</div>
                    <p style="font-size: 0.8rem; color: var(--primary); font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">{{ $s['label'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- FINAL CTA -->
<section class="section" style="padding-bottom: 100px;">
    <div class="container">
        <div class="bento-card red-box-animated" style="padding: 100px 40px; text-align: center; background: linear-gradient(135deg, var(--primary) 0%, #d32f2f 100%); border: none;">
            <h2 style="font-size: 2.5rem; margin-bottom: 24px; color: white;">{{ __('Inisialisasi Implementasi Anda') }}</h2>
            <p style="color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto; margin-bottom: 48px; font-size: 1.1rem;">{{ __('Merekayasa solusi teknologi berdedikasi untuk kesuksesan organisasi Anda sejak 1988.') }}</p>
            <a href="{{ route('contact') }}" class="btn btn-white">{{ __('Mulai Konsultasi') }}</a>
        </div>
    </div>
</section>
@endsection
