<footer class="footer-modern">
    <a href="/" class="logo" style="display: inline-flex; align-items: center; justify-content: center; background: #f8fafc; padding: 35px 70px; border-radius: 0 0 40px 0; position: absolute; top: 0; left: 0; z-index: 1001; box-shadow: none; min-width: 320px;">
        <img src="{{ asset('images/logo.png') }}" alt="Solusi Arya Prima" style="height: 55px; width: auto;">
    </a>
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand" style="padding-top: 100px;">
                <p style="color: #94a3b8; line-height: 1.8; margin-bottom: 30px; font-size: 0.95rem;">{{ __('Penyedia solusi Teknologi Informasi dan perlengkapan perkantoran terintegrasi sejak 1988. Berkomitmen memberikan layanan terbaik untuk sektor publik dan swasta.') }}</p>
                <div style="display: flex; gap: 15px;">
                    <a href="https://www.facebook.com/premmierestore?mibextid=rS40aB7S9Ucbxw6v" target="_blank" style="width: 38px; height: 38px; border-radius: 10px; background: rgba(255,255,255,0.05); color: white; display: flex; align-items: center; justify-content: center; transition: all 0.3s;" onmouseover="this.style.background='var(--primary)'" onmouseout="this.style.background='rgba(255,255,255,0.05)'">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/premmiere.co.id?igsh=MWc2MHZzdjRuaHB1OA==" target="_blank" style="width: 38px; height: 38px; border-radius: 10px; background: rgba(255,255,255,0.05); color: white; display: flex; align-items: center; justify-content: center; transition: all 0.3s;" onmouseover="this.style.background='var(--primary)'" onmouseout="this.style.background='rgba(255,255,255,0.05)'">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/company/premmiere.co.id/" target="_blank" style="width: 38px; height: 38px; border-radius: 10px; background: rgba(255,255,255,0.05); color: white; display: flex; align-items: center; justify-content: center; transition: all 0.3s;" onmouseover="this.style.background='var(--primary)'" onmouseout="this.style.background='rgba(255,255,255,0.05)'">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <a href="https://wa.me/628112908538" target="_blank" style="width: 38px; height: 38px; border-radius: 10px; background: rgba(255,255,255,0.05); color: white; display: flex; align-items: center; justify-content: center; transition: all 0.3s;" onmouseover="this.style.background='#25D366'" onmouseout="this.style.background='rgba(255,255,255,0.05)'">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 1 1-7.6-10.7 8.38 8.38 0 0 1 3.8.9L21 4.5zM12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10 10 10 0 0 1-10-10 10 10 0 0 1 10-10z"/></svg>
                    </a>
                </div>
            </div>

            <div class="footer-nav">
                <h5 class="footer-heading">{{ __('Tautan Cepat') }}</h5>
                <ul class="footer-list">
                    <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                    <li><a href="{{ route('about') }}">{{ __('About') }}</a></li>
                    <li><a href="{{ route('portfolio') }}">{{ __('Project Experience') }}</a></li>
                    <li><a href="{{ route('contact') }}">{{ __('Contact Us') }}</a></li>
                </ul>
            </div>

            <div class="footer-nav">
                <h5 class="footer-heading">{{ __('Legalitas & Cabang') }}</h5>
                <ul class="footer-list">
                    <li><a href="{{ route('certification') }}">{{ __('Legalitas & Sertifikasi') }}</a></li>
                    <li><a href="{{ route('cabang') }}">{{ __('Kantor Cabang') }}</a></li>
                </ul>
            </div>

            <div class="footer-nav">
                <h5 class="footer-heading">{{ __('Contact Us') }}</h5>
                <p style="font-size: 0.9rem; margin-bottom: 20px; color: #94a3b8; line-height: 1.6;">
                    Jalan S. Parman No. 47 B, Semarang 50232<br>
                    Jawa Tengah, Indonesia
                </p>
                <div style="font-size: 0.9rem; color: white; font-weight: 600; margin-bottom: 10px;">
                     Hotline: (024) 8508899 / 8505363
                </div>
                <div style="font-size: 0.9rem; color: var(--primary); font-weight: 600;">
                    Email: solusiaryaprima@premmiere.co.id
                </div>
            </div>
        </div>

        <div class="footer-bottom-bar">
            <div class="footer-copy">
                <div>&copy; 2024 CV Solusi Arya Prima. Semua hak dilindungi.</div>
                <div style="margin-top: 10px; font-size: 0.85rem; opacity: 0.8;">
                    Perusahaan Terdaftar: NPWP 01.960.937.9-511.000 | NIB 0220200162414
                </div>
            </div>
            <div class="footer-legal">
            </div>
        </div>
    </div>
</footer>
