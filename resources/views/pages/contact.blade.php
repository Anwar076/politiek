<x-app-layout :metaTitle="$metaTitle" :metaDescription="$metaDescription">
    <x-hero-section
        title="Contact"
        subtitle="We horen graag van je"
        image="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=1920&q=80"
    />

    <section class="py-16 md:py-24">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            @if(session('success'))
                <div class="mb-8 p-5 rounded-2xl bg-accent/20 border border-accent/50 text-white flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-accent/30 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <p class="font-medium">{{ session('success') }}</p>
                </div>
            @endif
            @if($errors->any())
                <div class="mb-8 p-5 rounded-2xl bg-red-500/20 border border-red-500/40 text-white">
                    <p class="font-medium mb-2">Controleer je invoer:</p>
                    <ul class="list-disc list-inside text-sm text-white/90">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12">
                {{-- Formulier in speels blok --}}
                <div class="rounded-2xl p-6 md:p-8 bg-marine-light/40 border border-white/10">
                    <span class="text-accent font-semibold text-sm uppercase tracking-wider">Bericht</span>
                    <h2 class="mt-2 text-2xl font-bold text-white mb-6">Stuur ons een bericht</h2>
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                        @csrf
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-sm font-medium text-white/90 mb-1.5">Naam *</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" required placeholder="Je naam"
                                       class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/40 focus:ring-2 focus:ring-accent focus:border-accent transition-colors">
                                @error('name')<p class="mt-1 text-red-400 text-sm">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-white/90 mb-1.5">E-mail *</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="je@email.nl"
                                       class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/40 focus:ring-2 focus:ring-accent focus:border-accent transition-colors">
                                @error('email')<p class="mt-1 text-red-400 text-sm">{{ $message }}</p>@enderror
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-white/90 mb-1.5">Onderwerp *</label>
                            <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required placeholder="Waar gaat je bericht over?"
                                   class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/40 focus:ring-2 focus:ring-accent focus:border-accent transition-colors">
                            @error('subject')<p class="mt-1 text-red-400 text-sm">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-white/90 mb-1.5">Bericht *</label>
                            <textarea name="message" id="message" rows="5" required placeholder="Schrijf hier je bericht..."
                                      class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/40 focus:ring-2 focus:ring-accent focus:border-accent transition-colors resize-none">{{ old('message') }}</textarea>
                            @error('message')<p class="mt-1 text-red-400 text-sm">{{ $message }}</p>@enderror
                        </div>
                        <button type="submit" class="w-full sm:w-auto bg-accent hover:bg-accent-light text-marine font-bold px-8 py-4 rounded-xl transition-all hover:shadow-lg hover:shadow-accent/20">
                            Versturen →
                        </button>
                    </form>
                </div>

                {{-- Contactinfo + afbeelding --}}
                <div class="flex flex-col gap-6">
                    <div class="relative rounded-2xl overflow-hidden border border-white/10 flex-shrink-0">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=600&q=80" alt="Contact" class="w-full aspect-[4/3] object-cover">
                        <div class="absolute bottom-0 right-0 w-28 h-28 bg-accent/90 rounded-tl-full"></div>
                        <div class="absolute bottom-4 left-4 right-4 p-3 rounded-xl bg-marine/90 backdrop-blur text-white text-sm">
                            We reageren zo snel mogelijk, meestal binnen twee werkdagen.
                        </div>
                    </div>
                    <div class="rounded-2xl p-6 md:p-8 bg-marine-light/40 border border-white/10 flex-grow">
                        <span class="text-accent font-semibold text-sm uppercase tracking-wider">Contactgegevens</span>
                        <h3 class="mt-2 text-xl font-bold text-white mb-6">Bereik ons</h3>
                        <div class="space-y-5">
                            <a href="mailto:info@lijst8.nl" class="flex items-start gap-4 group">
                                <div class="w-12 h-12 rounded-xl bg-accent/25 flex items-center justify-center text-accent flex-shrink-0 group-hover:bg-accent/40 transition-colors">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                </div>
                                <div>
                                    <p class="text-white/70 text-sm">E-mail</p>
                                    <p class="text-accent font-semibold group-hover:text-accent-light transition-colors">info@lijst8.nl</p>
                                </div>
                            </a>
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-accent/25 flex items-center justify-center text-accent flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                </div>
                                <div>
                                    <p class="text-white/70 text-sm">Locatie</p>
                                    <p class="text-white font-medium">Barendrecht</p>
                                </div>
                            </div>
                        </div>
                        <p class="mt-6 pt-6 border-t border-white/10 text-white/70 text-sm">
                            Voor pers en samenwerking: neem ook gerust contact op via bovenstaand e-mailadres.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
