<x-app-layout :metaTitle="$metaTitle" :metaDescription="$metaDescription">
    <x-hero-section
        title="Contact"
        subtitle="Neem contact op met Samen Barendrecht"
    />

    <section class="py-6 sm:py-8 md:py-10">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <p class="text-white/85 text-sm md:text-base leading-relaxed max-w-2xl">
                Heeft u een vraag, suggestie of wilt u iets delen? Wij horen graag van u.
            </p>
        </div>
    </section>

    <section class="pb-12 sm:pb-16 md:pb-24">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            @if(session('success'))
                <div class="mb-6 sm:mb-8 p-4 sm:p-5 rounded-2xl bg-accent/20 border border-accent/50 text-white flex flex-wrap sm:flex-nowrap items-start sm:items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-accent/30 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <p class="font-medium text-sm sm:text-base min-w-0 flex-1">{{ session('success') }}</p>
                </div>
            @endif
            @if(session('error'))
                <div class="mb-6 sm:mb-8 p-4 sm:p-5 rounded-2xl bg-red-500/20 border border-red-500/40 text-white flex flex-wrap sm:flex-nowrap items-start sm:items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-red-500/30 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <p class="font-medium text-sm sm:text-base min-w-0 flex-1 break-words">{{ session('error') }}</p>
                </div>
            @endif
            @if($errors->any())
                <div class="mb-6 sm:mb-8 p-4 sm:p-5 rounded-2xl bg-red-500/20 border border-red-500/40 text-white">
                    <p class="font-medium mb-2 text-sm sm:text-base">Controleer je invoer:</p>
                    <ul class="list-disc list-inside text-sm text-white/90 space-y-1">
                        @foreach($errors->all() as $error)
                            <li class="break-words">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12">
                {{-- Formulier --}}
                <div class="rounded-2xl p-4 sm:p-6 md:p-8 bg-marine-light/40 border border-white/10 min-w-0">
                    <span class="text-accent font-semibold text-sm uppercase tracking-wider">Bericht</span>
                    <h2 class="mt-2 text-xl sm:text-2xl font-bold text-white mb-4 sm:mb-6">Stuur ons een bericht</h2>
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-4 sm:space-y-5">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                            <div class="min-w-0">
                                <label for="name" class="block text-sm font-medium text-white/90 mb-1.5">Naam *</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" required placeholder="Je naam"
                                       class="w-full min-w-0 px-4 py-3 text-base rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/40 focus:ring-2 focus:ring-accent focus:border-accent transition-colors">
                                @error('name')<p class="mt-1 text-red-400 text-sm">{{ $message }}</p>@enderror
                            </div>
                            <div class="min-w-0">
                                <label for="email" class="block text-sm font-medium text-white/90 mb-1.5">E-mail *</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="je@email.nl" inputmode="email" autocomplete="email"
                                       class="w-full min-w-0 px-4 py-3 text-base rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/40 focus:ring-2 focus:ring-accent focus:border-accent transition-colors">
                                @error('email')<p class="mt-1 text-red-400 text-sm">{{ $message }}</p>@enderror
                            </div>
                        </div>
                        <div class="min-w-0">
                            <label for="subject" class="block text-sm font-medium text-white/90 mb-1.5">Onderwerp *</label>
                            <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required placeholder="Waar gaat je bericht over?"
                                   class="w-full min-w-0 px-4 py-3 text-base rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/40 focus:ring-2 focus:ring-accent focus:border-accent transition-colors">
                            @error('subject')<p class="mt-1 text-red-400 text-sm">{{ $message }}</p>@enderror
                        </div>
                        <div class="min-w-0">
                            <label for="message" class="block text-sm font-medium text-white/90 mb-1.5">Bericht *</label>
                            <textarea name="message" id="message" rows="5" required placeholder="Schrijf hier je bericht..."
                                      class="w-full min-w-0 px-4 py-3 text-base rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/40 focus:ring-2 focus:ring-accent focus:border-accent transition-colors resize-none min-h-[120px]">{{ old('message') }}</textarea>
                            @error('message')<p class="mt-1 text-red-400 text-sm">{{ $message }}</p>@enderror
                        </div>
                        <button type="submit" class="w-full sm:w-auto bg-accent hover:bg-accent-light text-marine font-bold px-6 sm:px-8 py-3.5 sm:py-4 rounded-xl transition-all hover:shadow-lg hover:shadow-accent/20 text-base touch-manipulation">
                            Versturen →
                        </button>
                    </form>
                </div>

                {{-- Contactinfo + socials + pers --}}
                <div class="flex flex-col gap-6 min-w-0">
                    <div class="rounded-2xl p-4 sm:p-6 md:p-8 bg-marine-light/40 border border-white/10 flex-grow min-w-0">
                        <span class="text-accent font-semibold text-sm uppercase tracking-wider">Neem contact op</span>
                        <h3 class="mt-2 text-lg sm:text-xl font-bold text-white mb-4 sm:mb-6">Bereik ons</h3>
                        <div class="space-y-4 sm:space-y-5">
                            <div class="flex items-start gap-3 sm:gap-4 min-w-0">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-accent/25 flex items-center justify-center text-accent flex-shrink-0">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                </div>
                                <div class="min-w-0 flex-1 overflow-hidden">
                                    <p class="text-white/70 text-sm">E-mail</p>
                                    <a href="mailto:info@samenvoorbarendrecht.nl" class="text-accent font-semibold group-hover:text-accent-light transition-colors break-all sm:break-normal">
                                        info@samenvoorbarendrecht.nl
                                    </a>
                                </div>
                            </div>
                            <!-- <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-accent/25 flex items-center justify-center text-accent flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h2l2 10h11l2-6H9"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 19a2 2 0 11-4 0 2 2 0 014 0zM9 19a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                </div>
                                <div>
                                    <p class="text-white/70 text-sm">Telefoon</p>
                                    <p class="text-white font-medium">[nummer invullen]</p>
                                </div>
                            </div> -->
                            <!-- <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-accent/25 flex items-center justify-center text-accent flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                </div>
                                <div>
                                    <p class="text-white/70 text-sm">Locatie</p>
                                    <p class="text-white font-medium">Barendrecht</p>
                                </div>
                            </div> -->
                        </div>

                        <div class="mt-6 sm:mt-8 pt-4 sm:pt-6 border-t border-white/10">
                            <p class="text-accent font-semibold text-sm uppercase tracking-wider mb-2 sm:mb-3">Volg ons</p>
                            <ul class="space-y-2 text-white/85 text-sm">
                                <li class="break-words">Instagram: <a href="https://instagram.com/samenvoorbarendrecht" target="_blank" rel="noopener noreferrer" class="text-accent hover:text-accent-light transition-colors">@samenvoorbarendrecht</a></li>
                                <!-- <li>Facebook: <span class="text-accent">Samen Barendrecht</span></li>
                                <li>X (Twitter): <span class="text-accent">@SamenBDrecht</span></li>
                                <li>LinkedIn: <span class="text-accent">Samen Barendrecht</span></li> -->
                            </ul>
                        </div>

                        <div class="mt-6 sm:mt-8 pt-4 sm:pt-6 border-t border-white/10">
                            <p class="text-accent font-semibold text-sm uppercase tracking-wider mb-2">Pers &amp; media</p>
                            <p class="text-white/85 text-sm leading-relaxed break-words">
                                Voor persverzoeken, interviews of achtergrondinformatie kunt u contact opnemen met
                                <span class="font-semibold">Cihat Demir</span>, lijsttrekker, via
                                <a href="mailto:info@samenvoorbarendrecht.nl" class="text-accent hover:text-accent-light break-all">info@samenvoorbarendrecht.nl</a>.
                                Een perskit met logo, foto’s en standpunten is beschikbaar op aanvraag.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
