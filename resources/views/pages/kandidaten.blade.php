<x-app-layout :metaTitle="$metaTitle" :metaDescription="$metaDescription">
    <x-hero-section
        title="Onze kandidaten"
        subtitle="Betrokken Barendrechters. Geen beroepspolitici."
    />

    {{-- Ons team intro --}}
    <section class="py-10 md:py-14">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <h2 class="text-xl md:text-2xl font-extrabold text-white">Ons team</h2>
            <p class="mt-3 text-white/85 text-sm md:text-base leading-relaxed max-w-2xl">
                Samen Barendrecht wordt gedragen door betrokken Barendrechters met diverse achtergronden.
                Wij zijn geen beroepspolitici — wij zijn uw buren, collega’s en medeouders op het schoolplein.
            </p>
        </div>
    </section>

    {{-- Lijsttrekker --}}
    <section class="py-6 md:py-8">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <article class="rounded-2xl border border-accent/30 bg-marine-light/40 overflow-hidden">
                <div class="p-6 md:p-10">
                    <div class="flex flex-wrap items-start gap-4 md:gap-6">
                        <div class="w-14 h-14 rounded-xl bg-accent/20 border border-accent/40 flex items-center justify-center text-accent font-bold text-xl flex-shrink-0">
                            1
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm uppercase tracking-wider text-accent font-semibold">Lijsttrekker</p>
                            <p class="text-white/60 text-sm mt-1">Naam, foto en achtergrond volgen zodra de kandidatenlijst is vastgesteld.</p>
                            <blockquote class="mt-6 pl-0 md:pl-4 border-l-0 md:border-l-4 border-accent/50">
                                <p class="text-white/90 text-base md:text-lg leading-relaxed italic">
                                    “Ik wil dat de gemeente doet wat zij belooft. Dat inwoners weten waar ze aan toe zijn. En dat
                                    iedereen — ongeacht achtergrond — gelijk wordt behandeld. Dat is geen idealisme, dat is goed
                                    bestuur.”
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    {{-- Overige kandidaten 2–7 --}}
    <section class="py-8 md:py-12 border-t border-white/10">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="rounded-2xl border border-white/10 bg-marine-light/25 p-6 md:p-8">
                <div class="flex items-center gap-3 mb-6">
                    <span class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center text-white/80 font-bold text-sm">2–7</span>
                    <h2 class="text-lg md:text-xl font-extrabold text-white">Overige kandidaten</h2>
                </div>
                <p class="text-white/80 text-sm md:text-base leading-relaxed mb-6">
                    De kandidatenlijst wordt aangevuld zodra deze definitief is vastgesteld.
                </p>
                <div class="rounded-xl bg-marine-light/40 border border-white/10 border-dashed p-5 text-white/70 text-sm md:text-base leading-relaxed">
                    <p class="font-semibold text-white/90 mb-2">Voorbeeld invulling:</p>
                    <p>[Naam] — Nr. [X]</p>
                    <p class="mt-1">[Beroep/achtergrond]. Woont in [wijk].</p>
                    <p class="mt-2 italic">“[Persoonlijke motivatie in 1–2 zinnen, liefst met lokale connectie.]”</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-12 md:py-16 bg-marine-light/20 border-t border-white/10">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6 text-center">
            <p class="text-white/85 text-sm md:text-base mb-6">Meer weten over onze standpunten of meedoen?</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('standpunten') }}" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-light text-marine font-bold px-5 py-2.5 rounded-lg text-sm transition-colors">
                    Bekijk standpunten
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="{{ route('volunteer') }}" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 border border-white/20 text-white font-semibold px-5 py-2.5 rounded-lg text-sm transition-colors">
                    Word vrijwilliger
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
