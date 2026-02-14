<x-app-layout :metaTitle="$metaTitle" :metaDescription="$metaDescription">
    <x-hero-section
        title="Word vrijwilliger"
        subtitle="Help onze campagne en maak het verschil in Barendrecht"
        image="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=1920&q=80"
        ctaText="Direct aanmelden"
        ctaUrl="#form"
    />

    {{-- Korte intro met afbeelding --}}
    <section class="py-12 md:py-16">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="rounded-2xl overflow-hidden border border-white/10 bg-marine-light/30 flex flex-col md:flex-row">
                <div class="md:w-2/5 flex-shrink-0">
                    <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=600&q=80" alt="Vrijwilligers" class="w-full h-56 md:h-full min-h-[220px] object-cover">
                </div>
                <div class="p-6 md:p-8 flex flex-col justify-center">
                    <span class="text-accent font-semibold text-sm uppercase tracking-wider">Samen sterk</span>
                    <h2 class="mt-2 text-xl md:text-2xl font-bold text-white">Elke helpende hand telt</h2>
                    <p class="mt-3 text-white/85 text-sm md:text-base leading-relaxed">
                        Of je nu een paar uur per week kunt of alleen rond de verkiezingen – we kunnen alle hulp gebruiken. Flyeren, social media, evenementen of logistiek: jij kiest wat bij je past. We nemen na je aanmelding zo snel mogelijk contact op.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24" id="form">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            @if(session('success'))
                <div class="mb-8 p-5 rounded-2xl bg-accent/20 border border-accent/50 text-white flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-accent/30 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <p class="font-medium">{{ session('success') }}</p>
                </div>
            @endif
            @if(session('error'))
                <div class="mb-8 p-5 rounded-2xl bg-red-500/20 border border-red-500/40 text-white flex items-start gap-3">
                    <svg class="w-5 h-5 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <p>{{ session('error') }}</p>
                </div>
            @endif
            @if($errors->any())
                <div class="mb-8 p-5 rounded-2xl bg-red-500/20 border border-red-500/40 text-white">
                    <p class="font-medium mb-2">Controleer je invoer:</p>
                    <ul class="list-disc list-inside text-sm text-white/90 space-y-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">
                {{-- Formulier in speels blok --}}
                <div class="rounded-2xl p-6 md:p-8 bg-marine-light/40 border border-white/10">
                    <span class="text-accent font-semibold text-sm uppercase tracking-wider">Aanmelden</span>
                    <h2 class="mt-2 text-2xl font-bold text-white mb-2">Meld je aan als vrijwilliger</h2>
                    <p class="text-white/80 text-sm mb-6">Vul het formulier in; we nemen zo snel mogelijk contact met je op.</p>
                    <x-volunteer-form />
                </div>

                {{-- Wat kun je doen + afbeelding --}}
                <div class="space-y-6">
                    <div class="rounded-2xl overflow-hidden border border-white/10">
                        <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?w=600&q=80" alt="Campagne" class="w-full aspect-[4/3] object-cover">
                    </div>
                    <div class="rounded-2xl p-6 md:p-8 bg-marine-light/40 border border-white/10">
                        <span class="text-accent font-semibold text-sm uppercase tracking-wider">Mogelijkheden</span>
                        <h3 class="mt-2 text-xl font-bold text-white mb-6">Wat kun je doen?</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-accent/25 flex items-center justify-center text-accent flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                </div>
                                <div>
                                    <span class="font-semibold text-white">Flyeren en deur-aan-deur</span>
                                    <p class="text-white/75 text-sm mt-0.5">Verspreid onze boodschap in de buurt.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-accent/25 flex items-center justify-center text-accent flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"/></svg>
                                </div>
                                <div>
                                    <span class="font-semibold text-white">Social media en communicatie</span>
                                    <p class="text-white/75 text-sm mt-0.5">Help met posts, foto’s en onze kanalen.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-accent/25 flex items-center justify-center text-accent flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                                <div>
                                    <span class="font-semibold text-white">Evenementen en stands</span>
                                    <p class="text-white/75 text-sm mt-0.5">Sta met ons op markten en bij activiteiten.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-accent/25 flex items-center justify-center text-accent flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                                </div>
                                <div>
                                    <span class="font-semibold text-white">Administratie en logistiek</span>
                                    <p class="text-white/75 text-sm mt-0.5">Ondersteun achter de schermen.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA-strip --}}
    <section class="py-12 md:py-16">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="rounded-2xl p-6 md:p-8 bg-marine-light/30 border border-white/10 text-center">
                <p class="text-white/90">Vragen over vrijwilligerswerk? Neem <a href="{{ route('contact') }}" class="text-accent font-semibold hover:text-accent-light underline">contact</a> met ons op.</p>
            </div>
        </div>
    </section>
</x-app-layout>
