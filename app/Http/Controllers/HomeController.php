<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = \App\Models\Slider::where('is_active', true)
            ->orderBy('order')
            ->get();
            
        $services = \App\Models\Service::limit(6)->get();

        $news = \App\Models\News::where('is_active', true)
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();

        $testimonials = \App\Models\Testimonial::orderBy('sort_order')->get();
        $stats = \App\Models\Stat::orderBy('sort_order')->get();

        return view('pages.home', compact('sliders', 'services', 'news', 'testimonials', 'stats'));
    }

    public function storeContact(Request $request)
    {
        DB::table('contacts')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
