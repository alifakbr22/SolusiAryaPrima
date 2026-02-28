<nav class="navbar">
    <div class="nav-wrapper">
        <a href="/" class="logo">
            @if(isset($siteSettings) && $siteSettings->logo)
                <img src="{{ asset('storage/' . $siteSettings->logo) }}" alt="{{ $siteSettings->company_name ?? 'Solusi Arya Prima' }}" style="height: 40px; width: auto;">
            @else
                <img src="{{ asset('images/logo.png') }}" alt="Solusi Arya Prima" style="height: 40px; width: auto;">
            @endif
        </a>

        <ul class="nav-menu" id="navMenu">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    {{ __('Home') }}
                </a>
            </li>
            
            <li class="nav-item has-dropdown">
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') || request()->routeIs('certification') ? 'active' : '' }}">
                    {{ __('About') }} <span class="dropdown-icon">▾</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('about') }}" class="dropdown-item {{ request()->routeIs('about') ? 'active' : '' }}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg> 
                            <div class="dropdown-content">
                                <span class="dropdown-title">{{ __('Profile Perusahaan') }}</span>
                                <span class="dropdown-desc">{{ __('Visi, misi, dan sejarah perjalanan kami sejak 1988.') }}</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('certification') }}" class="dropdown-item {{ request()->routeIs('certification') ? 'active' : '' }}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> 
                            <div class="dropdown-content">
                                <span class="dropdown-title">{{ __('Legalitas & Sertifikasi') }}</span>
                                <span class="dropdown-desc">{{ __('Kepercayaan dan standar kualitas operasional kami.') }}</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">
                    {{ __('Services') }}
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">
                    {{ __('Portfolio') }}
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('cabang') }}" class="{{ request()->routeIs('cabang') ? 'active' : '' }}">
                    {{ __('Cabang') }}
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                    {{ __('Contact') }}
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
