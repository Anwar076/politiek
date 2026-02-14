<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\View\View;

class EventController extends Controller
{
    public function index(): View
    {
        $events = Event::published()->upcoming()->paginate(12);

        return view('agenda.index', [
            'events' => $events,
            'metaTitle' => 'Agenda',
            'metaDescription' => 'Bekijk onze aankomende activiteiten en evenementen.',
        ]);
    }

    public function show(string $slug): View
    {
        $event = Event::published()->where('slug', $slug)->firstOrFail();

        return view('agenda.show', [
            'event' => $event,
            'metaTitle' => $event->meta_title ?? $event->title,
            'metaDescription' => $event->meta_description ?? Str::limit(strip_tags($event->description), 160),
        ]);
    }
}
