<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class EventController extends Controller
{
    public function index(): View
    {
        $events = Event::latest('starts_at')->paginate(15);
        return view('admin.events.index', compact('events'));
    }

    public function create(): View
    {
        return view('admin.events.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'image_upload' => ['nullable', 'image', 'mimes:jpeg,png,gif,webp', 'max:2048'],
            'image' => 'nullable|string|max:500',
            'starts_at' => 'required|date',
            'ends_at' => 'nullable|date|after_or_equal:starts_at',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'published' => 'boolean',
        ]);

        $validated['image'] = $this->resolveImage($request, null);
        unset($validated['image_upload']);

        $base = Str::slug($validated['title']) . '-' . \Carbon\Carbon::parse($validated['starts_at'])->format('Y-m-d');
        $validated['slug'] = $base;
        $n = 1;
        while (Event::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = $base . '-' . $n++;
        }
        $validated['published'] = $request->boolean('published');
        Event::create($validated);
        return redirect()->route('admin.events.index')->with('success', 'Agenda-item opgeslagen.');
    }

    public function edit(Event $event): View
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'image_upload' => ['nullable', 'image', 'mimes:jpeg,png,gif,webp', 'max:2048'],
            'image' => 'nullable|string|max:500',
            'starts_at' => 'required|date',
            'ends_at' => 'nullable|date|after_or_equal:starts_at',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'published' => 'boolean',
        ]);

        $validated['image'] = $this->resolveImage($request, $event->image);
        unset($validated['image_upload']);

        $base = Str::slug($validated['title']) . '-' . \Carbon\Carbon::parse($validated['starts_at'])->format('Y-m-d');
        $validated['slug'] = $base;
        $n = 1;
        while (Event::where('slug', $validated['slug'])->where('id', '!=', $event->id)->exists()) {
            $validated['slug'] = $base . '-' . $n++;
        }
        $validated['published'] = $request->boolean('published');
        $event->update($validated);
        return redirect()->route('admin.events.index')->with('success', 'Agenda-item bijgewerkt.');
    }

    private function resolveImage(Request $request, ?string $current): ?string
    {
        if ($request->hasFile('image_upload')) {
            if ($current && ! Str::startsWith($current, ['http://', 'https://'])) {
                Storage::disk('public')->delete($current);
            }
            return $request->file('image_upload')->store('events', 'public');
        }
        if ($request->filled('image')) {
            return $request->input('image');
        }
        return $current;
    }

    public function destroy(Event $event): RedirectResponse
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Agenda-item verwijderd.');
    }
}
