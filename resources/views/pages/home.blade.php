@extends('layouts.app')

@section('title', 'Solusi Teknologi Masa Depan Perkantoran - CV Solusi Arya Prima')

@section('content')

<!-- HERO SECTION -->
<section class="hero">
    <div class="container">
        <div class="hero-content fade-scroll">
            <span class="badge">#SolusiTeknologiTerpadu</span>
            <h1 class="text-gradient">{{ __('Solusi Teknologi untuk Masa Depan Perkantoran') }}</h1>
            <p>{{ __('Penyedia peralatan elektronik perkantoran dan IT terpercaya sejak 1988. Mitra pengadaan barang/jasa untuk pemerintah dan swasta.') }}</p>
            <div class="hero-actions">
                <a href="{{ route('contact') }}" class="btn btn-solid">{{ __('Hubungi Sekarang') }}</a>
                <a href="{{ route('services') }}" class="btn btn-outline">{{ __('Lihat Produk') }}</a>
            </div>
        </div>

        <div class="hero-visual fade-scroll" style="margin-top: 30px;">
            <div class="glass-card" style="padding: 2px; border-radius: 32px; background: linear-gradient(135deg, var(--primary), #ff6b6b);">
                <div style="background: var(--white); border-radius: 30px; overflow: hidden; height: 500px; position: relative;">
                    <div style="position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; opacity: 0.03; font-family: var(--font-heading); font-size: 10rem; font-weight: 800; pointer-events: none;">
                        SAP
                    </div>
                    <!-- Dashboard Mockup (Light Theme) -->
                    <div style="position: relative; z-index: 2; padding: 40px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
                        <div class="glass-card" style="height: 120px; padding: 20px; border-radius: 16px; background: white; border: 1px solid var(--slate-100);">
                            <div style="width: 30px; height: 4px; background: var(--primary); border-radius: 2px; margin-bottom: 12px;"></div>
                            <div style="width: 80%; height: 8px; background: var(--slate-100); border-radius: 4px; margin-bottom: 8px;"></div>
                            <div style="width: 50%; height: 8px; background: var(--slate-50); border-radius: 4px;"></div>
                        </div>
                        <div class="glass-card" style="height: 120px; padding: 20px; border-radius: 16px; background: white; border: 1px solid var(--slate-100);">
                            <div style="width: 30px; height: 4px; background: #ff6b6b; border-radius: 2px; margin-bottom: 12px;"></div>
                            <div style="width: 70%; height: 8px; background: var(--slate-100); border-radius: 4px; margin-bottom: 8px;"></div>
                            <div style="width: 40%; height: 8px; background: var(--slate-50); border-radius: 4px;"></div>
                        </div>
                        <div class="glass-card" style="height: 120px; padding: 20px; border-radius: 16px; background: white; border: 1px solid var(--slate-100);">
                            <div style="width: 30px; height: 4px; background: var(--slate-300); border-radius: 2px; margin-bottom: 12px;"></div>
                            <div style="width: 60%; height: 8px; background: var(--slate-100); border-radius: 4px; margin-bottom: 8px;"></div>
                            <div style="width: 30%; height: 8px; background: var(--slate-50); border-radius: 4px;"></div>
                        </div>
                        <div class="glass-card" style="grid-column: span 3; height: 200px; padding: 24px; border-radius: 16px; display: flex; align-items: flex-end; gap: 12px; background: white; border: 1px solid var(--slate-100);">
                            <div style="flex: 1; height: 40%; background: var(--primary-soft); border: 1px solid var(--primary); border-radius: 4px;"></div>
                            <div style="flex: 1; height: 80%; background: rgba(255, 107, 107, 0.1); border: 1px solid #ff6b6b; border-radius: 4px;"></div>
                            <div style="flex: 1; height: 60%; background: var(--slate-50); border: 1px solid var(--slate-100); border-radius: 4px;"></div>
                            <div style="flex: 1; height: 90%; background: var(--primary-soft); border: 1px solid var(--primary); border-radius: 4px;"></div>
                            <div style="flex: 1; height: 50%; background: var(--slate-50); border: 1px solid var(--slate-100); border-radius: 4px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SOLUTIONS BENTO GRID -->
