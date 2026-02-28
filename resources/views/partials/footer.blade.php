<footer class="footer-modern">
    <a href="/" class="logo" style="display: inline-flex; align-items: center; justify-content: center; background: #f8fafc; padding: 35px 70px; border-radius: 0 0 40px 0; position: absolute; top: 0; left: 0; z-index: 1001; box-shadow: none; min-width: 320px;">
        @if(isset($siteSettings) && $siteSettings->logo)
            <img src="{{ asset('storage/' . $siteSettings->logo) }}" alt="{{ $siteSettings->company_name ?? 'Solusi Arya Prima' }}" style="height: 55px; width: auto;">
        @else
            <img src="{{ asset('images/logo.png') }}" alt="Solusi Arya Prima" style="height: 55px; width: auto;">
        @endif
    </a>
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand" style="padding-top: 100px;">
                <p style="color: #94a3b8; line-height: 1.8; margin-bottom: 30px; font-size: 0.95rem;">{{ isset($siteSettings) && $siteSettings->company_description ? __($siteSettings->company_description) : __('Penyedia solusi Teknologi Informasi dan perlengkapan perkantoran terintegrasi sejak 1988. Berkomitmen memberikan layanan terbaik untuk sektor publik dan swasta.') }}</p>
                <div style="display: flex; gap: 15px;">
                    <a href="{{ isset($siteSettings) && $siteSettings->facebook_url ? $siteSettings->facebook_url : 'https://www.facebook.com/premmierestore?mibextid=rS40aB7S9Ucbxw6v' }}" target="_blank" style="width: 38px; height: 38px; border-radius: 10px; background: rgba(255,255,255,0.05); color: white; display: flex; align-items: center; justify-content: center; transition: all 0.3s;" onmouseover="this.style.background='var(--primary)'" onmouseout="this.style.background='rgba(255,255,255,0.05)'">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <a href="{{ isset($siteSettings) && $siteSettings->instagram_url ? $siteSettings->instagram_url : 'https://www.instagram.com/premmiere.co.id?igsh=MWc2MHZzdjRuaHB1OA==' }}" target="_blank" style="width: 38px; height: 38px; border-radius: 10px; background: rgba(255,255,255,0.05); color: white; display: flex; align-items: center; justify-content: center; transition: all 0.3s;" onmouseover="this.style.background='var(--primary)'" onmouseout="this.style.background='rgba(255,255,255,0.05)'">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <a href="{{ isset($siteSettings) && $siteSettings->linkedin_url ? $siteSettings->linkedin_url : 'https://www.linkedin.com/company/premmiere.co.id/' }}" target="_blank" style="width: 38px; height: 38px; border-radius: 10px; background: rgba(255,255,255,0.05); color: white; display: flex; align-items: center; justify-content: center; transition: all 0.3s;" onmouseover="this.style.background='var(--primary)'" onmouseout="this.style.background='rgba(255,255,255,0.05)'">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <a href="{{ isset($siteSettings) && $siteSettings->whatsapp_url ? $siteSettings->whatsapp_url : 'https://wa.me/628112908538' }}" target="_blank" style="width: 38px; height: 38px; border-radius: 10px; background: rgba(255,255,255,0.05); color: white; display: flex; align-items: center; justify-content: center; transition: all 0.3s;" onmouseover="this.style.background='var(--primary)'" onmouseout="this.style.background='rgba(255,255,255,0.05)'">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
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
                    {!! isset($siteSettings) && $siteSettings->address ? nl2br(e($siteSettings->address)) : 'Jalan S. Parman No. 47 B, Semarang 50232<br>Jawa Tengah, Indonesia' !!}
                </p>
                <div style="font-size: 0.9rem; color: white; font-weight: 600; margin-bottom: 10px;">
                     Hotline: {{ isset($siteSettings) && $siteSettings->hotline ? $siteSettings->hotline : '(024) 8508899 / 8505363' }}
                </div>
                <div style="font-size: 0.9rem; color: var(--primary); font-weight: 600;">
                    Email: {{ isset($siteSettings) && $siteSettings->email ? $siteSettings->email : 'solusiaryaprima@premmiere.co.id' }}
                </div>
            </div>
        </div>

        <div class="footer-bottom-bar">
            <div class="footer-copy">
                <div>&copy; 2024 CV Solusi Arya Prima. Semua hak dilindungi.</div>
                <div style="margin-top: 10px; font-size: 0.85rem; opacity: 0.8;">
                    Perusahaan Terdaftar: NPWP {{ isset($siteSettings) && $siteSettings->npwp ? $siteSettings->npwp : '01.960.937.9-511.000' }} | NIB {{ isset($siteSettings) && $siteSettings->nib ? $siteSettings->nib : '0220200162414' }}
                </div>
            </div>
            <div class="footer-legal">
            </div>
        </div>
    </div>
</footer>
