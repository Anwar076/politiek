<footer class="bg-marine-dark border-t border-white/10">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 py-14 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 md:gap-12">
            {{-- Logo & tagline --}}
            <div class="md:col-span-5">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 mb-4">
                    <span class="bg-white text-marine font-extrabold text-sm px-3 py-1.5 rounded">SAMEN</span>
                    <span class="text-xl font-extrabold text-white">BARENDRECHT</span>
                </a>
                <p class="text-white/75 text-sm leading-relaxed max-w-sm">
                    Samen Barendrecht: lokaal, daadkrachtig en rechtszeker. Geen holle woorden, maar meetbare resultaten.
                </p>
            </div>

            {{-- Navigatie (gesplitst) --}}
            <div class="md:col-span-4 grid grid-cols-2 sm:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xs font-semibold uppercase tracking-wider text-white/60 mb-3">Partij</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-white/80 hover:text-accent transition-colors text-sm">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-white/80 hover:text-accent transition-colors text-sm">Over ons</a></li>
                        <li><a href="{{ route('standpunten') }}" class="text-white/80 hover:text-accent transition-colors text-sm">Standpunten</a></li>
                        <li><a href="{{ route('programma') }}" class="text-white/80 hover:text-accent transition-colors text-sm">Programma</a></li>
                        <li><a href="{{ route('kandidaten') }}" class="text-white/80 hover:text-accent transition-colors text-sm">Kandidaten</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xs font-semibold uppercase tracking-wider text-white/60 mb-3">Actueel</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('news.index') }}" class="text-white/80 hover:text-accent transition-colors text-sm">Nieuws &amp; Actueel</a></li>
                        <li><a href="{{ route('agenda.index') }}" class="text-white/80 hover:text-accent transition-colors text-sm">Agenda</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xs font-semibold uppercase tracking-wider text-white/60 mb-3">Doe mee</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('donate') }}" class="text-white/80 hover:text-accent transition-colors text-sm">Steun ons</a></li>
                        <li><a href="{{ route('volunteer') }}" class="text-white/80 hover:text-accent transition-colors text-sm">Word vrijwilliger</a></li>
                        <li><a href="{{ route('contact') }}" class="text-white/80 hover:text-accent transition-colors text-sm">Contact</a></li>
                    </ul>
                </div>
            </div>

            {{-- Contact & social --}}
            <div class="md:col-span-3">
                <h3 class="text-xs font-semibold uppercase tracking-wider text-white/60 mb-4">Contact</h3>
                <p class="text-white/80 text-sm">Barendrecht</p>
                <a href="mailto:info@samenvoorbarendrecht.nl" class="text-accent hover:text-accent-light block mt-1 text-sm font-medium transition-colors">info@samenvoorbarendrecht.nl</a>
                <div class="mt-6">
                    <p class="text-xs font-semibold uppercase tracking-wider text-white/60 mb-3">Volg ons</p>
                    <div class="flex flex-wrap gap-4 text-sm text-white/80">
                        <a href="https://instagram.com/samenbarendrecht" target="_blank" rel="noopener noreferrer" class="hover:text-accent transition-colors" aria-label="Instagram">Instagram</a>
                        <a href="https://facebook.com/samenbarendrecht" target="_blank" rel="noopener noreferrer" class="hover:text-accent transition-colors" aria-label="Facebook">Facebook</a>
                        <a href="https://x.com/SamenBDrecht" target="_blank" rel="noopener noreferrer" class="hover:text-accent transition-colors" aria-label="X">X</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-white/10 flex flex-col sm:flex-row justify-between items-center gap-4">
            <p class="text-white/55 text-sm">© {{ date('Y') }} Samen Barendrecht — Samen voor Barendrecht</p>
            <a href="mailto:info@samenvoorbarendrecht.nl" class="text-white/55 hover:text-accent text-sm transition-colors">info@samenvoorbarendrecht.nl</a>
        </div>
    </div>
</footer>
