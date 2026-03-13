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
            @foreach($navMenus as $menu)
                @if($menu->children->count() > 0)
                    <li class="nav-item has-dropdown">
                        <a href="{{ $menu->url ?? '#' }}" class="nav-link {{ request()->is(trim($menu->url, '/')) ? 'active' : '' }}">
                            {{ __($menu->label) }} <span class="dropdown-icon">▾</span>
                        </a>
                        <ul class="dropdown-menu dropdown-grid">
                            @foreach($menu->children as $child)
                                <li>
                                    <a href="{{ $child->url ?? '#' }}" class="dropdown-item {{ request()->is(trim($child->url, '/')) ? 'active' : '' }}">
                                        @if($child->icon)
                                            {!! $child->icon !!}
                                        @endif
                                        <div class="dropdown-content">
                                            <span class="dropdown-title">{{ __($child->label) }}</span>
                                            @if($child->description)
                                                <span class="dropdown-desc">{{ __($child->description) }}</span>
                                            @endif
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ $menu->url ?? '#' }}" class="{{ request()->is(trim($menu->url, '/')) ? 'active' : '' }}">
                            {{ __($menu->label) }}
                        </a>
                    </li>
                @endif
            @endforeach
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
