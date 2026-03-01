<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('pages.contact', [
            'metaTitle' => 'Contact — Samen Barendrecht',
            'metaDescription' => 'Neem contact op met Samen Barendrecht. Stel een vraag, deel uw zorgen of sluit u aan.',
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

        // Altijd in database opslaan — zo kun je berichten in het CMS lezen zonder e-mail
        ContactMessage::create($validated);

        $to = config('mail.contact_to', env('CONTACT_EMAIL', 'info@samenvoorbarendrecht.nl'));

        // Probeer ook per e-mail te sturen (werkt o.a. met sendmail op server of log lokaal)
        try {
            Mail::to($to)->send(new ContactMessageMail(
                name: $validated['name'],
                email: $validated['email'],
                subjectLine: $validated['subject'],
                messageText: $validated['message'],
            ));
        } catch (\Throwable $e) {
            report($e);
            // Niet falen: bericht staat al in database, bezoeker krijgt gewoon succes
        }

        return redirect()->route('contact')->with('success', 'Je bericht is verzonden. We reageren zo snel mogelijk.');
    }
}
