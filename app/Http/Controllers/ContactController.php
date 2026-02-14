<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('pages.contact', [
            'metaTitle' => 'Contact',
            'metaDescription' => 'Neem contact met ons op.',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // In production: send mail or store in database
        // Mail::to('info@lijst8.nl')->send(new ContactMessage($validated));

        return redirect()->route('contact')->with('success', 'Je bericht is verzonden. We reageren zo snel mogelijk.');
    }
}
