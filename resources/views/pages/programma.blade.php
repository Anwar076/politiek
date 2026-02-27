<x-app-layout :metaTitle="$metaTitle" :metaDescription="$metaDescription">
    <x-hero-section
        title="Verkiezingsprogramma 2026"
        subtitle="Tien meetbare doelen. Vijf concrete beloftes."
    />

    {{-- Ons programma intro + download --}}
    <section class="py-10 md:py-14">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="rounded-2xl border border-white/10 bg-marine-light/30 p-6 md:p-8">
                <h2 class="text-xl md:text-2xl font-extrabold text-white">Ons programma</h2>
                <p class="mt-3 text-white/80 leading-relaxed max-w-2xl">
                    Het volledige verkiezingsprogramma van Samen Barendrecht voor de gemeenteraadsverkiezingen van 18 maart 2026.
                </p>
                <div class="mt-6">
                    <a href="#" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-marine font-bold px-6 py-3 rounded-lg text-sm md:text-base transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        Download programma (PDF volgt)
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- 10 meetbare doelen --}}
    <section class="py-10 md:py-14 border-t border-white/10">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <h2 class="text-xl md:text-2xl font-extrabold text-white">Samenvatting: 10 meetbare doelen</h2>
            <p class="mt-2 text-white/80 text-sm md:text-base">
                Na vier jaar kunt u ons hierop afrekenen:
            </p>
            <ul class="mt-6 grid gap-3 sm:gap-4">
                @foreach([
                    '48-uurgarantie: 90% van meldingen binnen 48 uur inhoudelijk beantwoord.',
                    'Minimaal 200 extra betaalbare woningen in aanbouw, 30% voor lokale starters.',
                    'Twee pilotprojecten optoppen bestaande flats.',
                    'Rioolvernieuwingsplan dorpskern vastgesteld binnen 12 maanden.',
                    'Nul regelwijzigingen bij lopende vergunningprocedures.',
                    'Kwartaalrapportages financiën en meldingen openbaar.',
                    'BLOK0180 behouden met minimaal huidig niveau.',
                    'Afvalscheidingspercentage naar 75%.',
                    'Budget buitenruimte minimaal op niveau 2024.',
                    'Evaluatie gratis OV ouderen binnen 12 maanden.',
                ] as $i => $doel)
                    <li class="flex items-start gap-4 rounded-xl border border-white/10 bg-marine-light/20 p-4 md:p-5 hover:border-accent/30 transition-colors">
                        <span class="w-9 h-9 rounded-lg bg-accent/20 border border-accent/40 flex items-center justify-center text-accent font-bold text-sm flex-shrink-0">
                            {{ $i + 1 }}
                        </span>
                        <span class="text-white/90 text-sm md:text-base pt-0.5">{{ $doel }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- Onze positie op gevoelige dossiers --}}
    <section class="py-12 md:py-16 border-t border-white/10">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <h2 class="text-xl md:text-2xl font-extrabold text-white">Onze positie op gevoelige dossiers</h2>
            <div class="mt-6 grid sm:grid-cols-2 gap-4">
                @foreach([
                    ['titel' => 'Stationstuinen', 'tekst' => 'Herziening ja, afwijzen nee. Realistischer plan met meer groen en betaalbare woningen.'],
                    ['titel' => 'Islamitisch Centrum', 'tekst' => 'Gelijke behandeling onder de wet. Geen discriminatie.'],
                    ['titel' => 'Windmolens', 'tekst' => 'Lokale zeggenschap, maar wij ontkennen de energietransitie niet.'],
                    ['titel' => 'Gratis OV ouderen', 'tekst' => 'Eerlijk evalueren. Budget naar wie het écht nodig heeft.'],
                ] as $dossier)
                    <div class="rounded-2xl border border-white/10 bg-marine-light/30 p-5 md:p-6 hover:border-accent/30 transition-colors">
                        <h3 class="text-accent font-bold text-base md:text-lg">{{ $dossier['titel'] }}</h3>
                        <p class="mt-2 text-white/85 text-sm md:text-base leading-relaxed">{{ $dossier['tekst'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-12 md:py-16 bg-marine-light/20 border-t border-white/10">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6 text-center">
            <p class="text-white/85 text-sm md:text-base mb-6">Meer standpunten per thema? Bekijk onze standpuntenpagina.</p>
            <a href="{{ route('standpunten') }}" class="inline-flex items-center gap-2 bg-white/10 hover:bg-accent/20 border border-white/20 hover:border-accent/40 text-white font-semibold px-6 py-3 rounded-lg text-sm md:text-base transition-colors">
                Bekijk alle standpunten
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </section>
</x-app-layout>
