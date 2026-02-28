@extends('layouts.app')

@section('title', 'Tentang Kami - CV Solusi Arya Prima')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content fade-scroll text-center">
            <span class="badge">SINCE 1988</span>
            <h1 class="text-gradient">{{ __('Heritage & Inovasi') }}</h1>
            <p style="max-width: 800px; margin: 0 auto; color: var(--slate-600); font-size: 1.15rem;">{{ __('Pelopor pengadaan teknologi industri dan solusi infrastruktur TI di seluruh Indonesia selama lebih dari tiga dekade.') }}</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 80px; align-items: flex-start;">
            <div class="fade-scroll">
                <span style="color: var(--primary); font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">{{ __('SEJARAH PERUSAHAAN') }}</span>
                <h2 class="text-gradient" style="font-size: 2.5rem; margin-top: 12px; margin-bottom: 40px;">{{ __('Evolusi Industri') }}</h2>
                <div style="display: flex; flex-direction: column; gap: 24px;">
                    @php
                        $milestones = [
                            ['year' => '1988', 'title' => __('Pendirian'), 'desc' => __('Didirikan dengan fokus pada solusi TI dan elektronik khusus untuk sektor industri.')],
                            ['year' => '1995', 'title' => __('Ekspansi Strategis'), 'desc' => __('Memulai kemitraan jangka panjang dengan institusi pemerintah dan memperluas infrastruktur layanan.')],
                            ['year' => '2012', 'title' => __('Integrasi Digital'), 'desc' => __('Resmi bergabung dalam e-Katalog LKPP, memodernisasi proses pengadaan publik.')],
                            ['year' => '2020', 'title' => __('Skala Teknologi'), 'desc' => __('Meraih sertifikasi ISO 9001:2015 & ISO 27001:2013 untuk keunggulan manajemen mutu dan keamanan informasi.')]
                        ];
                    @endphp
                    @foreach($milestones as $m)
                    <div class="bento-card" style="display: flex; gap: 24px; padding: 24px; border-radius: 20px;">
                        <div style="flex-shrink: 0; width: 60px; height: 60px; background: var(--primary-soft); border: 1px solid rgba(238, 46, 36, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--primary); font-weight: 800; font-size: 1rem;">
                            {{ $m['year'] }}
                        </div>
                        <div>
                            <h4 style="margin-bottom: 8px;">{{ $m['title'] }}</h4>
                            <p style="font-size: 0.9rem; color: var(--slate-600); line-height: 1.6;">{{ $m['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <div class="fade-scroll" style="position: sticky; top: 120px;">
                <div class="bento-card" style="padding: 48px; border-left: 4px solid var(--primary); background: white;">
                    <span style="color: var(--primary); font-weight: 700; font-size: 0.8rem; letter-spacing: 2px; text-transform: uppercase;">{{ __('PRINSIP UTAMA') }}</span>
                    <h3 style="margin: 16px 0 32px; font-size: 2.2rem;">{{ __('Visi & Misi') }}</h3>
                    <div style="margin-bottom: 40px;">
                        <h4 style="color: var(--primary); margin-bottom: 16px; font-size: 0.9rem; text-transform: uppercase;">{{ __('VISI KAMI') }}</h4>
                        <p style="font-style: italic; color: var(--slate-700); line-height: 1.8; font-size: 1.15rem;">"{{ isset($siteSettings) && $siteSettings->vision ? $siteSettings->vision : __('Menjadi Pemenang dalam kegiatan pengadaan barang dan jasa sesuai dengan Norma yang berlaku.') }}"</p>
                    </div>
                    <div>
                        <h4 style="color: var(--primary); margin-bottom: 16px; font-size: 0.9rem; text-transform: uppercase;">{{ __('MISI KAMI') }}</h4>
                        <ul style="list-style: none; padding: 0; font-size: 0.95rem; color: var(--slate-600); display: flex; flex-direction: column; gap: 16px;">
                            @php
                                $missions = isset($siteSettings) && $siteSettings->mission 
                                    ? array_filter(explode("\n", str_replace("\r", "", $siteSettings->mission)))
                                    : [
                                        __('Memenuhi kebutuhan pengadaan barang/jasa di bidang solusi Teknologi Informasi'),
                                        __('Menyelesaikan kegiatan dengan perhitungan tepat, barang sesuai, mutu terbaik'),
                                        __('Menjalin hubungan baik dan berkesinambungan dengan seluruh mitra kerja'),
                                        __('Menciptakan lapangan pekerjaan dan mendidik setiap karyawan')
                                    ];
                            @endphp
                            @foreach($missions as $mission)
                            <li style="display: flex; gap: 12px;"><span style="color: var(--primary); font-weight: 800;">✓</span> {{ trim($mission) }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="culture">
    <div class="container">
        <div class="section-title fade-scroll text-center" style="margin-bottom: 80px;">
            <span style="color: var(--primary); font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">{{ __('BUDAYA PERUSAHAAN') }}</span>
            <h2 class="text-gradient" style="font-size: 2.5rem; margin-top: 12px;">{{ __('Budaya P.R.E.M.M.I.E.R.E') }}</h2>
            <p style="color: var(--slate-600); max-width: 700px; margin: 24px auto 0;">{{ __('Filosofi operasional mendasar yang mendorong komitmen kami terhadap keunggulan industri.') }}</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px;">
            @php
                $premmier = [
                    ['key' => 'P', 'label' => __('PROFESIONAL'), 'desc' => __('Menjunjung tinggi standar teknis dan etika kerja tertinggi.')],
                    ['key' => 'R', 'label' => __('RESPONSIF'), 'desc' => __('Keterlibatan proaktif dan respon cepat terhadap perubahan.')],
                    ['key' => 'E', 'label' => __('EDUKATIF'), 'desc' => __('Memberikan wawasan teknis untuk hasil yang optimal.')],
                    ['key' => 'M', 'label' => __('MELAYANI'), 'desc' => __('Dedikasi penyampaian layanan untuk keandalan strategis.')],
                    ['key' => 'M', 'label' => __('MOTIVASI'), 'desc' => __('Inovasi berkelanjutan untuk mempertahankan kepemimpinan.')],
                    ['key' => 'I', 'label' => __('INTEGRITAS'), 'desc' => __('Operasi transparan dan kejujuran sebagai landasan.')],
                    ['key' => 'E', 'label' => __('EFISIEN'), 'desc' => __('Optimalisasi sumber daya untuk kinerja tinggi.')],
                    ['key' => 'R', 'label' => __('RELIANCE'), 'desc' => __('Mitra yang konsisten dan dapat diandalkan untuk solusi industri.')],
                    ['key' => 'E', 'label' => __('EXCELLENCE'), 'desc' => __('Komitmen terhadap kesempurnaan dalam setiap penerapan.')]
                ];
            @endphp
            @foreach($premmier as $index => $item)
            <div class="bento-card fade-scroll stagger-{{ ($index % 3) + 1 }}" style="padding: 32px; position: relative; overflow: hidden;">
                <div style="font-size: 3rem; font-weight: 800; color: var(--primary); opacity: 0.05; position: absolute; right: 20px; top: 10px; line-height: 1;">{{ $item['key'] }}</div>
                <div style="font-weight: 800; color: var(--primary); margin-bottom: 20px; font-size: 0.9rem;">BUDAYA #{{ $item['key'] }}</div>
                <h4 style="margin-bottom: 12px; font-size: 1.1rem; letter-spacing: 1px;">{{ $item['label'] }}</h4>
                <p style="font-size: 0.85rem; color: var(--slate-600); line-height: 1.6;">{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CULTURE IN ACTION -->
<section class="section" style="padding: 0 24px 80px;">
    <div class="bento-card red-box-animated" style="padding: 80px 48px; background: linear-gradient(135deg, var(--primary) 0%, #d32f2f 100%); border: none; border-radius: 40px; overflow: hidden; position: relative;">
        <div class="container" style="position: relative; z-index: 2;">
            <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 80px; align-items: center;">
                <div class="fade-scroll">
                    <span style="color: white; font-weight: 700; letter-spacing: 2px; text-transform: uppercase;">{{ __('VALIDASI OPERASIONAL') }}</span>
                    <h2 style="font-size: 2.5rem; margin: 16px 0 24px; color: white;">{{ __('Budaya dalam Aksi') }}</h2>
                    <p style="color: rgba(255,255,255,0.9); line-height: 1.8; margin-bottom: 40px; font-size: 1.1rem;">{{ __('Dengan menjunjung tinggi Keandalan dan Integritas, kami telah mempertahankan kemitraan strategis selama lebih dari tiga dekade dengan sektor pemerintah dan swasta di seluruh Indonesia.') }}</p>
                    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <a href="{{ route('portfolio') }}" class="btn btn-white">{{ __('Lihat Portfolio') }}</a>
                        <a href="{{ route('contact') }}" class="btn btn-light-outline">{{ __('Hubungi Sekarang') }}</a>
                    </div>
                </div>
                <div class="fade-scroll" style="position: relative; text-align: center;">
                    <div class="bento-card" style="display: inline-block; padding: 48px; border-radius: 32px; background: white; border: none;">
                        <div style="font-size: 3.5rem; font-weight: 800; color: var(--primary); margin-bottom: 8px;">36+</div>
                        <div style="font-weight: 700; color: var(--slate-500); letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">{{ __('TAHUN BEROPERASI') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LEADERSHIP SECTION -->
<section class="section">
    <div class="container">
        <div class="section-title fade-scroll" style="margin-bottom: 60px;">
            <span style="color: var(--primary); font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">{{ __('JAJARAN DIREKSI') }}</span>
            <h2 class="text-gradient" style="font-size: 2.5rem; margin: 10px 0 0;">{{ __('Dewan Direksi') }}</h2>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px;">
            @php
                $leaders = [
                    ['name' => 'ASEP MOCHAMAD ISHAK', 'role' => __('Mitra Pendiri & Direktur')],
                    ['name' => 'MONGGIARTO HARJOJOWINOTO', 'role' => __('Mitra Pendiri & Komisaris')]
                ];
            @endphp
            @foreach($leaders as $index => $leader)
            <div class="bento-card fade-scroll stagger-{{ $index + 1 }}" style="display: flex; gap: 32px; align-items: center; padding: 32px; border-radius: 24px;">
                <div style="width: 80px; height: 80px; background: var(--primary-soft); border: 1px solid rgba(238, 46, 36, 0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; color: var(--primary); font-size: 1.5rem; font-weight: 800;">
                    {{ substr($leader['name'], 0, 1) }}
                </div>
                <div>
                    <h4 style="margin: 0 0 4px; font-size: 1.1rem; line-height: 1.2;">{{ $leader['name'] }}</h4>
                    <p style="color: var(--slate-500); font-size: 0.85rem; font-weight: 600; text-transform: uppercase;">{{ $leader['role'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
