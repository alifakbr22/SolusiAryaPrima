<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('is_active', true)
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        return view('pages.news.index', compact('news'));
    }

    public function show($slug)
    {
        $post = News::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $latestNews = News::where('is_active', true)
            ->where('id', '!=', $post->id)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();

        return view('pages.news.show', compact('post', 'latestNews'));
    }
}
