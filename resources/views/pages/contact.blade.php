@extends('layouts.app')

@section('title', 'Hubungi Kami - CV Solusi Arya Prima')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content fade-scroll text-center">
            <span class="badge">HUBUNGI KAMI</span>
            <h1 class="text-gradient">Inisialisasi <span style="display: block;">Kolaborasi Strategis</span></h1>
            <p style="max-width: 800px; margin: 0 auto; color: var(--slate-600); font-size: 1.15rem;">Bangun komunikasi langsung dengan tim teknis kami untuk konsultasi infrastruktur dan informasi pengadaan.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="bento-grid">
            <!-- Contact Form -->
            <div class="bento-card large fade-scroll" style="grid-column: span 2; padding: 48px;">
                <div style="color: var(--primary); font-weight: 800; font-size: 0.75rem; margin-bottom: 32px; text-transform: uppercase;">FORMULIR PESAN</div>
                
                @if(session('success'))
                    <div class="bento-card" style="background: var(--primary-soft); border: 1px solid rgba(238, 46, 36, 0.1); color: var(--primary); padding: 20px; border-radius: 12px; margin-bottom: 32px;">
                        {{ __(session('success')) }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" style="display: flex; flex-direction: column; gap: 24px;">
                    @csrf
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px;">
                        <input type="text" name="name" placeholder="Nama Lengkap" required style="padding: 20px; border-radius: 12px; border: 1px solid var(--slate-200); background: var(--white); color: var(--slate-800); outline: none;">
                        <input type="email" name="email" placeholder="Alamat Email" required style="padding: 20px; border-radius: 12px; border: 1px solid var(--slate-200); background: var(--white); color: var(--slate-800); outline: none;">
                    </div>
                    <input type="text" name="subject" placeholder="Subjek Pesan" style="padding: 20px; border-radius: 12px; border: 1px solid var(--slate-200); background: var(--white); color: var(--slate-800); outline: none;">
                    <textarea name="message" placeholder="Isi Pesan Anda" rows="6" required style="padding: 20px; border-radius: 12px; border: 1px solid var(--slate-200); background: var(--white); color: var(--slate-800); resize: none; outline: none;"></textarea>
                    <button type="submit" class="btn btn-solid" style="padding: 20px; font-weight: 700;">Kirim Pesan</button>
                </form>
            </div>

            <!-- Office Info -->
            <div class="bento-card fade-scroll">
                <div style="width: 50px; height: 50px; background: var(--primary-soft); color: var(--primary); border: 1px solid rgba(238, 46, 36, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 32px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h4 style="margin-bottom: 16px;">KANTOR PUSAT</h4>
                <p style="font-size: 0.9rem; color: var(--slate-600); line-height: 1.8;">
                    Jalan S. Parman No. 47 B, Semarang 50232<br>
                    Jawa Tengah, Indonesia
                </p>
                <div style="margin-top: 24px; font-size: 0.75rem; color: var(--primary); font-weight: 700;">LOKASI: SEMARANG</div>
            </div>

            <!-- Call/Email -->
            <div class="bento-card fade-scroll">
                <div style="width: 50px; height: 50px; background: #fff5f5; color: #ff6b6b; border: 1px solid #ffe3e3; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 32px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                </div>
                <h4 style="margin-bottom: 16px;">SALURAN KOMUNIKASI</h4>
                <p style="font-size: 0.9rem; color: var(--slate-600); line-height: 1.8;">
                    (024) 8508899 / 8505363<br>
                    WA: 0821-3763-9224<br>
                    FAX: (024) 8500599
                </p>
            </div>

            <!-- Map -->
            <div class="bento-card fade-scroll" style="padding: 12px; height: 400px; grid-column: span 2; background: white;">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.034731215112!2d110.40620617574044!3d-7.005391268615024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b792404e571%3A0xe744e45d1ec25d1e!2sCV.%20Solusi%20Arya%20Prima!5e0!3m2!1sen!2sid!4v1740152000000!5m2!1sen!2sid" 
                    width="100%" height="100%" style="border:0; border-radius: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- Emergency -->
            <div class="bento-card fade-scroll" style="grid-column: span 3; border-top: 4px solid #ff6b6b; background: white;">
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 12px; flex-wrap: wrap; gap: 24px;">
                    <div>
                        <h4 style="margin-bottom: 8px;">LAYANAN PRIORITAS</h4>
                        <p style="font-size: 0.9rem; color: var(--slate-600);">Untuk kegagalan infrastruktur kritis atau permintaan pengadaan darurat.</p>
                    </div>
                    <div style="text-align: right;">
                        <div style="font-size: 1.5rem; font-weight: 800; color: #ff6b6b;">0821-3763-9224</div>
                        <div style="font-size: 0.8rem; color: var(--slate-500); font-weight: 600;">ADMIN@SOLUSIARYAPRIMA.CO.ID</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
