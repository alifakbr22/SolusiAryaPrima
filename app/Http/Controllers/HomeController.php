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

        return view('pages.home', compact('sliders', 'services'));
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
