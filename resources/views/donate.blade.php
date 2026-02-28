<x-app-layout :metaTitle="$metaTitle" :metaDescription="$metaDescription">
    <x-hero-section
        title="Steun Samen Barendrecht"
        subtitle="Doneer, word vrijwilliger of bestel campagnemateriaal. Elke bijdrage telt."
    />

    {{-- Intro --}}
    <section class="py-8 md:py-10">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <p class="text-white/85 text-sm md:text-base leading-relaxed max-w-2xl">
                Wij zijn een nieuwe partij zonder grote pot geld. Elke bijdrage <span class="text-em-dash">—</span> groot of klein, financieel of als
                    vrijwilliger <span class="text-em-dash">—</span> helpt ons om Barendrecht eerlijker te maken.
            </p>
        </div>
    </section>

    <section class="py-8 md:py-12">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            @if(session('success'))
                <div class="mb-8 p-4 rounded-xl bg-accent/20 border border-accent/50 text-white">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="mb-8 p-4 rounded-xl bg-red-500/20 border border-red-500/50 text-white">
                    {{ session('error') }}
                </div>
            @endif

            {{-- Doneren --}}
            <!-- <div class="rounded-2xl border border-white/10 bg-marine-light/30 overflow-hidden mb-10 md:mb-12">
                <div class="p-6 md:p-8">
                    <h2 class="text-xl md:text-2xl font-extrabold text-white">Doneer aan de campagne</h2>
                    <p class="mt-3 text-white/85 text-sm md:text-base leading-relaxed max-w-2xl">
                        Met uw donatie financieren wij flyers, advertenties, de website en campagnemateriaal. Elke euro telt.
                    </p>
                    <div class="mt-8 grid lg:grid-cols-2 gap-10 items-start">
                        <div>
                            <x-donation-form />
                        </div>
                        <div class="rounded-xl bg-marine-light/40 border border-white/10 p-6">
                            <p class="text-accent font-semibold text-sm mb-3">Andere manieren om te doneren</p>
                            <ul class="space-y-2 text-white/85 text-sm md:text-base">
                                <li><span class="text-white/70">Tikkie:</span> <span class="text-white/50">[link invullen]</span></li>
                                <li><span class="text-white/70">Bankrekening:</span> <span class="text-white/50">[IBAN invullen]</span> t.n.v. Samen Barendrecht</li>
                                <li>Of scan de QR-code: <span class="text-white/50">[QR-code volgt]</span></li>
                            </ul>
                            <p class="mt-4 text-white/70 text-xs md:text-sm">
                                Donaties aan lokale politieke partijen zijn niet aftrekbaar maar uw steun is onbetaalbaar.
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->

            {{-- Vrijwilligers --}}
            <div class="rounded-2xl border border-white/10 bg-marine-light/25 overflow-hidden mb-10 md:mb-12">
                <div class="p-6 md:p-8">
                    <h2 class="text-xl md:text-2xl font-extrabold text-white">Word vrijwilliger</h2>
                    <p class="mt-3 text-white/85 text-sm md:text-base leading-relaxed">
                        Wij zoeken mensen die mee willen helpen. Geen ervaring nodig <span class="text-em-dash">—</span> alleen motivatie.
                    </p>
                    <ul class="mt-5 space-y-2 text-white/85 text-sm md:text-base">
                        <li class="flex items-start gap-2"><span class="text-accent">•</span> Flyeren in uw eigen wijk</li>
                        <li class="flex items-start gap-2"><span class="text-accent">•</span> Social media content maken of delen</li>
                        <li class="flex items-start gap-2"><span class="text-accent">•</span> Meedenken over campagnestrategie</li>
                        <li class="flex items-start gap-2"><span class="text-accent">•</span> Op verkiezingsdag helpen bij het stembureau</li>
                        <li class="flex items-start gap-2"><span class="text-accent">•</span> Een raam- of tuinposter ophangen</li>
                    </ul>
                    <div class="mt-6">
                        <a href="{{ route('volunteer') }}" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-light text-marine font-bold px-6 py-3 rounded-lg text-sm md:text-base transition-colors">
                            Meld je aan als vrijwilliger
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Campagnemateriaal --}}
            <!-- <div class="rounded-2xl border border-white/10 bg-marine-light/25 overflow-hidden">
                <div class="p-6 md:p-8">
                    <h2 class="text-xl md:text-2xl font-extrabold text-white">Campagnemateriaal</h2>
                    <p class="mt-3 text-white/85 text-sm md:text-base leading-relaxed">
                        Wilt u ons zichtbaar maken in uw wijk? Bestel gratis campagnemateriaal:
                    </p>
                    <ul class="mt-5 space-y-2 text-white/85 text-sm md:text-base">
                        <li class="flex items-start gap-2"><span class="text-accent">•</span> Raamposter A3</li>
                        <li class="flex items-start gap-2"><span class="text-accent">•</span> Tuinbord</li>
                        <li class="flex items-start gap-2"><span class="text-accent">•</span> Flyers (set van 25)</li>
                    </ul>
                    <div class="mt-6">
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 border border-white/20 text-white font-semibold px-6 py-3 rounded-lg text-sm md:text-base transition-colors">
                            Bestel materiaal
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var sel = document.getElementById('amount');
                var wrap = document.getElementById('amount_custom_wrap');
                var customInput = document.getElementById('amount_custom');
                function toggle() {
                    if (sel && sel.value === 'custom') {
                        if (wrap) wrap.classList.remove('hidden');
                        if (customInput) { customInput.removeAttribute('disabled'); }
                    } else {
                        if (wrap) wrap.classList.add('hidden');
                        if (customInput) { customInput.setAttribute('disabled', 'disabled'); customInput.value = ''; }
                    }
                }
                if (sel) sel.addEventListener('change', toggle);
                toggle();
            });
        </script>
    @endpush
</x-app-layout>
