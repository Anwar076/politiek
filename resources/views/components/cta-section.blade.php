@props([
    'title' => 'Steun onze campagne',
    'description' => 'Samen maken we Barendrecht sterker. Doe mee als vrijwilliger.',
    'primaryText' => 'Word vrijwilliger',
    'primaryUrl' => null,
    'secondaryText' => 'Doneer',
    'secondaryUrl' => null,
])

@php
    $primaryUrl = $primaryUrl ?? route('volunteer');
    $secondaryUrl = $secondaryUrl ?? route('donate');
@endphp

<section class="relative py-20 md:py-28 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-marine-light/90 via-marine to-marine-dark"></div>
    <div class="absolute inset-0 opacity-40" style="background-image: radial-gradient(circle at 2px 2px, rgba(84,188,132,0.12) 1px, transparent 0); background-size: 28px 28px;"></div>
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#54bc84]/40 to-transparent"></div>
    <div class="relative z-10 max-w-[1200px] mx-auto px-4 sm:px-6">
        <div class="text-center mb-12 md:mb-14">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-[#54bc84]/20 border border-[#54bc84]/40 mb-6 shadow-lg shadow-[#54bc84]/10">
                <i class="fa-solid fa-heart text-2xl text-[#54bc84]"></i>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">{{ $title }}</h2>
            <p class="mt-4 text-lg md:text-xl text-white/85 max-w-xl mx-auto leading-relaxed">{{ $description }}</p>
        </div>
        <div class="flex justify-center">
            <a href="{{ $primaryUrl }}" class="group block w-full max-w-md p-8 md:p-10 rounded-2xl bg-white/5 backdrop-blur-sm border-2 border-white/15 hover:border-[#54bc84]/50 hover:bg-[#54bc84]/10 transition-all duration-300 hover:shadow-xl hover:shadow-[#54bc84]/15 text-center">
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-[#54bc84]/25 border border-[#54bc84]/30 text-[#54bc84] mb-6 group-hover:scale-105 transition-transform duration-300">
                    <i class="fa-solid fa-people-group text-3xl"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-bold text-white">{{ $primaryText }}</h3>
                <p class="mt-3 text-white/75 text-sm md:text-base">Help mee met flyeren, evenementen of communicatie. Elke bijdrage telt.</p>
                <span class="inline-flex items-center justify-center gap-2 mt-6 text-[#54bc84] font-semibold group-hover:gap-3 transition-all">
                    Aanmelden
                    <i class="fa-solid fa-arrow-right text-sm group-hover:translate-x-0.5 transition-transform"></i>
                </span>
            </a>
        </div>
        {{-- Doneer als secundaire optie (tekstlink) --}}
        <!-- <p class="mt-8 text-center">
            <a href="{{ $secondaryUrl }}" class="text-white/60 hover:text-[#54bc84] text-sm font-medium transition-colors underline underline-offset-2 decoration-white/30 hover:decoration-[#54bc84]/50">Of steun ons met een donatie</a>
        </p> -->
        {{-- Doneer als volwaardige kaart (in comment) --}}
        <!-- <a href="{{ $secondaryUrl }}" class="group block p-8 rounded-2xl bg-white/10 border border-white/20 hover:border-accent/50 text-center">
            <h3 class="text-xl font-bold text-white">Doneer</h3>
            <p class="mt-2 text-white/80 text-sm">Steun onze campagne met een eenmalige bijdrage.</p>
        </a> -->
    </div>
</section>
