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
                Wij zijn geen beroepspolitici <span class="text-em-dash">—</span> wij zijn uw buren, collega’s en medeouders op het schoolplein.
            </p>
        </div>
    </section>

    {{-- Lijsttrekker: Cihat Demir --}}
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
                            <h3 class="text-xl md:text-2xl font-bold text-white mt-1">Demir, C. (Cihat)</h3>
                            <blockquote class="mt-6 pl-0 md:pl-4 border-l-0 md:border-l-4 border-accent/50">
                                <p class="text-white/90 text-base md:text-lg leading-relaxed italic">
                                    “Ik wil dat de gemeente doet wat zij belooft. Dat inwoners weten waar ze aan toe zijn. En dat
                                    iedereen <span class="text-em-dash">—</span> ongeacht achtergrond <span class="text-em-dash">—</span> gelijk wordt behandeld. Dat is geen idealisme, dat is goed
                                    bestuur.”
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    {{-- Kandidaten 2–7 --}}
    <section class="py-8 md:py-12 border-t border-white/10">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <h2 class="text-lg md:text-xl font-extrabold text-white mb-6">Overige kandidaten</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach([
                    ['nr' => 2, 'naam' => 'Pereira, E. (Elvis)'],
                    ['nr' => 3, 'naam' => 'Hooimeijer, D.C. (Daan)'],
                    ['nr' => 4, 'naam' => 'Baddou, K. (Karima)'],
                    ['nr' => 5, 'naam' => 'Adbaili, R. (Rachid)'],
                    ['nr' => 6, 'naam' => 'Datadin, S.B. (Simrah)'],
                    ['nr' => 7, 'naam' => 'Kassrioui, K. (Khalid)'],
                ] as $kandidaat)
                    <div class="rounded-xl border border-white/10 bg-marine-light/30 p-4 flex items-center gap-4 hover:border-accent/30 transition-colors">
                        <span class="w-10 h-10 rounded-lg bg-accent/20 border border-accent/40 flex items-center justify-center text-accent font-bold text-sm flex-shrink-0">
                            {{ $kandidaat['nr'] }}
                        </span>
                        <p class="text-white font-medium">{{ $kandidaat['naam'] }}</p>
                    </div>
                @endforeach
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
