<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:100',
            'email'    => 'required|email',
            'whatsapp' => 'required|string|max:20',
            'message'  => 'required|string'
        ]);

        Contact::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'whatsapp' => $request->whatsapp,
            'message'  => $request->message
        ]);

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
