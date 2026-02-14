<x-app-layout :metaTitle="$metaTitle" :metaDescription="$metaDescription">
    <x-hero-section
        title="Steun onze campagne"
        subtitle="Samen maken we Barendrecht sterker. Elke bijdrage telt."
    />
    <section class="py-16 md:py-24">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            @if(session('success'))
                <div class="mb-8 p-4 rounded-lg bg-accent/20 border border-accent text-white">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="mb-8 p-4 rounded-lg bg-red-500/20 border border-red-500/50 text-white">
                    {{ session('error') }}
                </div>
            @endif
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <div>
                    <h2 class="text-2xl font-bold mb-4">Doneer</h2>
                    <p class="text-white/80 mb-6">Met jouw donatie ondersteun je onze campagne voor een daadkrachtig, verbindend en rechtvaardig Barendrecht.</p>
                    <x-donation-form />
                    @push('scripts')
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var sel = document.getElementById('amount');
                        var wrap = document.getElementById('amount_custom_wrap');
                        var customInput = document.getElementById('amount_custom');
                        function toggle() {
                            if (sel.value === 'custom') {
                                wrap.classList.remove('hidden');
                                customInput.removeAttribute('disabled');
                            } else {
                                wrap.classList.add('hidden');
                                customInput.setAttribute('disabled', 'disabled');
                                customInput.value = '';
                            }
                        }
                        sel.addEventListener('change', toggle);
                        toggle();
                    });
                </script>
                    @endpush
                </div>
                <div class="bg-marine-light/30 border border-white/10 rounded-xl p-8">
                    <h3 class="text-xl font-bold mb-4">Waarom doneren?</h3>
                    <ul class="space-y-3 text-white/80">
                        <li class="flex items-start gap-2"><span class="text-accent">•</span> Ondersteun lokale politiek die er toe doet</li>
                        <li class="flex items-start gap-2"><span class="text-accent">•</span> Helpt met campagnemateriaal en activiteiten</li>
                        <li class="flex items-start gap-2"><span class="text-accent">•</span> Volledig transparant en verantwoord</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
