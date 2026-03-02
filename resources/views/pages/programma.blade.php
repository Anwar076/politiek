<x-app-layout :metaTitle="$metaTitle" :metaDescription="$metaDescription">
    <x-hero-section
        title="Verkiezingsprogramma 2026"
        subtitle="11 thema's. 5 meetbare doelen. 3 speerpunten."
    />

    {{-- Ons programma intro + download (prominent) --}}
    <section class="py-10 md:py-14">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="rounded-2xl border border-white/10 bg-marine-light/30 p-6 md:p-8">
                <h2 class="text-xl md:text-2xl font-extrabold text-white">Ons programma</h2>
                <p class="mt-3 text-white/80 leading-relaxed max-w-2xl">
                    Het volledige verkiezingsprogramma van Samen voor Barendrecht voor de gemeenteraadsverkiezingen van 18 maart 2026.
                </p>
                <div class="mt-6">
                    <a href="#" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-marine font-bold px-8 py-4 rounded-lg text-base transition-colors">
                        <i class="fa-solid fa-download"></i>
                        Download het volledige programma (PDF)
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- 5 meetbare doelen --}}
    <section class="py-12 md:py-16 border-t border-white/10">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <h2 class="text-xl md:text-2xl font-extrabold text-white">Samenvatting: 5 meetbare doelen</h2>
            <p class="mt-2 text-white/80 text-sm md:text-base mb-6">
                Na vier jaar kunt u ons hierop afrekenen:
            </p>
            <div class="overflow-x-auto">
                <div class="min-w-[280px] space-y-4">
                    @foreach([
                        ['doel' => '200 betaalbare woningen erbij', 'indicator' => 'Opgeleverd of in aanbouw eind 2030'],
                        ['doel' => 'Start wateroverlastplan Oude Dorp', 'indicator' => 'Uitvoering gestart in 2027'],
                        ['doel' => 'Bezuiniging buitenruimte teruggedraaid', 'indicator' => 'Structureel in begroting 2027'],
                        ['doel' => 'Verkeersveiligheidsplan schoolzones', 'indicator' => 'Vastgesteld vóór eind 2027'],
                        ['doel' => 'OZB maximaal inflatie', 'indicator' => 'Geen onnodige extra verhoging 2027–2030'],
                    ] as $i => $row)
                        <div class="flex flex-col sm:flex-row sm:items-center gap-3 rounded-xl border border-white/10 bg-marine-light/20 p-4 md:p-5 hover:border-accent/30 transition-colors">
                            <div class="flex items-center gap-4 sm:min-w-[200px]">
                                <span class="w-9 h-9 rounded-lg bg-accent/20 border border-accent/40 flex items-center justify-center text-accent font-bold text-sm flex-shrink-0">
                                    {{ $i + 1 }}
                                </span>
                                <span class="text-white font-medium text-sm md:text-base">{{ $row['doel'] }}</span>
                            </div>
                            <span class="text-white/75 text-sm md:text-base sm:ml-4 sm:border-l sm:border-white/10 sm:pl-4">{{ $row['indicator'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Onze positie op gevoelige dossiers --}}
    <section class="py-12 md:py-16 border-t border-white/10 bg-marine-light/10">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <h2 class="text-xl md:text-2xl font-extrabold text-white">Onze positie op gevoelige dossiers</h2>
            <div class="mt-6 grid sm:grid-cols-2 gap-4">
                <div class="rounded-2xl border border-white/10 bg-marine-light/30 p-5 md:p-6 hover:border-accent/30 transition-colors">
                    <h3 class="text-[#54bc84] font-bold text-base md:text-lg">Stationstuinen</h3>
                    <p class="mt-2 text-white/85 text-sm md:text-base leading-relaxed">
                        Wij zijn vóór de Stationstuinen, maar eisen dat het goed gebeurt. Realistischer plan met betaalbare woningen, groen en goede voorzieningen.
                    </p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-marine-light/30 p-5 md:p-6 hover:border-accent/30 transition-colors">
                    <h3 class="text-[#54bc84] font-bold text-base md:text-lg">Islamitisch Centrum</h3>
                    <p class="mt-2 text-white/85 text-sm md:text-base leading-relaxed">
                        Gelijke behandeling onder de wet. Elke aanvraag beoordeeld op basis van wet en recht, niet op basis van sentiment. Het ICB mag zonder beperkingen in hun pand blijven.
                    </p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-marine-light/30 p-5 md:p-6 hover:border-accent/30 transition-colors">
                    <h3 class="text-[#54bc84] font-bold text-base md:text-lg">Diftar</h3>
                    <p class="mt-2 text-white/85 text-sm md:text-base leading-relaxed">
                        Geen terugkeer van Diftar. Wél een modern afvalaanbiedstation met slimme prikkels.
                    </p>
                </div>
                <div class="rounded-2xl border border-white/10 bg-marine-light/30 p-5 md:p-6 hover:border-accent/30 transition-colors">
                    <h3 class="text-[#54bc84] font-bold text-base md:text-lg">Gratis OV ouderen</h3>
                    <p class="mt-2 text-white/85 text-sm md:text-base leading-relaxed">
                        Behouden voor ouderen met een minimuminkomen. Budget effectiever besteden.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA: Download + standpunten --}}
    <section class="py-12 md:py-16 bg-marine-light/20 border-t border-white/10">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6 text-center space-y-6">
            <a href="#" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-marine font-bold px-8 py-4 rounded-lg text-base transition-colors">
                <i class="fa-solid fa-download"></i>
                Download het volledige programma (PDF)
            </a>
            <p class="text-white/85 text-sm md:text-base">Meer standpunten per thema? Bekijk onze standpuntenpagina.</p>
            <a href="{{ route('standpunten') }}" class="inline-flex items-center gap-2 bg-white/10 hover:bg-accent/20 border border-white/20 hover:border-accent/40 text-white font-semibold px-6 py-3 rounded-lg text-sm md:text-base transition-colors">
                Bekijk alle standpunten
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </section>
</x-app-layout>
