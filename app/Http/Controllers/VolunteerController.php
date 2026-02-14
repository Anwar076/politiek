<?php

namespace App\Http\Controllers;

use App\Models\VolunteerSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VolunteerController extends Controller
{
    public function index(): View
    {
        return view('volunteer', [
            'metaTitle' => 'Word vrijwilliger',
            'metaDescription' => 'Help onze campagne en word vrijwilliger.',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:50',
            'availability' => 'nullable|string|max:255',
            'skills' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:2000',
        ], [
            'name.required' => 'Vul je naam in.',
            'email.required' => 'Vul je e-mailadres in.',
            'email.email' => 'Vul een geldig e-mailadres in.',
        ]);

        try {
            VolunteerSubmission::create($validated);
        } catch (\Throwable $e) {
            report($e);
            return redirect()->route('volunteer')
                ->withInput()
                ->with('error', 'Er ging iets mis. Probeer het later opnieuw of neem contact met ons op.');
        }

        return redirect()->route('volunteer')->with('success', 'Bedankt! We nemen zo snel mogelijk contact met je op.');
    }
}
