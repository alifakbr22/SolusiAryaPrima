<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Branch;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function services()
    {
        $services = Service::all();
        return view('pages.services', compact('services'));
    }

    public function portfolio()
    {
        $portfolios = Portfolio::orderBy('completion_date', 'desc')->get();
        return view('pages.portfolio', compact('portfolios'));
    }

    public function cabang()
    {
        $branches = Branch::all();
        return view('pages.cabang', compact('branches'));
    }
}
