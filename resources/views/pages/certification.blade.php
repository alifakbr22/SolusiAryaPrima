@extends('layouts.app')

@section('title', 'Legalitas & Sertifikasi - CV Solusi Arya Prima')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content fade-scroll text-center">
            <span class="badge">{{ __('REKAM LEGALITAS') }}</span>
            <h1 class="text-gradient">{{ __('Registrasi & Pusat Verifikasi') }}</h1>
            <p style="max-width: 800px; margin: 0 auto; color: var(--slate-600); font-size: 1.15rem;">{{ __('Standar kualitas internasional dan kerangka kerja hukum yang mengatur keamanan operasional dan presisi layanan kami.') }}</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="bento-grid">
            <!-- ISO 9001 -->
            <div class="bento-card fade-scroll" style="border-top: 4px solid var(--primary);">
                <div style="font-weight: 800; color: var(--primary); margin-bottom: 24px; font-size: 0.8rem;">{{ __('SERTIFIKASI #01') }}</div>
                <div style="width: 50px; height: 50px; background: var(--primary-soft); color: var(--primary); border: 1px solid rgba(238, 46, 36, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 32px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                </div>
                <h4 style="margin-bottom: 16px;">ISO 9001:2015</h4>
                <p style="font-size: 0.9rem; color: var(--slate-600); line-height: 1.8;">{{ __('Standar global untuk Sistem Manajemen Mutu teknis yang memastikan keunggulan operasional.') }}</p>
                <div style="margin-top: 32px; font-size: 0.75rem; color: var(--primary); font-weight: 700;">{{ __('STATUS: TERVERIFIKASI AKTIF') }}</div>
            </div>

            <!-- ISO 27001 -->
            <div class="bento-card fade-scroll" style="border-top: 4px solid var(--primary);">
                <div style="font-weight: 800; color: var(--primary); margin-bottom: 24px; font-size: 0.8rem;">{{ __('SERTIFIKASI #02') }}</div>
                <div style="width: 50px; height: 50px; background: var(--primary-soft); color: var(--primary); border: 1px solid rgba(238, 46, 36, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 32px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                </div>
                <h4 style="margin-bottom: 16px;">ISO 27001:2013</h4>
                <p style="font-size: 0.9rem; color: var(--slate-600); line-height: 1.8;">{{ __('Standar teknis untuk Sistem Manajemen Keamanan Informasi yang memastikan integritas data.') }}</p>
                <div style="margin-top: 32px; font-size: 0.75rem; color: var(--primary); font-weight: 700;">{{ __('STATUS: TERJAMIN AKTIF') }}</div>
            </div>

            <!-- Legal Registry -->
            <div class="bento-card large fade-scroll" style="background: white; border-top: 4px solid var(--primary);">
                <div style="font-weight: 800; color: var(--primary); margin-bottom: 24px; font-size: 0.8rem;">{{ __('REGISTRASI SISTEM') }}</div>
                <h3 style="margin-bottom: 32px;">{{ __('Kepatuhan Institusional') }}</h3>
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
                    @php
                        $legal = [
                            __('NPWP Perusahaan'), __('PKP (Pengusaha Kena Pajak)'), __('SBU Terakreditasi'), __('NIB Terverifikasi'), __('SKPP Kemenkumham'), __('TDP & SIUP')
                        ];
                    @endphp
                    @foreach($legal as $item)
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <div style="width: 8px; height: 8px; background: var(--primary); border-radius: 50%;"></div>
                        <span style="font-size: 0.9rem; color: var(--slate-700); font-weight: 600;">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Operational Scope -->
            <div class="bento-card fade-scroll" style="border: 1px dashed var(--slate-300);">
                <div style="font-weight: 800; color: var(--slate-500); margin-bottom: 24px; font-size: 0.8rem;">{{ __('LINGKUP OPERASIONAL') }}</div>
                <h4 style="margin-bottom: 20px;">{{ __('Izin & Akreditasi') }}</h4>
                <ul style="list-style: none; padding: 0; font-size: 0.9rem; color: var(--slate-600); display: flex; flex-direction: column; gap: 12px;">
                    <li style="display: flex; justify-content: space-between;"><span>{{ __('Perdagangan Teknologi Industri') }}</span> <span style="color: var(--primary); font-weight: 700;">{{ __('AKTIF') }}</span></li>
                    <li style="display: flex; justify-content: space-between;"><span>{{ __('Sewa Infrastruktur TI') }}</span> <span style="color: var(--primary); font-weight: 700;">{{ __('AKTIF') }}</span></li>
                    <li style="display: flex; justify-content: space-between;"><span>{{ __('Perangkat Lunak Digital') }}</span> <span style="color: var(--primary); font-weight: 700;">{{ __('AKTIF') }}</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section" style="padding: 0 24px 80px;">
    <div class="container">
        <div class="bento-card red-box-animated" style="padding: 80px 48px; text-align: center; background: linear-gradient(135deg, var(--primary) 0%, #d32f2f 100%); border: none; border-radius: 40px; color: white;">
            <h3 style="font-size: 2.2rem; margin-bottom: 24px; color: white;">{{ __('Butuh Verifikasi Dokumen?') }}</h3>
            <p style="color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto; margin-bottom: 40px; font-size: 1.1rem;">{{ __('Hubungi tim compliance kami untuk permintaan salinan legalitas atau verifikasi partner institusional.') }}</p>
            <div style="display: flex; gap: 20px; justify-content: center;">
                <a href="{{ route('contact') }}" class="btn btn-solid btn-white" style="background: white; color: var(--primary);">{{ __('Hubungi Compliance') }}</a>
                <a href="{{ route('about') }}#culture" class="btn btn-light-outline">{{ __('Lihat Budaya Kami') }}</a>
            </div>
        </div>
    </div>
</section>
@endsection
