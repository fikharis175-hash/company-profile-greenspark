<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        Contacts::create($validated);
        return redirect()->route('contact')->with('success', 'Pesan anda berhasil terkirim.');
    }
}
