@props([
    'event',
])

@php
    $start = $event->starts_at;
    $day = $start->format('d');
    $month = $start->format('M');
    $dateTime = $start->format('D j M, H:i') . ($event->ends_at ? ' – ' . $event->ends_at->format('H:i') : '');
@endphp

<a href="{{ route('agenda.show', $event->slug) }}" class="group block animate-fade-in-up">
    <article class="flex gap-5 p-5 rounded-2xl bg-marine-light/50 border border-white/10 hover:border-accent/30 transition-all duration-300 hover:shadow-lg hover:shadow-accent/10 hover:-translate-y-0.5">
        {{-- Datum: alleen dag + maand, geen dubbele tekst --}}
        <div class="flex-shrink-0 w-16 h-16 rounded-xl bg-accent/25 flex flex-col items-center justify-center border border-accent/40">
            <span class="text-xl font-extrabold text-white leading-none">{{ $day }}</span>
            <span class="text-[11px] font-bold text-accent uppercase tracking-wide mt-0.5">{{ $month }}</span>
        </div>
        {{-- Inhoud --}}
        <div class="flex-grow min-w-0">
            <h2 class="text-base font-bold text-white group-hover:text-accent transition-colors line-clamp-2">
                {{ $event->title }}
            </h2>
            <p class="mt-1 text-white/80 text-sm flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                {{ $dateTime }}
            </p>
            @if($event->location)
                <p class="mt-0.5 text-white/70 text-sm flex items-center gap-1.5 truncate">
                    <svg class="w-3.5 h-3.5 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                    {{ $event->location }}
                </p>
            @endif
            @if($event->description)
                <p class="mt-1.5 text-white/60 text-sm line-clamp-2">{{ Str::limit(strip_tags($event->description), 70) }}</p>
            @endif
            <span class="inline-flex items-center gap-1 mt-2 text-accent font-semibold text-sm">
                Bekijk <span class="group-hover:translate-x-0.5 transition-transform">→</span>
            </span>
        </div>
    </article>
</a>
