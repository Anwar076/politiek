@props([
    'title' => 'Steun onze campagne',
    'description' => 'Samen maken we Barendrecht sterker. Kies hoe jij wilt bijdragen.',
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
    <div class="absolute inset-0 bg-gradient-to-br from-marine-light/80 via-marine to-marine-dark"></div>
    <div class="absolute inset-0 opacity-30" style="background-image: radial-gradient(circle at 2px 2px, rgba(16,185,129,0.15) 1px, transparent 0); background-size: 32px 32px;"></div>
    <div class="relative z-10 max-w-[1200px] mx-auto px-4 sm:px-6">
        <div class="text-center mb-14">
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-accent/20 border border-accent/40 mb-6">
                <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
            </div>
            <h2 class="text-3xl md:text-5xl font-extrabold text-white">{{ $title }}</h2>
            <p class="mt-4 text-lg md:text-xl text-white/85 max-w-2xl mx-auto">{{ $description }}</p>
        </div>
        <div class="grid md:grid-cols-2 gap-6 md:gap-8 max-w-4xl mx-auto">
            <a href="{{ $primaryUrl }}" class="group group/v block p-8 rounded-2xl bg-white/10 backdrop-blur border border-white/20 hover:border-accent/50 hover:bg-accent/20 transition-all duration-300 hover:shadow-xl hover:shadow-accent/20 text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-accent/30 text-accent mb-5 group-hover/v:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white">Word vrijwilliger</h3>
                <p class="mt-2 text-white/80 text-sm">Help mee met flyeren, evenementen of communicatie.</p>
                <span class="inline-flex items-center gap-2 mt-5 text-accent font-semibold group-hover/v:gap-3 transition-all">
                    Aanmelden
                    <svg class="w-5 h-5 group-hover/v:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </span>
            </a>
            <a href="{{ $secondaryUrl }}" class="group group/v block p-8 rounded-2xl bg-white/10 backdrop-blur border border-white/20 hover:border-accent/50 hover:bg-accent/20 transition-all duration-300 hover:shadow-xl hover:shadow-accent/20 text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-accent/30 text-accent mb-5 group-hover/v:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white">Doneer</h3>
                <p class="mt-2 text-white/80 text-sm">Steun onze campagne met een eenmalige bijdrage.</p>
                <span class="inline-flex items-center gap-2 mt-5 text-accent font-semibold group-hover/v:gap-3 transition-all">
                    Steun ons
                    <svg class="w-5 h-5 group-hover/v:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </span>
            </a>
        </div>
    </div>
</section>
