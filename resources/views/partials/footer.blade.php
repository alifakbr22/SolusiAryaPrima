<footer class="footer-modern">
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand">
                <a href="/" class="logo" style="margin-bottom: 25px; display: flex; align-items: flex-start;">
                    <div class="logo-text">
                        <span class="logo-accent" style="color: var(--primary); font-size: 0.85rem; letter-spacing: 3px; display: block; font-weight: 800; line-height: 1;">SOLUSI</span>
                        <strong style="color: white; font-size: 1.5rem; display: block; line-height: 1; margin-top: 5px;">ARYA PRIMA</strong>
                    </div>
                </a>
                <p style="color: #94a3b8; line-height: 1.8; margin-bottom: 30px; font-size: 0.95rem;">Penyedia solusi Teknologi Informasi dan perlengkapan perkantoran terintegrasi sejak 1988. Berkomitmen memberikan layanan terbaik untuk sektor publik dan swasta.</p>
                <div style="display: flex; gap: 15px;">
                    <a href="#" style="width: 38px; height: 38px; border-radius: 10px; background: rgba(255,255,255,0.05); color: white; display: flex; align-items: center; justify-content: center; transition: all 0.3s;" onmouseover="this.style.background='var(--primary)'" onmouseout="this.style.background='rgba(255,255,255,0.05)'">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <a href="#" style="width: 38px; height: 38px; border-radius: 10px; background: rgba(255,255,255,0.05); color: white; display: flex; align-items: center; justify-content: center; transition: all 0.3s;" onmouseover="this.style.background='var(--primary)'" onmouseout="this.style.background='rgba(255,255,255,0.05)'">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <a href="#" style="width: 38px; height: 38px; border-radius: 10px; background: rgba(255,255,255,0.05); color: white; display: flex; align-items: center; justify-content: center; transition: all 0.3s;" onmouseover="this.style.background='var(--primary)'" onmouseout="this.style.background='rgba(255,255,255,0.05)'">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                </div>
            </div>

            <div class="footer-nav">
                <h5 class="footer-heading">Tautan Cepat</h5>
                <ul class="footer-list">
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('portfolio') }}">Project Experience</a></li>
                    <li><a href="{{ route('contact') }}">Hubungi Kami</a></li>
                </ul>
            </div>

            <div class="footer-nav">
                <h5 class="footer-heading">Layanan & Produk</h5>
                <ul class="footer-list">
                    <li><a href="{{ route('services') }}#komputer">Komputer & Server</a></li>
                    <li><a href="{{ route('services') }}#software">Software & Perangkat Lunak</a></li>
                    <li><a href="{{ route('services') }}#recording">Electronic Security</a></li>
                    <li><a href="{{ route('services') }}#meubelair">Smart Class System</a></li>
                </ul>
            </div>

            <div class="footer-nav">
                <h5 class="footer-heading">Hubungi Kami</h5>
                <p style="font-size: 0.9rem; margin-bottom: 20px; color: #94a3b8; line-height: 1.6;">
                    Jalan S. Parman No. 47 B, Semarang 50232<br>
                    Jawa Tengah, Indonesia
                </p>
                <div style="font-size: 0.9rem; color: white; font-weight: 600; margin-bottom: 10px;">
                     Hotline: (024) 8508899 / 8505363
                </div>
                <div style="font-size: 0.9rem; color: var(--primary); font-weight: 600;">
                    Email: admin@solusiaryaprima.co.id
                </div>
            </div>
        </div>

        <div class="footer-bottom-bar">
            <div class="footer-copy">
                &copy; {{ date('Y') }} CV Solusi Arya Prima. All rights reserved.
            </div>
            <div class="footer-legal">
                <a href="#" style="color: #64748b; text-decoration: none; margin-left: 20px; font-size: 0.85rem;">Privacy Policy</a>
                <a href="#" style="color: #64748b; text-decoration: none; margin-left: 20px; font-size: 0.85rem;">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