<section id="solusi" class="section">
    <div class="container">
        <div class="section-title fade-scroll text-center" style="margin-bottom: 30px;">
            <span style="color: var(--primary); font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">{{ __('KEMAMPUAN KAMI') }}</span>
            <h2 class="text-gradient" style="font-size: 2.5rem; margin-top: 10px;">{{ __('Infrastruktur Siap Masa Depan') }}</h2>
        </div>

        <div class="bento-grid" style="grid-template-columns: repeat(3, 1fr); gap: 24px;">
            <!-- Main Capability -->
            <div class="bento-card fade-scroll stagger-1" style="grid-column: span 2; padding: 48px; min-height: 400px;">
                <div class="icon-box">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3 style="font-size: 2.2rem; margin-bottom: 20px;">{{ __('Ekosistem TI Perusahaan') }}</h3>
                <p style="color: var(--slate-600); font-size: 1.1rem; max-width: 500px; margin-bottom: 32px;">{{ __('Solusi perangkat keras lengkap mulai dari server berperforma tinggi hingga workstation cerdas yang dirancang untuk keandalan perusahaan.') }}</p>
                <div style="display: flex; gap: 12px;">
                    <span style="font-size: 0.75rem; padding: 6px 12px; background: var(--slate-50); border: 1px solid var(--slate-100); border-radius: 6px; font-weight: 600;">{{ __('PUSAT DATA') }}</span>
                    <span style="font-size: 0.75rem; padding: 6px 12px; background: var(--slate-50); border: 1px solid var(--slate-100); border-radius: 6px; font-weight: 600;">{{ __('JARINGAN') }}</span>
                </div>
            </div>

            <!-- Side Capability -->
            <div class="bento-card fade-scroll stagger-2" style="padding: 32px; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div class="icon-box" style="background: rgba(238, 46, 36, 0.1); color: var(--primary);">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 style="font-size: 1.5rem; margin-bottom: 12px;">Kecerdasan Digital</h3>
                    <p style="color: var(--slate-600); font-size: 0.95rem;">Integrasi perangkat lunak yang mulus dan strategi transformasi digital khusus untuk tata kelola modern.</p>
                </div>
                <a href="{{ route('services') }}#software" style="color: var(--primary); text-decoration: none; font-size: 0.85rem; font-weight: 700; margin-top: 24px;">LIHAT SOFTWARE →</a>
            </div>

            <!-- Small Cards -->
            <div class="bento-card fade-scroll stagger-1" style="padding: 32px;">
                <div class="icon-box" style="width: 48px; height: 48px; font-size: 1.2rem;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v19M5 8h14M15 15h2a2 2 0 012 2v2M5 19v-2a2 2 0 012-2h2"/></svg>
                </div>
                <h4 style="font-size: 1.2rem; margin-bottom: 8px;">Ruang Kerja Modern</h4>
                <p style="color: var(--slate-500); font-size: 0.85rem;">Desain kantor cerdas dan solusi interior untuk produktivitas ergonomis.</p>
            </div>

            <div class="bento-card fade-scroll stagger-2" style="grid-column: span 2; padding: 40px; display: flex; align-items: center; gap: 40px; background: linear-gradient(135deg, var(--primary-soft) 0%, transparent 100%);">
                <div class="icon-box" style="width: 80px; height: 80px; flex-shrink: 0;">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
                </div>
                <div>
                    <h3 style="font-size: 1.8rem; margin-bottom: 8px;">Smart Class & Learning</h3>
                    <p style="color: var(--slate-600);">Solusi teknologi pendidikan lanjutan untuk lingkungan pembelajaran generasi berikutnya.</p>
                </div>
            </div>
        </div>

        <div class="bento-grid" style="margin-top: 24px; grid-template-columns: repeat(3, 1fr);">
            <div class="bento-card fade-scroll" style="padding: 24px; text-align: center;">
                <div class="icon-box" style="margin: 0 auto 12px; width: 45px; height: 45px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
                </div>
                <h5 style="font-size: 0.9rem;">Perlengkapan Kantor</h5>
            </div>
            <div class="bento-card fade-scroll" style="padding: 24px; text-align: center;">
                <div class="icon-box" style="margin: 0 auto 12px; width: 45px; height: 45px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
                </div>
                <h5 style="font-size: 0.9rem;">Mebel & Smart Class</h5>
            </div>
            <div class="bento-card fade-scroll" style="padding: 24px; text-align: center;">
                <div class="icon-box" style="margin: 0 auto 12px; width: 45px; height: 45px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg>
                </div>
                <h5 style="font-size: 0.9rem;">Retail & E-Katalog</h5>
            </div>
        </div>
    </div>
</section>

<!-- STATS SECTION -->
<section class="section">
    <div class="container">
        <div class="bento-card" style="padding: 40px 30px; border-radius: 40px;">
            <div class="stats-grid fade-scroll">
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
            </div>
        </div>
    </div>
</section>

<!-- VISI MISI SECTION -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: flex-start;">
            <div class="fade-scroll stagger-1">
                <span style="color: var(--primary); font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">CV SOLUSI ARYA PRIMA</span>
                <h2 class="text-gradient" style="font-size: 2.5rem; margin-top: 12px; margin-bottom: 32px;">Visi & Misi Perusahaan</h2>
                <div class="bento-card" style="padding: 48px; border-left: 4px solid var(--primary);">
                    <h4 style="color: var(--primary); margin-bottom: 20px; font-size: 0.9rem; text-transform: uppercase;">VISI KAMI</h4>
                    <p style="font-style: italic; color: var(--slate-700); line-height: 1.8; font-size: 1.2rem;">"Menjadi Pemenang dalam kegiatan pengadaan barang dan jasa sesuai dengan Norma yang berlaku."</p>
                </div>
            </div>
            <div class="fade-scroll stagger-2">
                <h4 style="margin-bottom: 40px; font-size: 0.9rem; color: var(--slate-50); text-transform: uppercase; letter-spacing: 2px; opacity: 0;">MISI STRATEGIS</h4>
                <ul style="list-style: none; padding: 0;">
                    @php
                        $missions = [
                            'Memenuhi kebutuhan pengadaan barang/jasa di bidang solusi Teknologi Informasi',
                            'Menyelesaikan kegiatan dengan perhitungan tepat, barang sesuai, mutu terbaik',
                            'Menjalin hubungan baik dan berkesinambungan dengan seluruh mitra kerja',
                            'Menciptakan lapangan pekerjaan dan mendidik setiap karyawan',
                            'Mengembangkan potensi karyawan untuk kesejahteraan yang baik'
                        ];
                    @endphp
                    @foreach($missions as $index => $mission)
                    <li style="margin-bottom: 20px; display: flex; gap: 20px; align-items: flex-start;">
                        <div style="font-weight: 800; color: var(--primary); font-size: 1.1rem; min-width: 30px;">✓</div>
                        <p style="font-size: 1rem; color: var(--slate-600); line-height: 1.5;">{{ $mission }}</p>
                    </li>
                    @endforeach
                </ul>
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

        <div class="bento-grid" style="grid-template-columns: repeat(2, 1fr); gap: 24px;">
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
        </div>
    </div>
</section>

<!-- LEGAL & ACCREDITATION SECTION -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 24px;">
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

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px;">
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
