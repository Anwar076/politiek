<x-app-layout :metaTitle="$metaTitle" :metaDescription="$metaDescription">
    <x-hero-section
        title="Waar staan wij voor?"
        subtitle="Onze thema’s. Concreet, eerlijk en meetbaar."
    />

    {{-- Intro --}}
    <!-- <section class="py-10 md:py-14">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <p class="text-white/85 text-sm md:text-base leading-relaxed max-w-2xl">
                Hieronder vindt u onze standpunten op tien thema’s. Wij zijn concreet, eerlijk en meetbaar.
                Klik op een thema voor meer details.
            </p>
        </div>
    </section> -->

    {{-- Snelnavigatie: ankerlinks --}}
    <!-- <section class="py-4 pb-8 md:pb-10 border-b border-white/10">
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
    </section> -->

    {{-- Thema's in kaarten --}}
    <section class="py-16 md:py-24 bg-marine-light/20 border-t border-white/10">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <h2 class="text-2xl md:text-3xl font-extrabold text-white">Waar staan wij voor?</h2>
            <p class="mt-3 text-white/85 text-sm md:text-base leading-relaxed max-w-2xl">
                Hieronder vindt u onze standpunten op elf thema’s. Wij zijn concreet, eerlijk en meetbaar. Klik op een thema voor meer details.
            </p>

            {{-- Snelnavigatie --}}
            <div class="mt-8 pb-8 border-b border-white/10">
                <p class="text-accent font-semibold text-xs uppercase tracking-wider mb-4">Naar thema</p>
                <div class="flex flex-wrap gap-2">
                    @foreach([
                        ['label' => 'Eerlijk Wonen', 'id' => 'wonen'],
                        ['label' => 'Veiligheid & Verkeer', 'id' => 'veiligheid'],
                        ['label' => 'Buitenruimte & Groen', 'id' => 'buitenruimte'],
                        ['label' => 'Financiën', 'id' => 'financien'],
                        ['label' => 'Oude Dorp & Wateroverlast', 'id' => 'oude-dorp'],
                        ['label' => 'Afval & Duurzaamheid', 'id' => 'afval'],
                        ['label' => 'Welzijn & Zorg', 'id' => 'welzijn'],
                        ['label' => 'Rechtvaardig Bestuur', 'id' => 'bestuur'],
                        ['label' => 'Jongeren & Sport', 'id' => 'jongeren'],
                        ['label' => 'Winkelcentra & Economie', 'id' => 'winkelcentra'],
                        ['label' => 'Regionale Samenwerking', 'id' => 'regio'],
                    ] as $item)
                        <a href="#{{ $item['id'] }}" class="inline-flex items-center px-3 py-1.5 rounded-lg bg-marine-light/50 border border-white/10 text-white/90 text-sm hover:border-accent/40 hover:text-accent transition-colors">
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Thema's in kaarten --}}
            <div class="mt-12 space-y-8 md:space-y-10">
                @php
                    $themes = [
                        ['id' => 'wonen', 'num' => 1, 'title' => 'Eerlijk Wonen & Doorstroming', 'intro' => 'Starters en ouderen die willen doorstromen vinden geen betaalbare woning. De Stationstuinen, het grootste bouwproject van Barendrecht, lopen jaren vertraging op.', 'items' => ['Maximaal 30% sociale huur en 20% betaalbare middenhuur bij alle nieuwbouw, inclusief de Stationstuinen.', 'Voorrang voor Barendrechters die al minstens drie jaar in het dorp wonen of werken, binnen wettelijke kaders.', 'Stevige afspraken met ontwikkelaars over betaalbaarheid, groen en voorzieningen — nu, niet achteraf.', 'Scherper gemeentelijk toezicht op kwaliteit vergunningaanvragen: broddelwerk en salamitactiek accepteren we niet.', 'Stimuleren van optoppen, flexwoonconcepten, en het splitsen of verhuren van panden.', 'Goede aansluiting op OV, scholen en winkels vanaf dag één.'], 'meetbaar' => ['Minimaal 200 betaalbare woningen erbij in deze raadsperiode.', 'Eerste optopproject gestart vóór eind 2027.', 'Prestatieafspraken met ontwikkelaars vastgelegd vóór bouwstart.']],
                        ['id' => 'veiligheid', 'num' => 2, 'title' => 'Veiligheid & Verkeer', 'intro' => 'Barendrechters maken zich zorgen over inbraken, overlast en verkeersveiligheid bij scholen en in tunnels. Het gevoel van veiligheid begint in de buurt.', 'items' => ['Verkeersveiligheid bij scholen aanpakken, waaronder kruispunt Zuidersingel/Avenue Carnisse.', 'Betere verlichting en onderhoud tunnels.', 'Vaste wijkboa\'s die de buurt kennen, zichtbaar in de wijk.', 'Investeren in buurtwerk en jongerenwerk als preventie tegen overlast.', '48-uurgarantie voor veiligheidsmeldingen.', 'Geluidsoverlast Portlandse Baan aanpakken.', 'Betere OV-verbinding oost-west.', 'Slimme parkeeroplossingen in plaats van betaald parkeren.'], 'meetbaar' => ['Verkeersveiligheidsplan voor alle schoolzones vóór eind 2027.', 'Vaste wijkboa\'s in elke wijk.', '48-uurreactie op veiligheidsmeldingen.']],
                        ['id' => 'buitenruimte', 'num' => 3, 'title' => 'Buitenruimte & Groen', 'intro' => 'Er is jarenlang bezuinigd op onderhoud van de openbare ruimte. Sinds 2010 is er €850.000 minder beschikbaar voor groenonderhoud. De bezuiniging op onkruidbestrijding moest in 2025 worden teruggedraaid na klachten.', 'items' => ['Bezuinigingen op groenonderhoud structureel terugdraaien.', 'Wijkschouwen invoeren: bewoners lopen samen met een ambtenaar door hun buurt en markeren knelpunten.', 'Resultaten openbaar en voorzien van een planning.', 'Alle verzakte stoepen in kaart brengen en herstellen.'], 'meetbaar' => ['Terugdraaien bezuinigingen buitenruimte (structureel in begroting 2027).', 'Twee wijkschouwen per wijk per jaar.', 'Binnen de raadsperiode: alle verzakte stoepen hersteld.']],
                        ['id' => 'financien', 'num' => 4, 'title' => 'Financiën & Lokale Lasten', 'intro' => 'Barendrecht koerst af op een structureel tekort van bijna €5 miljoen. Vier jaar lang stemde de voltallige oppositie tegen de begroting. De Provincie moest ingrijpen.', 'items' => ['OZB maximaal gelijk aan inflatie — geen melkkoe.', 'Structureel sluitende begroting uiterlijk in 2028.', 'Dekking zoeken in slimmere bedrijfsvoering en regionale samenwerking, niet in uw portemonnee.', 'Jaarlijkse publicatie van een begrijpelijk financieel inwonersoverzicht in gewone taal.', 'Geen prestigeprojecten die we niet kunnen betalen.'], 'meetbaar' => ['OZB-stijging maximaal gelijk aan inflatie.', 'Structureel sluitende begroting uiterlijk in 2028.', 'Jaarlijkse publicatie begrijpelijk financieel inwonersoverzicht.']],
                        ['id' => 'oude-dorp', 'num' => 5, 'title' => 'Oude Dorpskern & Wateroverlast', 'intro' => 'Bij hevige regenbuien loopt het laaggelegen Oude Dorp onder water. Er is €1,1 miljoen gereserveerd voor klimaataanpassingen. Het vorige college wilde dit geld aan andere zaken besteden. Oppositiepartijen moesten gezamenlijk voorkomen dat het budget werd weggesluisd.', 'items' => ['Absolute prioriteit aan rioolvervanging, waterberging en klimaatadaptieve herinrichting.', 'Uitvoering in overleg met bewoners.', 'Dit project duldt geen verder uitstel.'], 'meetbaar' => []],
                        ['id' => 'afval', 'num' => 6, 'title' => 'Afval & Duurzaamheid', 'intro' => 'De afschaffing van Diftar kost €1 miljoen per jaar. Wij kiezen niet voor terugkeer van Diftar, maar wél voor een modern en duurzaam alternatief.', 'items' => ['Modern en duurzaam afvalaanbiedstation met ruimere openingstijden.', 'Slimme prikkels die afvalscheiding belonen.', 'Geen betaling per klepbeweging.'], 'meetbaar' => []],
                        ['id' => 'welzijn', 'num' => 7, 'title' => 'Welzijn & Zorg', 'intro' => 'KijkopWelzijn ontvangt €1,9 miljoen per jaar. Het college wilde €750.000 bezuinigen, maar moest dat na protest terugbrengen tot €170.000. Wij geloven in welzijnswerk, maar dan met meetbare resultaten.', 'items' => ['Heldere prestatieafspraken: hoeveel inwoners bereikt, hoeveel eenzaamheid teruggedrongen, hoeveel mantelzorgers ondersteund.', 'Kerntaken zoals Vraagwijzer, ouderenadviseurs en schuldhulpmaatjes beschermen.', 'Meer steun voor organisaties zoals Stichting Present die met beperkt budget veel bereiken.', 'Gratis OV voor ouderen eerlijk evalueren: budget naar wie het écht nodig heeft.'], 'meetbaar' => []],
                        ['id' => 'bestuur', 'num' => 8, 'title' => 'Rechtvaardig Bestuur', 'intro' => 'Dit is de kern van onze partij. Rechtvaardig bestuur betekent dat u als inwoner kunt vertrouwen op uw gemeente.', 'items' => ['Bij een vergunningaanvraag weet u vooraf de regels en krijgt u binnen de termijn antwoord.', 'Bij besluiten die u raken wordt u op tijd en begrijpelijk geïnformeerd.', 'Bij bezwaar wordt uw zaak serieus behandeld, niet maandenlang op de plank gelegd.', 'Bij fouten geeft de gemeente dat toe en lost het op.', 'Nul regelwijzigingen bij lopende vergunningprocedures.', 'Lering trekken uit de controversiële dossiers van ProRail en ICB.', 'Dit geldt voor elke inwoner en elke organisatie, zonder uitzondering.'], 'meetbaar' => []],
                        ['id' => 'jongeren', 'num' => 9, 'title' => 'Jongeren & Sport', 'intro' => 'Geen traditioneel jongerenpanel dat doodbloedt, maar concrete projecten waarbij jongeren écht iets te zeggen hebben.', 'items' => ['Concrete projecten waarbij jongeren meedenken: ontwerp speelveld, programmering activiteiten, inrichting hangplek.', 'Gekoppeld aan buurtsportcoaches en jongerenwerk.', 'Vernieuwing sporthal De Driesprong met een realistisch plan.', 'Betaalbaar badwater voor zwemverenigingen.', 'Gemeentelijk aanspreekpunt voor sportverenigingen.', 'Betaalbaar sporten voor jongeren via uitbreiding Jeugdfonds Sport & Cultuur.'], 'meetbaar' => []],
                        ['id' => 'winkelcentra', 'num' => 10, 'title' => 'Winkelcentra & Economie', 'intro' => 'De Middenbaan en Carnisse Veste hebben te kampen met leegstand. Ondernemers verdienen een betrouwbare gemeente.', 'items' => ['Samenwerking met ondernemersverenigingen voor levendige winkelcentra.', 'Actieve leegstandsbestrijding en aantrekkelijker openbare ruimte.', 'Vast gemeentelijk aanspreekpunt voor ondernemers met maximaal één week reactietijd.', 'Samenwerking onderwijs-bedrijfsleven stimuleren.'], 'meetbaar' => []],
                        ['id' => 'regio', 'num' => 11, 'title' => 'Regionale Samenwerking', 'intro' => 'De verhouding met buurgemeenten is verslechterd na de ontmanteling van de BAR-samenwerking. Wij herstellen de samenwerking op praktische terreinen.', 'items' => ['Gezamenlijke inkoop, gedeelde specialisten, afgestemde beleidsvorming.', 'Slim delen waar het kan, zelf doen waar het moet.'], 'meetbaar' => []],
                    ];
                @endphp
                @foreach($themes as $theme)
                    <article id="{{ $theme['id'] }}" class="scroll-mt-24 rounded-2xl border border-white/10 bg-marine-light/30 overflow-hidden hover:border-accent/30 transition-colors">
                        <div class="p-6 md:p-8">
                            <div class="flex flex-wrap items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-accent/20 border border-accent/40 flex items-center justify-center text-accent font-bold text-lg flex-shrink-0">
                                    {{ $theme['num'] }}
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h2 class="text-xl md:text-2xl font-extrabold text-white">{{ $theme['num'] }}. {{ $theme['title'] }}</h2>
                                    <p class="mt-3 text-white/80 text-sm md:text-base leading-relaxed">
                                        {!! str_replace('—', '<span class="text-em-dash">—</span>', e($theme['intro'])) !!}
                                    </p>
                                    @if(!empty($theme['items']))
                                        <div class="mt-5">
                                            <p class="text-accent font-semibold text-sm mb-2">Wat wij willen:</p>
                                            <ul class="space-y-2 text-white/85 text-sm md:text-base">
                                                @foreach($theme['items'] as $item)
                                                    <li class="flex items-start gap-2">
                                                        <span class="text-accent mt-1.5 flex-shrink-0">•</span>
                                                        <span>{!! str_replace('—', '<span class="text-em-dash">—</span>', e($item)) !!}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if(!empty($theme['meetbaar']))
                                        <div class="mt-5 pt-4 border-t border-white/10">
                                            <p class="text-[#54bc84] font-semibold text-sm mb-2">Meetbaar:</p>
                                            <ul class="space-y-2 text-white/80 text-sm md:text-base">
                                                @foreach($theme['meetbaar'] as $m)
                                                    <li class="flex items-start gap-2">
                                                        <span class="text-[#54bc84] mt-1.5 flex-shrink-0">✓</span>
                                                        <span>{!! str_replace('—', '<span class="text-em-dash">—</span>', e($m)) !!}</span>
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

            {{-- CTA: Download programma --}}
            <div class="mt-16 text-center">
                <a href="{{ route('programma') }}" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-marine font-bold px-8 py-4 rounded-xl text-base transition-colors">
                    <i class="fa-solid fa-download"></i>
                    Download het volledige programma (PDF)
                </a>
            </div>
        </div>
    </section>

    <x-cta-section />
</x-app-layout>
