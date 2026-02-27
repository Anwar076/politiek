<x-app-layout :metaTitle="$metaTitle" :metaDescription="$metaDescription">
    <x-hero-section
        title="Waar staan wij voor?"
        subtitle="Tien thema’s. Concreet, eerlijk en meetbaar."
    />

    {{-- Intro --}}
    <section class="py-10 md:py-14">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <p class="text-white/85 text-sm md:text-base leading-relaxed max-w-2xl">
                Hieronder vindt u onze standpunten op tien thema’s. Wij zijn concreet, eerlijk en meetbaar.
                Klik op een thema voor meer details.
            </p>
        </div>
    </section>

    {{-- Snelnavigatie: ankerlinks --}}
    <section class="py-4 pb-8 md:pb-10 border-b border-white/10">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <p class="text-accent font-semibold text-xs uppercase tracking-wider mb-4">Naar thema</p>
            <div class="flex flex-wrap gap-2">
                @foreach([
                    ['label' => 'Wonen', 'id' => 'wonen'],
                    ['label' => 'Jongeren & Sport', 'id' => 'jongeren'],
                    ['label' => 'Bestuur', 'id' => 'bestuur'],
                    ['label' => 'Buitenruimte', 'id' => 'buitenruimte'],
                    ['label' => 'Veiligheid', 'id' => 'veiligheid'],
                    ['label' => 'Financiën', 'id' => 'financien'],
                    ['label' => 'Ondernemers', 'id' => 'ondernemen'],
                    ['label' => 'Zorg', 'id' => 'zorg'],
                    ['label' => 'Regio', 'id' => 'regio'],
                    ['label' => 'Communicatie', 'id' => 'communicatie'],
                ] as $item)
                    <a href="#{{ $item['id'] }}" class="inline-flex items-center px-3 py-1.5 rounded-lg bg-marine-light/50 border border-white/10 text-white/90 text-sm hover:border-accent/40 hover:text-accent transition-colors">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Thema's in kaarten --}}
    <section class="py-12 md:py-20">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6 space-y-8 md:space-y-10">
            @foreach([
                ['id' => 'wonen', 'num' => 1, 'title' => 'Wonen & Doorstroming', 'intro' => 'De wachttijd voor een sociale huurwoning is meer dan zeven jaar. Van de 6.300 jongvolwassenen wonen er 5.400 nog thuis. Dat moet anders.', 'items' => ['Minimaal 30% nieuwbouw voor Barendrechtse starters en cruciale beroepen.', 'Minimaal 200 extra betaalbare woningen in aanbouw deze raadsperiode.', 'Optoppen van bestaande flats: twee pilotprojecten.', 'Meer levensloopbestendige woningen voor ouderen.', 'Transparante toewijzingscriteria — dezelfde regels voor iedereen.']],
                ['id' => 'jongeren', 'num' => 2, 'title' => 'Jongeren & Sport', 'intro' => 'De helft van de Barendrechtse jongeren ervaart psychische klachten. De Jongerenraad is opgeheven. BLOK0180 staat onder druk. Wij nemen jongeren serieus.', 'items' => ['Digitaal Jongerenpanel — operationeel binnen 6 maanden.', 'BLOK0180 behouden met minimaal het huidige niveau.', 'Laagdrempelig spreekuur mentale gezondheid via scholen.', 'Oefenruimtes, veilige hangplekken en betaalbare sport.']],
                ['id' => 'bestuur', 'num' => 3, 'title' => 'Eerlijk Bestuur & Rechtszekerheid', 'intro' => 'Dit is de kern van onze partij. Rechtszekerheid betekent: de gemeente houdt zich aan haar eigen regels, behandelt iedereen gelijk, en verandert de spelregels niet tijdens de wedstrijd.', 'items' => ['48-uurgarantie: 90% van meldingen binnen 48 uur inhoudelijk beantwoord.', 'Nul regelwijzigingen bij lopende vergunningprocedures.', 'Kwartaalrapportages openbaar op de gemeentewebsite.', 'Raadsbesluiten helder uitgelegd, inclusief overwogen alternatieven.']],
                ['id' => 'buitenruimte', 'num' => 4, 'title' => 'Buitenruimte, Riolering & Afval', 'intro' => 'Tegels liggen los, verlichting is kapot, het riool in de dorpskern kan het niet aan. Waar anderen bezuinigen, investeren wij.', 'items' => ['Budget buitenruimte minimaal op niveau 2024 — géén bezuinigingen.', 'Rioolvernieuwingsplan dorpskern: vastgesteld binnen 12 maanden, eerste fase binnen 24 maanden.', 'Afvalscheidingspercentage naar 75%.', 'Uitbreiding mobiel afvalaanbiedstation.', 'Geen betaling per klepbeweging.']],
                ['id' => 'veiligheid', 'num' => 5, 'title' => 'Veiligheid & Verkeer', 'intro' => 'Een veilig Barendrecht voor iedereen, in elke wijk, op elk uur.', 'items' => ['Sterk jeugdwerk als eerste verdedigingslinie tegen overlast.', 'Maandelijks wijkspreekuur met wijkagent — zonder afspraak.', 'Betere fietsroutes naar scholen en stations.', 'Wijkverkeersplannen opgesteld samen met bewoners.']],
                ['id' => 'financien', 'num' => 6, 'title' => 'Financiën & Lokale Lasten', 'intro' => 'Realistisch begroten: geen structurele uitgaven uit incidentele meevallers.', 'items' => ['Kwartaalrapportage gemeentefinanciën openbaar.', 'Gratis OV ouderen eerlijk evalueren binnen 12 maanden: bereikt het de juiste mensen?', 'Hondenbelasting omvormen tot kostendekkende hondenheffing.']],
                ['id' => 'ondernemen', 'num' => 7, 'title' => 'Gezond Ondernemersklimaat', 'intro' => 'Ondernemers verdienen een betrouwbare gemeente met heldere regels en vaste doorlooptijden.', 'items' => ['Ondernemersloket als één aanspreekpunt.', 'Dutch Fresh Port faciliteren, niet overnemen.', 'Samenwerking onderwijs-bedrijfsleven stimuleren.']],
                ['id' => 'zorg', 'num' => 8, 'title' => 'Zorg & Welzijn', 'intro' => '40% van de Barendrechters is matig tot ernstig eenzaam. Dat is een volksgezondheidsprobleem.', 'items' => ['500 huisbezoeken per jaar bij gesignaleerde eenzame inwoners.', 'KijkopWelzijn geïndexeerd, maar met transparante verantwoording.', 'Voedselbank ondersteunen, armoedeaanpak verbreden naar werkende armen.']],
                ['id' => 'regio', 'num' => 9, 'title' => 'Regionale Samenwerking', 'intro' => 'Barendrecht staat niet op een eiland. Constructief samenwerken met buurgemeenten — zonder onze belangen uit het oog te verliezen.', 'items' => []],
                ['id' => 'communicatie', 'num' => 10, 'title' => 'Communicatie & Burgerparticipatie', 'intro' => 'Een gemeente die luistert, wint vertrouwen. Informatie in begrijpelijke taal, digitaal én aan het loket.', 'items' => []],
            ] as $theme)
                <article id="{{ $theme['id'] }}" class="scroll-mt-24 rounded-2xl border border-white/10 bg-marine-light/30 overflow-hidden hover:border-accent/30 transition-colors">
                    <div class="p-6 md:p-8">
                        <div class="flex flex-wrap items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-accent/20 border border-accent/40 flex items-center justify-center text-accent font-bold text-lg flex-shrink-0">
                                {{ $theme['num'] }}
                            </div>
                            <div class="flex-1 min-w-0">
                                <h2 class="text-xl md:text-2xl font-extrabold text-white">{{ $theme['num'] }}. {{ $theme['title'] }}</h2>
                                <p class="mt-3 text-white/80 text-sm md:text-base leading-relaxed">
                                    {{ $theme['intro'] }}
                                </p>
                                @if(!empty($theme['items']))
                                    <div class="mt-5">
                                        <p class="text-accent font-semibold text-sm mb-2">Wat wij willen:</p>
                                        <ul class="space-y-2 text-white/85 text-sm md:text-base">
                                            @foreach($theme['items'] as $item)
                                                <li class="flex items-start gap-2">
                                                    <span class="text-accent mt-1.5 flex-shrink-0">•</span>
                                                    <span>{{ $item }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    {{-- CTA: Download programma --}}
    <section class="py-16 md:py-20 bg-marine-light/20 border-t border-white/10">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="rounded-2xl bg-marine-light/40 border border-white/10 p-8 md:p-10 text-center">
                <h2 class="text-xl md:text-2xl font-extrabold text-white">Het volledige programma</h2>
                <p class="mt-2 text-white/80 text-sm md:text-base max-w-xl mx-auto">
                    Lees alle standpunten, doelen en onze positie op gevoelige dossiers in één document.
                </p>
                <div class="mt-6">
                    <a href="{{ route('programma') }}" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-marine font-bold px-6 py-3 rounded-lg text-sm md:text-base transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        Download het volledige programma (PDF)
                    </a>
                </div>
            </div>
        </div>
    </section>

    <x-cta-section />
</x-app-layout>
