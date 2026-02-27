<x-app-layout :metaTitle="$metaTitle" :metaDescription="$metaDescription">
    <x-hero-section
        title="Nieuws & Actueel"
        subtitle="Het laatste nieuws van Samen Barendrecht: campagne-updates, persberichten en reacties op lokale ontwikkelingen."
    />

    <section class="py-16 md:py-24">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="max-w-2xl mb-10">
                <p class="text-white/80 leading-relaxed">
                    Op deze pagina vindt u campagne-updates, persberichten en onze reacties op lokale ontwikkelingen.
                </p>
            </div>

            @if($posts->isNotEmpty())
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($posts as $post)
                        <x-news-card :post="$post" />
                    @endforeach
                </div>
                <div class="mt-12">
                    {{ $posts->links() }}
                </div>
            @else
                <div class="rounded-2xl border border-white/10 bg-marine-light/30 p-6 md:p-8 space-y-6">
                    <p class="text-white/80 text-sm md:text-base leading-relaxed">
                        Er zijn nog geen nieuwsberichten gepubliceerd. Hieronder vindt u drie voorbeeldberichten (concept) ter illustratie.
                    </p>

                    <div class="space-y-4 text-white/85 text-sm md:text-base">
                        <div class="border border-white/15 rounded-xl p-4 bg-marine-light/40">
                            <p class="text-xs text-accent/80 uppercase tracking-wide mb-1">Voorbeeldbericht 1 (concept)</p>
                            <p class="text-white/70 text-xs">Datum: [invullen]</p>
                            <p class="mt-2 font-semibold">Samen Barendrecht presenteert verkiezingsprogramma</p>
                            <p class="mt-2">
                                Vandaag presenteert Samen Barendrecht haar verkiezingsprogramma voor de gemeenteraadsverkiezingen
                                van 18 maart 2026. Centraal staan drie kernwaarden: daadkrachtig, rechtszekerheid en verbindend.
                            </p>
                            <p class="mt-2 text-white/80 italic">
                                “Wij beloven niet meer dan wij kunnen waarmaken,” zegt lijsttrekker Cihat Demir.
                                “Maar wat wij beloven, daar kunt u ons op afrekenen. Elk kwartaal leggen wij publiek verantwoording af.”
                            </p>
                            <p class="mt-2">
                                Het programma bevat tien meetbare doelen, vijf harde beloftes en een unieke 48-uurgarantie:
                                elke melding aan de gemeente wordt binnen twee werkdagen inhoudelijk beantwoord.
                            </p>
                            <div class="mt-3">
                                <a href="{{ route('programma') }}" class="inline-flex items-center gap-2 text-accent font-semibold text-sm hover:text-accent-light">
                                    Lees het volledige programma
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                            </div>
                        </div>

                        <div class="border border-white/10 rounded-xl p-4 bg-marine-light/20">
                            <p class="text-xs text-accent/80 uppercase tracking-wide mb-1">Voorbeeldbericht 2 (concept)</p>
                            <p class="text-white/70 text-xs">Datum: [invullen]</p>
                            <p class="mt-2 font-semibold">Riolering dorpskern: Samen Barendrecht maakt het bespreekbaar</p>
                            <p class="mt-2">
                                De verouderde riolering in de Barendrechtse dorpskern is een probleem dat al jaren wordt uitgesteld.
                                Samen Barendrecht wil het rioolvernieuwingsplan binnen twaalf maanden vastgesteld hebben.
                            </p>
                            <p class="mt-2">
                                Bewoners van de dorpskern ervaren bij elke hevige regenbui wateroverlast in hun woningen.
                                Het gresriool — dat 25% van het vuilwaterriool uitmaakt — nadert het einde van zijn levensduur.
                            </p>
                            <p class="mt-2 text-white/80 italic">
                                “Dit uitstellen kost meer dan het nu oplossen,” stelt Aoulad Ben Saddik.
                                “Wij maken hier een topprioriteit van.”
                            </p>
                        </div>

                        <div class="border border-white/10 rounded-xl p-4 bg-marine-light/20">
                            <p class="text-xs text-accent/80 uppercase tracking-wide mb-1">Voorbeeldbericht 3 (concept)</p>
                            <p class="text-white/70 text-xs">Datum: [invullen]</p>
                            <p class="mt-2 font-semibold">Reactie op begroting 2026: leunt op incidentele meevallers</p>
                            <p class="mt-2">
                                De gemeenteraad heeft ingestemd met de begroting voor 2026. Samen Barendrecht maakt zich zorgen
                                over de financiële houdbaarheid. Structurele uitgaven worden gefinancierd uit incidentele meevallers
                                — dat is geen houdbaar beleid.
                            </p>
                            <p class="mt-2">
                                Wij pleiten voor realistische financiering en kwartaalrapportages zodat inwoners kunnen meekijken.
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
                }, { threshold: 0.1 });
                document.querySelectorAll('.animate-fade-in-up').forEach(el => observer.observe(el));
            });
        </script>
    @endpush
</x-app-layout>
