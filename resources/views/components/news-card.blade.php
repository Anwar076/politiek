@props([
    'post',
])

@php
    $url = route('news.show', $post->slug);
    $img = $post->image_url ?? 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=800&q=80';
@endphp

<a href="{{ $url }}" class="group block animate-fade-in-up">
    <article class="h-full rounded-2xl overflow-hidden bg-marine-light/40 border border-white/10 hover:border-accent/30 transition-all duration-300 hover:shadow-xl hover:shadow-accent/10 hover:-translate-y-1">
        {{-- Afbeelding met speels groen vlakje --}}
        <div class="relative aspect-[4/3] overflow-hidden">
            <img src="{{ $img }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-marine/70 via-transparent to-transparent"></div>
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-accent/90 rounded-tl-full"></div>
            <time class="absolute bottom-3 left-4 px-3 py-1 rounded-full bg-white/95 text-marine text-xs font-bold shadow-sm">
                {{ $post->published_at?->translatedFormat('d M') ?? $post->created_at->translatedFormat('d M') }}
            </time>
        </div>
        {{-- Tekst --}}
        <div class="p-5">
            <h2 class="text-lg font-bold text-white group-hover:text-accent transition-colors line-clamp-2 leading-snug">
                {{ $post->title }}
            </h2>
            @if($post->excerpt)
                <p class="mt-2 text-white/75 text-sm line-clamp-2">{{ $post->excerpt }}</p>
            @endif
            <span class="inline-flex items-center gap-1.5 mt-4 text-accent font-semibold text-sm">
                Lees meer
                <span class="group-hover:translate-x-1 transition-transform inline-block">→</span>
            </span>
        </div>
    </article>
</a>
