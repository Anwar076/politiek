<x-app-layout :metaTitle="$metaTitle" :metaDescription="$metaDescription">
    <article class="pt-24 pb-16 md:pb-24">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <header class="max-w-3xl">
                <a href="{{ route('agenda.index') }}" class="text-accent hover:text-accent-light text-sm font-medium mb-4 inline-block">← Terug naar agenda</a>
                <div class="flex items-center gap-3 text-accent text-sm">
                    <span class="font-semibold">{{ $event->starts_at->translatedFormat('l d F Y') }}</span>
                    <span>{{ $event->starts_at->format('H:i') }}@if($event->ends_at) – {{ $event->ends_at->format('H:i') }}@endif</span>
                </div>
                <h1 class="mt-2 text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight">{{ $event->title }}</h1>
                @if($event->location)
                    <p class="mt-4 text-white/80 flex items-center gap-2">
                        <svg class="w-5 h-5 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        </svg>
                        {{ $event->location }}
                    </p>
                @endif
            </header>
            @if($event->image_url)
                <div class="mt-8 aspect-video rounded-xl overflow-hidden">
                    <img src="{{ $event->image_url }}" alt="{{ $event->title }}" class="w-full h-full object-cover">
                </div>
            @endif
            @if($event->description)
                <div class="mt-8 prose prose-invert prose-lg max-w-none prose-p:text-white/90">
                    {!! nl2br(e($event->description)) !!}
                </div>
            @endif
        </div>
    </article>
</x-app-layout>
