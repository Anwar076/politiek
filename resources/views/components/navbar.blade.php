<nav class="fixed top-0 left-0 right-0 z-50 bg-marine/95 backdrop-blur-md border-b border-white/10 transition-all duration-300" x-data="{ scrolled: false }">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
        <div class="flex items-center justify-between h-16 md:h-20">
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                <span class="bg-white text-marine font-bold text-sm px-3 py-1.5 rounded">LIJST</span>
                <span class="text-2xl md:text-3xl font-extrabold tracking-tight">8</span>
            </a>
            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}" class="text-white/90 hover:text-accent font-medium transition-colors">Home</a>
                <a href="{{ route('news.index') }}" class="text-white/90 hover:text-accent font-medium transition-colors">Nieuws</a>
                <a href="{{ route('agenda.index') }}" class="text-white/90 hover:text-accent font-medium transition-colors">Agenda</a>
                <a href="{{ route('about') }}" class="text-white/90 hover:text-accent font-medium transition-colors">Over ons</a>
                <a href="{{ route('contact') }}" class="text-white/90 hover:text-accent font-medium transition-colors">Contact</a>
                <a href="{{ route('donate') }}" class="bg-accent hover:bg-accent-light text-marine font-bold px-5 py-2.5 rounded-lg transition-colors">Steun ons</a>
            </div>
            <button type="button" @click="$dispatch('open-mobile-menu')" class="md:hidden p-2 text-white" aria-label="Menu openen">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>
</nav>
