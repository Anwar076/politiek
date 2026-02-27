<x-app-layout :metaTitle="$metaTitle" :metaDescription="$metaDescription">
    <x-hero-section
        title="Wie zijn wij?"
        subtitle="Samen Barendrecht: eerlijk bestuur, rechtszekerheid en een gemeente die werkt voor alle Barendrechters."
        image="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=1920&q=80"
    />

    {{-- Intro met afbeelding --}}
    <section class="py-16 md:py-24">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="flex flex-col lg:flex-row gap-10 lg:gap-14 items-center">
                <div class="flex-shrink-0 w-full lg:w-2/5">
                    <div class="relative rounded-2xl overflow-hidden border border-white/10 shadow-xl">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&q=80" alt="Team Samen Barendrecht" class="w-full aspect-[4/3] object-cover">
                        <div class="absolute bottom-0 right-0 w-24 h-24 bg-accent/90 rounded-tl-full"></div>
                    </div>
                    <div class="relative -mt-6 ml-6">
                        <div class="rounded-xl bg-marine-light/80 border border-white/10 p-4 backdrop-blur">
                            <p class="text-white/90 text-sm font-medium">Samen maken we het verschil in Barendrecht.</p>
                        </div>
                    </div>
                </div>
                <div class="flex-grow">
                    <span class="text-accent font-semibold text-sm uppercase tracking-wider">Wie wij zijn</span>
                    <h2 class="mt-2 text-2xl md:text-3xl font-extrabold text-white">Een nieuwe, onafhankelijke lokale partij</h2>
                    <p class="mt-4 text-white/85 leading-relaxed">
                        Samen Barendrecht is een nieuwe, onafhankelijke lokale partij. Wij zijn opgericht uit overtuiging:
                        Barendrecht verdient bestuurders die luisteren, eerlijk zijn en hun beloftes nakomen.
                    </p>
                    <p class="mt-4 text-white/80 leading-relaxed">
                        Wij zijn geen afsplitsing van een bestaande partij en zijn niet gebonden aan landelijke fracties.
                        Onze loyaliteit ligt bij één plek: Barendrecht.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Waarom nu? --}}
    <section class="py-12 md:py-16 bg-marine-light/30">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-start">
                <div>
                    <span class="text-accent font-semibold text-sm uppercase tracking-wider">Waarom nu?</span>
                    <h2 class="mt-2 text-2xl md:text-3xl font-extrabold text-white">Waarom een nieuwe partij?</h2>
                </div>
                <div class="space-y-4 text-white/80 text-sm md:text-base leading-relaxed">
                    <p>
                        Barendrecht wordt al jaren bestuurd door één partij met een absolute meerderheid. Dat is niet per definitie
                        slecht — maar het vraagt om tegenmacht. Om een partij die kritisch meekijkt, alternatieven aandraagt en het
                        college scherp houdt.
                    </p>
                    <p>
                        Wij zien dat het vertrouwen in het bestuur onder druk staat. Besluiten worden niet altijd goed uitgelegd.
                        Regels veranderen halverwege processen. En inwoners voelen zich niet gehoord.
                    </p>
                    <p>
                        Daar willen wij verandering in brengen. Niet door te schreeuwen, maar door te luisteren, uit te leggen en te leveren.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Kernwaarden: 3 speelse blokken --}}
    <section class="py-16 md:py-24 bg-marine-light/20">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold text-sm uppercase tracking-wider">Onze drie kernwaarden</span>
                <h2 class="mt-2 text-3xl md:text-4xl font-extrabold text-white">Daadkrachtig • Rechtszekerheid • Verbindend</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-6 md:gap-8">
                <div class="rounded-2xl p-6 md:p-8 bg-marine-light/40 border border-white/10 hover:border-accent/30 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-accent/10">
                    <div class="w-14 h-14 rounded-2xl bg-accent/25 flex items-center justify-center text-accent border border-accent/40 mb-5">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">Daadkrachtig</h3>
                    <p class="mt-3 text-white/80 text-sm leading-relaxed">
                        Wij pakken problemen aan in plaats van ze door te schuiven. Geen eindeloos vergaderen, maar knopen doorhakken.
                    </p>
                </div>
                <div class="rounded-2xl p-6 md:p-8 bg-marine-light/40 border border-white/10 hover:border-accent/30 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-accent/10">
                    <div class="w-14 h-14 rounded-2xl bg-accent/25 flex items-center justify-center text-accent border border-accent/40 mb-5">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">Rechtszekerheid</h3>
                    <p class="mt-3 text-white/80 text-sm leading-relaxed">
                        De gemeente houdt zich aan haar eigen regels. Geen willekeur, geen verrassingen halverwege. Wat de gemeente belooft, maakt zij waar.
                    </p>
                </div>
                <div class="rounded-2xl p-6 md:p-8 bg-marine-light/40 border border-white/10 hover:border-accent/30 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-accent/10">
                    <div class="w-14 h-14 rounded-2xl bg-accent/25 flex items-center justify-center text-accent border border-accent/40 mb-5">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">Verbindend</h3>
                    <p class="mt-3 text-white/80 text-sm leading-relaxed">
                        Wij brengen mensen samen. Barendrecht is van iedereen — ongeacht achtergrond, geloof of leeftijd.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Onze aanpak + missie --}}
    <section class="py-16 md:py-24">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="rounded-2xl overflow-hidden border border-white/10 bg-marine-light/30 flex flex-col lg:flex-row">
                <div class="lg:w-2/5 flex-shrink-0 flex items-center justify-center bg-gradient-to-br from-marine via-marine-light/30 to-marine min-h-[280px]">
                    <svg class="w-1/3 h-1/3 max-w-[180px] text-accent/50" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <div class="p-8 md:p-10 lg:p-12 flex flex-col justify-center">
                    <span class="text-accent font-semibold text-sm uppercase tracking-wider">Onze missie</span>
                    <h2 class="mt-2 text-2xl md:text-3xl font-extrabold text-white">Samen voor Barendrecht</h2>
                    <p class="mt-4 text-white/85 leading-relaxed">
                        We willen Barendrecht besturen met oog voor de inwoner, het midden- en kleinbedrijf en een leefbare, groene omgeving. Een gemeente waar het goed wonen, werken en ondernemen is. Waar voorzieningen dichtbij zijn en waar we zuinig zijn op onze natuur en openbare ruimte.
                    </p>
                    <p class="mt-4 text-white/80 leading-relaxed">
                        Met Samen Barendrecht kiest u voor een frisse stem in de raad: geen partijpolitiek van buitenaf, maar lokaal gedacht en lokaal gedaan. Samen voor Barendrecht.
                    </p>
                    <div class="mt-6 space-y-3 text-white/80 text-sm md:text-base leading-relaxed">
                        <p class="font-semibold">Hoe wij politiek bedrijven</p>
                        <p>
                            Wij geloven in meetbaar bestuur. Daarom benoemen wij in ons programma tien concrete doelen waar u ons na vier jaar op kunt afrekenen.
                            Elk kwartaal leggen wij publiek verantwoording af.
                        </p>
                        <p>
                            Wij geloven in rechtszekerheid. Als de gemeente u een vergunning verleent, mag zij halverwege de regels niet veranderen.
                            Als u een melding doet, heeft u recht op een inhoudelijk antwoord. Dit klinkt vanzelfsprekend — maar het is het niet.
                        </p>
                        <p>
                            Wij geloven in eerlijke politiek. Wij nemen standpunten in op gevoelige dossiers, ook als dat niet populair is.
                            Wij leggen uit waarom, en gaan het gesprek aan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Waarom Samen Barendrecht - 2 kolommen met afbeelding --}}
    <section class="py-16 md:py-24 bg-marine-light/20">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">
                <div>
                    <span class="text-accent font-semibold text-sm uppercase tracking-wider">Waarom Samen Barendrecht</span>
                    <h2 class="mt-2 text-2xl md:text-3xl font-extrabold text-white">Lokaal gedacht, lokaal gedaan</h2>
                    <p class="mt-4 text-white/85 leading-relaxed">
                        Wij zijn geen landelijke partij met een verhaal van bovenaf. Wij zijn Barendrechters die meedoen, meedenken en meebeslissen. Onze kandidaten ken je uit de buurt, de vereniging of het winkelcentrum. We staan voor transparantie en bereikbaarheid.
                    </p>
                    <ul class="mt-6 space-y-3">
                        <li class="flex items-start gap-3 text-white/85">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/30 flex items-center justify-center text-accent text-xs font-bold">1</span>
                            <span>Een programma dat past bij wat inwoners en ondernemers nodig hebben.</span>
                        </li>
                        <li class="flex items-start gap-3 text-white/85">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/30 flex items-center justify-center text-accent text-xs font-bold">2</span>
                            <span>Kandidaten die je kunt aanspreken en die meedenken.</span>
                        </li>
                        <li class="flex items-start gap-3 text-white/85">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-accent/30 flex items-center justify-center text-accent text-xs font-bold">3</span>
                            <span>Keuzes voor de lange termijn: duurzaam en rechtvaardig.</span>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden border border-white/10 shadow-xl">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=600&q=80" alt="Samen sterk" class="w-full aspect-[4/3] object-cover">
                    </div>
                    <div class="absolute -bottom-4 -right-4 w-20 h-20 bg-accent/90 rounded-tl-full rounded-br-full"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contactblok --}}
    <section class="py-16 md:py-24">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="rounded-2xl p-8 md:p-12 bg-marine-light/40 border border-white/10 text-center">
                <h2 class="text-2xl md:text-3xl font-extrabold text-white">Meedoen of meer weten?</h2>
                <p class="mt-3 text-white/85 max-w-xl mx-auto">Neem gerust contact met ons op of word vrijwilliger. We horen graag van u.</p>
                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-light text-marine font-bold px-6 py-3 rounded-xl transition-colors">
                        Contact
                        <span>→</span>
                    </a>
                    <a href="{{ route('volunteer') }}" class="inline-flex items-center gap-2 border-2 border-accent text-accent hover:bg-accent hover:text-marine font-bold px-6 py-3 rounded-xl transition-colors">
                        Word vrijwilliger
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Lijsttrekker placeholder --}}
    <section class="py-12 md:py-16">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="rounded-2xl bg-marine-light/30 border border-dashed border-white/20 p-6 md:p-8">
                <p class="text-accent font-semibold text-sm uppercase tracking-wider mb-2">Lijsttrekker</p>
                <p class="text-white/80 text-sm md:text-base leading-relaxed">
                    Tekst en profiel van de lijsttrekker (Cihat) worden hier toegevoegd zodra de definitieve input beschikbaar is.
                </p>
            </div>
        </div>
    </section>

    <x-cta-section />
</x-app-layout>
