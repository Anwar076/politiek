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
                Wij zijn geen beroepspolitici <span class="text-em-dash">—</span> wij zijn uw buren, collega's en medeouders op het schoolplein.
            </p>
        </div>
    </section>

    <div x-data="{ lightbox: null }" @keydown.escape.window="lightbox = null">
        {{-- Lijsttrekker: Cihat Demir --}}
        @php
            $demirFoto = asset('images/' . rawurlencode('Demir, C. (Cihat).png'));
        @endphp
        <section class="py-6 md:py-8">
            <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
                <article class="rounded-2xl border border-accent/30 bg-marine-light/40 overflow-hidden shadow-lg">
                    <div class="p-6 md:p-10">
                        <div class="flex flex-col md:flex-row items-start gap-8">
                            <div class="w-full md:w-56 flex-shrink-0">
                                <button
                                    type="button"
                                    @click="lightbox = { src: '{{ $demirFoto }}', naam: 'Demir, C. (Cihat)' }"
                                    class="block w-full text-left focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-marine rounded-xl overflow-hidden group"
                                    aria-label="Vergroot foto van Cihat Demir"
                                >
                                    <div class="relative aspect-square rounded-xl overflow-hidden border-2 border-accent/30 group-hover:border-accent/60 transition-colors">
                                        <img
                                            src="{{ $demirFoto }}"
                                            alt="Cihat Demir – Lijsttrekker"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                        />
                                        <span class="absolute bottom-2 right-2 w-8 h-8 rounded-lg bg-accent/90 text-marine font-bold text-sm flex items-center justify-center shadow">1</span>
                                        <span class="absolute inset-0 flex items-center justify-center bg-black/0 group-hover:bg-black/20 transition-colors">
                                            <i class="fa-solid fa-search-plus text-white text-2xl opacity-0 group-hover:opacity-100 transition-opacity"></i>
                                        </span>
                                    </div>
                                </button>
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
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6">
                    @foreach([
                        ['nr' => 2, 'naam' => 'Pereira, E. (Elvis)', 'foto' => 'Pereira, E. (Elvis).png'],
                        ['nr' => 3, 'naam' => 'Hooimeijer, D.C. (Daan)', 'foto' => 'Hooimeijer, D.C. (Daan).png'],
                        ['nr' => 4, 'naam' => 'Baddou, K. (Karima)', 'foto' => 'Baddou, K (Karima).png'],
                        ['nr' => 5, 'naam' => 'Adbaili, R. (Rachid)', 'foto' => 'Adbaili, R (Rachid).png'],
                        ['nr' => 6, 'naam' => 'Datadin, S.B. (Simrah)', 'foto' => null],
                        ['nr' => 7, 'naam' => 'Kassrioui, K. (Khalid)', 'foto' => 'Kassrioui, K. (Khalid).png'],
                    ] as $kandidaat)
                        @php
                            $fotoUrl = $kandidaat['foto'] ? asset('images/' . rawurlencode($kandidaat['foto'])) : null;
                        @endphp
                        <div class="rounded-2xl border border-white/10 bg-marine-light/30 overflow-hidden hover:border-accent/40 hover:shadow-lg hover:shadow-accent/5 transition-all duration-300">
                            @if($fotoUrl)
                                <button
                                    type="button"
                                    @click="lightbox = { src: '{{ $fotoUrl }}', naam: '{{ addslashes($kandidaat['naam']) }}' }"
                                    class="block w-full text-left focus:outline-none focus:ring-2 focus:ring-accent focus:ring-inset rounded-t-2xl overflow-hidden group"
                                    aria-label="Vergroot foto van {{ $kandidaat['naam'] }}"
                                >
                                    <div class="relative aspect-[4/5] overflow-hidden">
                                        <img
                                            src="{{ $fotoUrl }}"
                                            alt="{{ $kandidaat['naam'] }}"
                                            class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-300"
                                        />
                                        <span class="absolute top-3 left-3 w-9 h-9 rounded-lg bg-accent/90 text-marine font-bold text-sm flex items-center justify-center shadow">
                                            {{ $kandidaat['nr'] }}
                                        </span>
                                        <span class="absolute inset-0 flex items-center justify-center bg-black/0 group-hover:bg-black/30 transition-colors">
                                            <i class="fa-solid fa-search-plus text-white text-3xl opacity-0 group-hover:opacity-100 transition-opacity drop-shadow"></i>
                                        </span>
                                    </div>
                                </button>
                            @else
                                <div class="relative aspect-[4/5] bg-marine-light/50 flex items-center justify-center">
                                    <span class="w-16 h-16 rounded-xl bg-accent/20 border-2 border-accent/40 flex items-center justify-center text-accent font-bold text-2xl">
                                        {{ $kandidaat['nr'] }}
                                    </span>
                                </div>
                            @endif
                            <div class="p-4 flex items-center gap-3">
                                @if(!$fotoUrl)
                                    <span class="w-8 h-8 rounded-lg bg-accent/20 border border-accent/40 flex items-center justify-center text-accent font-bold text-sm flex-shrink-0">{{ $kandidaat['nr'] }}</span>
                                @endif
                                <p class="text-white font-semibold text-sm md:text-base">{{ $kandidaat['naam'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Lightbox overlay --}}
        <div
            x-show="lightbox"
            x-cloak
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-[100] flex items-center justify-center p-4"
            role="dialog"
            aria-modal="true"
        >
            <div class="absolute inset-0 bg-black/85 backdrop-blur-sm" @click="lightbox = null"></div>
            <div class="relative z-10 max-w-4xl w-full max-h-[90vh] flex flex-col items-center" @click.stop>
                <button
                    type="button"
                    @click="lightbox = null"
                    class="absolute -top-12 right-0 md:right-4 w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors focus:outline-none focus:ring-2 focus:ring-white"
                    aria-label="Sluiten"
                >
                    <i class="fa-solid fa-times text-lg"></i>
                </button>
                <p class="text-white font-semibold text-lg mb-3 text-center" x-text="lightbox ? lightbox.naam : ''"></p>
                <div class="rounded-xl overflow-hidden shadow-2xl ring-2 ring-white/20 max-w-2xl w-full bg-marine-light/30">
                    <img
                        x-show="lightbox"
                        :src="lightbox ? lightbox.src : ''"
                        :alt="lightbox ? 'Foto van ' + lightbox.naam : ''"
                        class="w-full h-auto max-h-[75vh] object-contain"
                    />
                </div>
                <p class="text-white/70 text-sm mt-3">Klik buiten de foto of druk op Escape om te sluiten</p>
            </div>
        </div>
    </div>

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
