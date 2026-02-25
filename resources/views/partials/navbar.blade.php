<nav class="navbar">
    <div class="nav-wrapper">
        <a href="/" class="logo">
            <div class="logo-text">
                <span class="logo-accent">SOLUSI</span>
                <span class="logo-main">ARYA PRIMA</span>
                <small class="mono">EST. 1988</small>
            </div>
        </a>

        <ul class="nav-menu" id="navMenu">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    Beranda
                </a>
            </li>
            
            <li class="nav-item has-dropdown">
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') || request()->routeIs('certification') ? 'active' : '' }}">
                    Tentang Kami <span class="dropdown-icon">▾</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('about') }}" class="dropdown-item {{ request()->routeIs('about') ? 'active' : '' }}">
                            <div class="dropdown-icon-wrapper">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            </div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Profil Perusahaan</div>
                                <div class="dropdown-desc">Visi, misi, dan sejarah perjalanan kami sejak 1988.</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('certification') }}" class="dropdown-item {{ request()->routeIs('certification') ? 'active' : '' }}">
                            <div class="dropdown-icon-wrapper">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            </div>
                            <div class="dropdown-content">
                                <div class="dropdown-title">Legalitas & Sertifikasi</div>
                                <div class="dropdown-desc">Kepercayaan dan standar kualitas operasional kami.</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">
                    Layanan & Produk
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">
                    Portfolio
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('cabang') }}" class="{{ request()->routeIs('cabang') ? 'active' : '' }}">
                    Cabang
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                    Kontak
                </a>
            </li>
        </ul>

        <div class="nav-extra">
            <div class="lang-switcher">
                <a href="{{ route('lang.switch', 'id') }}" class="{{ App::getLocale() == 'id' ? 'active' : '' }}">ID</a> 
                <span>/</span> 
                <a href="{{ route('lang.switch', 'en') }}" class="{{ App::getLocale() == 'en' ? 'active' : '' }}">EN</a>
            </div>
            <div class="menu-toggle" id="menuToggle">
                &#9776;
            </div>
        </div>
    </div>
</nav>
