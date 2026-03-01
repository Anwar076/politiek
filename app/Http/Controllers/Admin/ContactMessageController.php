<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactMessageController extends Controller
{
    public function index(Request $request): View
    {
        $messages = ContactMessage::latest()->paginate(20);
        $selected = $request->filled('view')
            ? ContactMessage::find($request->input('view'))
            : null;

        if ($selected && !$selected->read) {
            $selected->update(['read' => true]);
        }

        return view('admin.contact-messages.index', [
            'messages' => $messages,
            'selected' => $selected,
        ]);
    }

    public function markUnread(ContactMessage $contact): RedirectResponse
    {
        $contact->update(['read' => false]);

        return back()->with('success', 'Bericht gemarkeerd als ongelezen.');
    }
}
