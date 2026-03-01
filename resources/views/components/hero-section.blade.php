@props([
    'title',
    'subtitle' => null,
    'image' => 'https://images.unsplash.com/photo-1540914129891-4b0c2c4e2c8e?w=1920&q=80',
    'imagePosition' => 'center center',
    'ctaText' => null,
    'ctaUrl' => null,
])

<section class="relative min-h-[60vh] sm:min-h-[70vh] md:min-h-[85vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ $image }}" alt="" class="w-full h-full object-cover scale-105 animate-slow-zoom" style="object-position: {{ $imagePosition }}">
        <div class="absolute inset-0 bg-gradient-to-b from-marine/90 via-marine/85 to-marine/95"></div>
    </div>
    <div class="relative z-10 max-w-[1200px] mx-auto px-4 sm:px-6 text-center py-12 sm:py-16 md:py-20 lg:py-28">
        <div class="h-1 w-20 bg-accent mx-auto mb-4 sm:mb-6 rounded-full"></div>
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold tracking-tight leading-tight uppercase drop-shadow-lg">
            {{ $title }}
        </h1>
        @if($subtitle ?? isset($subtitleHtml))
            <p class="mt-3 sm:mt-5 text-base sm:text-lg md:text-xl lg:text-2xl text-white/95 font-medium max-w-2xl mx-auto drop-shadow-md flex flex-wrap items-center justify-center gap-x-2 sm:gap-x-3 gap-y-1">
                @isset($subtitleHtml)
                    {!! $subtitleHtml !!}
                @else
                    {{ $subtitle }}
                @endisset
            </p>
        @endif
        @if(isset($countdown))
            <div class="mt-10 md:mt-12">
                {!! $countdown !!}
            </div>
        @endif
        @if($ctaText && $ctaUrl)
            <a href="{{ $ctaUrl }}" class="inline-block mt-8 bg-accent hover:bg-accent-light text-marine font-bold px-8 py-4 rounded-lg text-lg transition-all duration-300 shadow-lg hover:shadow-accent/30 hover:scale-105">
                {{ $ctaText }}
            </a>
        @endif
        <div class="h-1 w-20 bg-accent mx-auto mt-8 rounded-full"></div>
    </div>
</section>
