<x-app-layout metaTitle="Samen Barendrecht — Daadkrachtig • Rechtszekerheid • Verbindend" metaDescription="Samen Barendrecht: de lokale partij voor eerlijk bestuur, rechtszekerheid en meetbare resultaten. Stem 18 maart 2026.">
    @php
        $heroImage = 'https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?w=1920&q=80';
    @endphp
    <x-hero-section
        title="Barendrecht verdient eerlijk bestuur."
        subtitle="Daadkrachtig. Rechtszekerheid. Verbindend."
        :image="$heroImage"
        ctaText="Bekijk onze standpunten"
        ctaUrl="{{ route('standpunten') }}"
    >
        <x-slot:countdown>
            <p class="text-white/90 text-sm md:text-base font-medium mb-4">Nog tot de verkiezingen</p>
            <div id="countdown" class="flex flex-wrap justify-center gap-3 md:gap-5">
                <div class="countdown-box">
                    <span id="countdown-days" class="countdown-number">--</span>
                    <span class="countdown-label">Dagen</span>
                </div>
                <div class="countdown-box">
                    <span id="countdown-hours" class="countdown-number">--</span>
                    <span class="countdown-label">Uren</span>
                </div>
                <div class="countdown-box">
                    <span id="countdown-minutes" class="countdown-number">--</span>
                    <span class="countdown-label">Min</span>
                </div>
                <div class="countdown-box">
                    <span id="countdown-seconds" class="countdown-number">--</span>
                    <span class="countdown-label">Sec</span>
                </div>
            </div>
            <p class="text-accent font-bold mt-4 text-sm md:text-base">18 maart 2026</p>
        </x-slot:countdown>
    </x-hero-section>

    {{-- Intro onder de hero --}}
    <section class="py-8 md:py-10">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="max-w-3xl">
                <p class="text-white/85 text-sm md:text-base leading-relaxed">
                    Samen Barendrecht is de nieuwe politieke partij die staat voor een gemeente die haar beloftes nakomt,
                    u als inwoner serieus neemt en uw rechten beschermt. Geen holle woorden — meetbare resultaten.
                </p>
            </div>
        </div>
    </section>

    {{-- 48-uurgarantie --}}
    <section class="py-12 md:py-16">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="rounded-2xl bg-[#EBF5FB] text-marine border border-accent/40 px-6 py-8 md:px-10 md:py-10 flex flex-col md:flex-row gap-6 md:gap-10 items-start">
                <div class="flex-shrink-0">
                    <div class="w-16 h-16 rounded-full bg-accent/10 border border-accent/40 flex items-center justify-center">
                        <svg class="w-9 h-9 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 8v4l3 3m4-3a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <p class="text-sm font-semibold tracking-wider uppercase text-accent">Onze 48-uurgarantie</p>
                    <h2 class="mt-2 text-2xl md:text-3xl font-extrabold text-marine">Binnen 48 uur een inhoudelijke reactie</h2>
                    <p class="mt-3 text-marine/90 text-sm md:text-base leading-relaxed">
                        Doet u een melding of klacht bij de gemeente? Dan ontvangt u binnen 48 uur geen standaard ontvangstbevestiging,
                        maar een inhoudelijke reactie: de status van uw melding, het verwachte tijdspad en een contactpersoon.
                    </p>
                    <p class="mt-3 text-marine/80 text-sm md:text-base leading-relaxed">
                        Dat is wat wij bedoelen met rechtszekerheid. Niet meer beloven dan je kunt waarmaken — maar wat je belooft, ook dóen.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Waar u ons op mag afrekenen --}}
    <section class="py-12 md:py-16 bg-marine-light/20">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="text-center mb-10 md:mb-12">
                <p class="text-accent font-semibold text-sm uppercase tracking-wider">Vijf beloftes</p>
                <h2 class="mt-2 text-2xl md:text-3xl font-extrabold">Waar u ons op mag afrekenen</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                <div class="rounded-2xl bg-marine-light/40 border border-white/10 p-6 flex flex-col h-full">
                    <span class="text-accent text-xs font-semibold uppercase tracking-wider">Belofte 1</span>
                    <h3 class="mt-2 text-lg font-bold text-white">48-uurgarantie</h3>
                    <p class="mt-2 text-white/80 text-sm leading-relaxed">
                        Elke melding binnen 48 uur inhoudelijk beantwoord met status, planning en een vaste contactpersoon.
                    </p>
                </div>
                <div class="rounded-2xl bg-marine-light/40 border border-white/10 p-6 flex flex-col h-full">
                    <span class="text-accent text-xs font-semibold uppercase tracking-wider">Belofte 2</span>
                    <h3 class="mt-2 text-lg font-bold text-white">Rechtszekerheid</h3>
                    <p class="mt-2 text-white/80 text-sm leading-relaxed">
                        De gemeente wijzigt geen regels halverwege een lopend vergunnings- of bezwaartraject.
                    </p>
                </div>
                <div class="rounded-2xl bg-marine-light/40 border border-white/10 p-6 flex flex-col h-full">
                    <span class="text-accent text-xs font-semibold uppercase tracking-wider">Belofte 3</span>
                    <h3 class="mt-2 text-lg font-bold text-white">Geen kaalslag buitenruimte</h3>
                    <p class="mt-2 text-white/80 text-sm leading-relaxed">
                        We bezuinigen niet op onderhoud van straten, groen en verlichting.
                    </p>
                </div>
                <div class="rounded-2xl bg-marine-light/40 border border-white/10 p-6 flex flex-col h-full">
                    <span class="text-accent text-xs font-semibold uppercase tracking-wider">Belofte 4</span>
                    <h3 class="mt-2 text-lg font-bold text-white">Woonvoorrang</h3>
                    <p class="mt-2 text-white/80 text-sm leading-relaxed">
                        Minimaal 30% nieuwbouw toegewezen aan Barendrechtse starters en mensen met lokale binding.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Oproep tot actie --}}
    <section class="py-16 md:py-20 bg-marine-light/30">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="rounded-2xl bg-marine-light/60 border border-white/10 px-6 py-10 md:px-10 md:py-12 text-center md:text-left">
                <div class="max-w-3xl mx-auto">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-white">Doe mee met Samen Barendrecht</h2>
                    <p class="mt-3 text-white/80 text-sm md:text-base leading-relaxed">
                        Barendrecht verdient een gemeente die luistert, uitlegt en levert. Help ons dat waar te maken.
                    </p>
                    <div class="mt-6 flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center md:justify-start">
                        <a href="{{ route('volunteer') }}" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-marine font-bold px-6 py-3 rounded-lg text-sm md:text-base transition-colors">
                            Word vrijwilliger
                        </a>
                        <a href="{{ route('donate') }}" class="inline-flex items-center justify-center gap-2 border border-accent text-accent hover:bg-accent hover:text-marine font-bold px-6 py-3 rounded-lg text-sm md:text-base transition-colors">
                            Doneer aan de campagne
                        </a>
                        <a href="{{ route('programma') }}" class="inline-flex items-center justify-center gap-2 text-accent hover:text-accent-light font-bold px-6 py-3 rounded-lg text-sm md:text-base transition-colors">
                            Download het programma
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Thema's snelnavigatie --}}
    <section class="py-16 md:py-20">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="text-center mb-10 md:mb-12">
                <p class="text-accent font-semibold text-sm uppercase tracking-wider">Onze standpunten</p>
                <h2 class="mt-2 text-2xl md:text-3xl font-extrabold">Klik op een thema om meer te lezen</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                @php
                    $themas = [
                        ['label' => 'Wonen & Doorstroming', 'anchor' => 'wonen'],
                        ['label' => 'Jongeren & Sport', 'anchor' => 'jongeren'],
                        ['label' => 'Eerlijk Bestuur & Rechtszekerheid', 'anchor' => 'bestuur'],
                        ['label' => 'Buitenruimte, Riolering & Afval', 'anchor' => 'buitenruimte'],
                        ['label' => 'Veiligheid & Verkeer', 'anchor' => 'veiligheid'],
                        ['label' => 'Financiën & Lokale Lasten', 'anchor' => 'financien'],
                        ['label' => 'Gezond Ondernemersklimaat', 'anchor' => 'ondernemen'],
                        ['label' => 'Zorg & Welzijn', 'anchor' => 'zorg'],
                        ['label' => 'Regionale Samenwerking', 'anchor' => 'regio'],
                        ['label' => 'Communicatie & Burgerparticipatie', 'anchor' => 'communicatie'],
                    ];
                @endphp
                @foreach($themas as $thema)
                    <a href="{{ route('standpunten') }}#{{ $thema['anchor'] }}"
                       class="group rounded-2xl border border-white/10 bg-marine-light/30 hover:border-accent/40 hover:bg-marine-light/50 transition-all duration-200 p-4 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-accent/15 flex items-center justify-center text-accent flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                        <span class="text-white font-medium group-hover:text-accent transition-colors text-sm md:text-base">{{ $thema['label'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Campagne in beeld: 3 speelse afbeeldingen (optioneel laten staan als visuele sfeer) --}}
    <section class="py-12 md:py-16">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <p class="text-center text-accent font-semibold text-sm uppercase tracking-wider mb-8">Campagne in beeld</p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6">
                <a href="{{ route('about') }}" class="group group/img block rounded-2xl overflow-hidden border border-white/10 hover:border-accent/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-accent/10">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=500&q=80" alt="Samen" class="w-full h-full object-cover group-hover/img:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-marine/80 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-accent/90 rounded-tl-full"></div>
                        <span class="absolute bottom-3 left-3 right-3 text-white font-bold text-sm drop-shadow-lg">Samen sterk</span>
                    </div>
                </a>
                <a href="{{ route('agenda.index') }}" class="group group/img block rounded-2xl overflow-hidden border border-white/10 hover:border-accent/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-accent/10">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?w=500&q=80" alt="Actie" class="w-full h-full object-cover group-hover/img:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-marine/80 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-accent/90 rounded-tl-full"></div>
                        <span class="absolute bottom-3 left-3 right-3 text-white font-bold text-sm drop-shadow-lg">In actie</span>
                    </div>
                </a>
                <a href="{{ route('contact') }}" class="group group/img block rounded-2xl overflow-hidden border border-white/10 hover:border-accent/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-accent/10">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=500&q=80" alt="Contact" class="w-full h-full object-cover group-hover/img:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-marine/80 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-accent/90 rounded-tl-full"></div>
                        <span class="absolute bottom-3 left-3 right-3 text-white font-bold text-sm drop-shadow-lg">Doe mee</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Nieuws --}}
    <section class="py-20 md:py-28 relative">
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-accent/50 to-transparent"></div>
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-14">
                <div>
                    <span class="text-accent font-semibold text-sm uppercase tracking-wider">Nieuws</span>
                    <h2 class="mt-2 text-3xl md:text-4xl lg:text-5xl font-extrabold text-white">Laatste van de campagne</h2>
                    <p class="mt-3 text-white/80 max-w-xl">Blijf op de hoogte van onze plannen en activiteiten.</p>
                </div>
                <a href="{{ route('news.index') }}" class="inline-flex items-center gap-2 text-accent font-bold hover:text-accent-light transition-colors shrink-0">
                    Alle nieuws
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            @if($posts->isNotEmpty())
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    @foreach($posts as $post)
                        <x-news-card :post="$post" />
                    @endforeach
                </div>
            @else
                <div class="rounded-2xl border border-white/10 bg-marine-light/30 p-12 text-center">
                    <p class="text-white/60">Binnenkort verschijnen hier onze nieuwsberichten.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- Waarom Samen Barendrecht: 3 blokken met afbeeldingen --}}
    <section class="py-20 md:py-28 relative bg-marine-light/20 overflow-hidden">
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-accent/50 to-transparent"></div>
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="text-center mb-14">
                <span class="text-accent font-semibold text-sm uppercase tracking-wider">Onze waarden</span>
                <h2 class="mt-2 text-3xl md:text-4xl font-extrabold text-white">Daadkrachtig • Verbindend • Rechtvaardig</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-6 md:gap-8">
                <div class="rounded-2xl overflow-hidden border border-white/10 bg-marine-light/40 hover:border-accent/30 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-fade-in-up">
                    <div class="relative aspect-[3/2] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1507676184212-d03ab07a01bf?w=500&q=80" alt="Daadkrachtig" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-marine via-marine/50 to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-accent font-bold">Daadkrachtig</span>
                    </div>
                    <p class="p-4 text-white/85 text-sm">Beslissingen die ertoe doen. Geen eindeloze discussie, maar heldere keuzes voor Barendrecht.</p>
                </div>
                <div class="rounded-2xl overflow-hidden border border-white/10 bg-marine-light/40 hover:border-accent/30 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-fade-in-up">
                    <div class="relative aspect-[3/2] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=500&q=80" alt="Verbindend" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-marine via-marine/50 to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-accent font-bold">Verbindend</span>
                    </div>
                    <p class="p-4 text-white/85 text-sm">We verbinden inwoners, ondernemers en organisaties. Samen maken we Barendrecht sterker.</p>
                </div>
                <div class="rounded-2xl overflow-hidden border border-white/10 bg-marine-light/40 hover:border-accent/30 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-fade-in-up">
                    <div class="relative aspect-[3/2] overflow-hidden bg-gradient-to-br from-marine via-marine-light/30 to-marine flex items-center justify-center">
                        <svg class="w-2/5 h-2/5 text-accent/60" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                        <div class="absolute inset-0 bg-gradient-to-t from-marine via-marine/50 to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-accent font-bold">Rechtvaardig</span>
                    </div>
                    <p class="p-4 text-white/85 text-sm">Eerlijke kansen voor iedereen. Betaalbaar wonen, goede voorzieningen en een leefbare omgeving.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Agenda --}}
    <section class="py-20 md:py-28 relative">
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-accent/50 to-transparent"></div>
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-14">
                <div>
                    <span class="text-accent font-semibold text-sm uppercase tracking-wider">Agenda</span>
                    <h2 class="mt-2 text-3xl md:text-4xl lg:text-5xl font-extrabold text-white">Kom in actie</h2>
                    <p class="mt-3 text-white/80 max-w-xl">Sluit je aan bij onze activiteiten en ontmoet ons.</p>
                </div>
                <a href="{{ route('agenda.index') }}" class="inline-flex items-center gap-2 text-accent font-bold hover:text-accent-light transition-colors shrink-0">
                    Volledige agenda
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            @if($events->isNotEmpty())
                <div class="space-y-4">
                    @foreach($events as $event)
                        <x-event-card :event="$event" />
                    @endforeach
                </div>
            @else
                <div class="rounded-2xl border border-white/10 bg-marine-light/30 p-12 text-center">
                    <p class="text-white/60">Binnenkort vind je hier onze geplande activiteiten.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- Banner: Doe mee --}}
    <section class="py-16 md:py-24">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <a href="{{ route('volunteer') }}" class="group block rounded-2xl overflow-hidden border border-white/10 hover:border-accent/40 transition-all duration-300 hover:shadow-2xl hover:shadow-accent/15">
                <div class="relative aspect-[21/9] min-h-[200px] md:min-h-[280px] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=1200&q=80" alt="Doe mee" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-marine/75"></div>
                    <div class="absolute bottom-0 right-0 w-40 h-40 bg-accent/90 rounded-tl-full"></div>
                    <div class="absolute inset-0 flex items-center justify-center md:justify-start md:pl-16">
                        <div class="text-center md:text-left px-4">
                            <h2 class="text-2xl md:text-4xl font-extrabold text-white">Samen voor Barendrecht</h2>
                            <p class="mt-2 text-white/90 text-lg">Word vrijwilliger of steun onze campagne. Elke bijdrage telt.</p>
                            <span class="inline-flex items-center gap-2 mt-4 text-accent font-bold">
                                Doe mee <span class="group-hover:translate-x-1 transition-transform">→</span>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <x-cta-section />

    @push('scripts')
    <script>
        (function() {
            var target = new Date('2026-03-18T00:00:00+01:00');
            function pad(n) { return n < 10 ? '0' + n : n; }
            function update() {
                var now = new Date();
                if (now >= target) {
                    document.getElementById('countdown-days').textContent = '0';
                    document.getElementById('countdown-hours').textContent = '0';
                    document.getElementById('countdown-minutes').textContent = '0';
                    document.getElementById('countdown-seconds').textContent = '0';
                    return;
                }
                var d = Math.floor((target - now) / 86400000);
                var h = Math.floor(((target - now) % 86400000) / 3600000);
                var m = Math.floor(((target - now) % 3600000) / 60000);
                var s = Math.floor(((target - now) % 60000) / 1000);
                document.getElementById('countdown-days').textContent = d;
                document.getElementById('countdown-hours').textContent = pad(h);
                document.getElementById('countdown-minutes').textContent = pad(m);
                document.getElementById('countdown-seconds').textContent = pad(s);
            }
            update();
            setInterval(update, 1000);
        })();
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) entry.target.classList.add('visible');
                });
            }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
            document.querySelectorAll('.animate-fade-in-up').forEach(function(el) { observer.observe(el); });
        });
    </script>
    @endpush
</x-app-layout>
