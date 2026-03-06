@extends('layouts.app')

@section('title', $post->title . ' - ' . config('app.name'))

@section('content')
<section class="section" style="padding-top: 140px;">
    <div class="container">
        <div style="max-width: 900px; margin: 0 auto;">
            <div class="fade-scroll">
                <div style="margin-bottom: 24px;">
                    <a href="{{ route('news.index') }}" style="color: var(--primary); text-decoration: none; font-weight: 700; font-size: 0.9rem; display: flex; align-items: center; gap: 8px;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5m7 7l-7-7 7-7"/></svg>
                        {{ __('KEMBALI KE BERITA') }}
                    </a>
                </div>
                
                <h1 style="font-size: clamp(2rem, 5vw, 3rem); line-height: 1.2; margin-bottom: 24px;">{{ $post->title }}</h1>
                
                <div style="display: flex; align-items: center; gap: 24px; margin-bottom: 48px; color: var(--slate-500); font-size: 0.95rem; font-weight: 600;">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        {{ $post->published_at ? $post->published_at->format('d M Y') : $post->created_at->format('d M Y') }}
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        {{ __('Admin SAPA') }}
                    </div>
                </div>
            </div>

            @if($post->image)
                <div class="bento-card fade-scroll" style="padding: 0; overflow: hidden; margin-bottom: 48px; border-radius: 24px;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="width: 100%; height: auto; display: block;">
                </div>
            @endif

            <div class="fade-scroll content-renderer" style="font-size: 1.15rem; line-height: 1.8; color: var(--slate-700);">
                {!! $post->content !!}
            </div>

            <div style="margin-top: 80px; padding-top: 48px; border-top: 1px solid var(--slate-100);">
                <h3 style="margin-bottom: 32px;">{{ __('Berita Terkait') }}</h3>
                <div class="responsive-grid-240" style="gap: 24px;">
                    @foreach($latestNews as $news)
                        <a href="{{ route('news.show', $news->slug) }}" class="bento-card" style="text-decoration: none; display: block; border: 1px solid var(--slate-100);">
                            <h4 style="font-size: 1.1rem; margin-bottom: 12px; line-height: 1.4; color: var(--slate-900);">{{ $news->title }}</h4>
                            <p style="font-size: 0.85rem; color: var(--slate-500);">{{ $news->published_at ? $news->published_at->format('d M Y') : $news->created_at->format('d M Y') }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.content-renderer p { margin-bottom: 1.5rem; }
.content-renderer h2, .content-renderer h3 { margin: 2rem 0 1rem; color: var(--slate-900); }
.content-renderer ul, .content-renderer ol { margin-bottom: 1.5rem; padding-left: 1.5rem; }
.content-renderer li { margin-bottom: 0.5rem; }
.content-renderer img { max-width: 100%; height: auto; border-radius: 12px; margin: 2rem 0; }
</style>
@endsection
