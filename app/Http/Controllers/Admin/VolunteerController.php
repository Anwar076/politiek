<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VolunteerSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VolunteerController extends Controller
{
    public function index(Request $request): View
    {
        $volunteers = VolunteerSubmission::latest()->paginate(20);
        $selectedVolunteer = $request->filled('view')
            ? VolunteerSubmission::find($request->input('view'))
            : null;

        return view('admin.volunteers.index', [
            'volunteers' => $volunteers,
            'selectedVolunteer' => $selectedVolunteer,
        ]);
    }

    public function markProcessed(VolunteerSubmission $volunteer): RedirectResponse
    {
        $volunteer->update(['processed' => true]);

        return back()->with('success', 'Aanmelding gemarkeerd als verwerkt.');
    }
}
