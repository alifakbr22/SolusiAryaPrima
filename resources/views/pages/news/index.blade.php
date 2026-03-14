@extends('layouts.app')

@section('title', 'Berita Terbaru - ' . config('app.name'))

@section('content')
<section class="hero" style="{{ isset($siteSettings) && $siteSettings->hero_bg ? "--hero-bg-url: url('" . asset('storage/' . $siteSettings->hero_bg) . "');" : '' }}">
    <div class="container">
        <div class="hero-content fade-scroll text-center">
            <span class="badge">{{ __('Pusat Informasi') }}</span>
            <h1 class="text-gradient">{{ __('Berita & Update Terbaru') }}</h1>
            <p style="max-width: 800px; margin: 0 auto; color: var(--slate-600); font-size: 1.15rem;">{{ __('Tetap terhubung dengan perkembangan terbaru, inovasi teknologi, dan pengumuman resmi dari CV Solusi Arya Prima.') }}</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="bento-grid news-grid">
            @forelse($news as $item)
                <div class="bento-card fade-scroll" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="height: 240px; position: relative; overflow: hidden;">
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                        @else
                            <div style="width: 100%; height: 100%; background: var(--slate-100); display: flex; align-items: center; justify-content: center; color: var(--slate-400);">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h7m4 0h4m-2-2v4m-5 4l3 3L19 7"/></svg>
                            </div>
                        @endif
                        <div style="position: absolute; top: 20px; right: 20px;">
                            <span style="background: rgba(255,255,255,0.9); backdrop-filter: blur(4px); padding: 6px 14px; border-radius: 20px; font-size: 0.75rem; font-weight: 700; color: var(--primary);">{{ $item->published_at ? $item->published_at->format('d M Y') : $item->created_at->format('d M Y') }}</span>
                        </div>
                    </div>
                    <div style="padding: 32px; flex: 1; display: flex; flex-direction: column;">
                        <h3 style="margin-bottom: 16px; font-size: 1.4rem; line-height: 1.4;">{{ $item->title }}</h3>
                        <p style="color: var(--slate-600); font-size: 0.95rem; line-height: 1.6; margin-bottom: 24px; flex: 1;">{{ Str::limit(strip_tags($item->content), 120) }}</p>
                        <a href="{{ route('news.show', $item->slug) }}" class="btn btn-outline" style="width: 100%; text-align: center;">{{ __('Baca Selengkapnya') }}</a>
                    </div>
                </div>
            @empty
                <div class="bento-card text-center" style="grid-column: 1 / -1; padding: 60px;">
                    <p style="color: var(--slate-500);">{{ __('Belum ada berita yang diterbitkan.') }}</p>
                </div>
            @endforelse
        </div>

        <div style="margin-top: 48px; display: flex; justify-content: center;">
            {{ $news->links() }}
        </div>
    </div>
</section>
@endsection
