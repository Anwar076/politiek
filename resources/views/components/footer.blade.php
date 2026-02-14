<footer class="bg-marine-dark border-t border-white/10">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 py-12 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <span class="bg-white text-marine font-bold text-sm px-3 py-1.5 rounded">LIJST</span>
                    <span class="text-2xl font-extrabold">8</span>
                </div>
                <p class="text-white/80 text-sm leading-relaxed">Samen voor Barendrecht. Daadkrachtig, verbindend en rechtvaardig.</p>
            </div>
            <div>
                <h3 class="font-bold text-white mb-4">Navigatie</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-white/80 hover:text-accent transition-colors">Home</a></li>
                    <li><a href="{{ route('news.index') }}" class="text-white/80 hover:text-accent transition-colors">Nieuws</a></li>
                    <li><a href="{{ route('agenda.index') }}" class="text-white/80 hover:text-accent transition-colors">Agenda</a></li>
                    <li><a href="{{ route('about') }}" class="text-white/80 hover:text-accent transition-colors">Over ons</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white/80 hover:text-accent transition-colors">Contact</a></li>
                    <li><a href="{{ route('volunteer') }}" class="text-white/80 hover:text-accent transition-colors">Word vrijwilliger</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold text-white mb-4">Contact</h3>
                <p class="text-white/80 text-sm">Barendrecht</p>
                <a href="mailto:info@lijst8.nl" class="text-accent hover:text-accent-light transition-colors">info@lijst8.nl</a>
            </div>
        </div>
        <div class="mt-12 pt-8 border-t border-white/10 flex flex-col sm:flex-row justify-between items-center gap-4">
            <p class="text-white/60 text-sm">© {{ date('Y') }} Lijst 8 – Barendrecht. Alle rechten voorbehouden.</p>
        </div>
    </div>
</footer>
