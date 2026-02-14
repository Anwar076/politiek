<x-app-layout :metaTitle="$metaTitle" :metaDescription="$metaDescription">
    <article class="pt-24 pb-16 md:pb-24">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <header class="max-w-3xl">
                <a href="{{ route('news.index') }}" class="text-accent hover:text-accent-light text-sm font-medium mb-4 inline-block">← Terug naar nieuws</a>
                <time class="text-accent text-sm">{{ $post->published_at?->translatedFormat('d M Y') ?? $post->created_at->translatedFormat('d M Y') }}</time>
                <h1 class="mt-2 text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight">{{ $post->title }}</h1>
                @if($post->excerpt)
                    <p class="mt-4 text-xl text-white/80">{{ $post->excerpt }}</p>
                @endif
            </header>
            @if($post->image_url)
                <div class="mt-8 aspect-video rounded-xl overflow-hidden">
                    <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                </div>
            @endif
            <div class="mt-8 prose prose-invert prose-lg max-w-none prose-headings:text-white prose-p:text-white/90 prose-a:text-accent">
                {!! nl2br(e($post->content)) !!}
            </div>
        </div>
    </article>
</x-app-layout>
