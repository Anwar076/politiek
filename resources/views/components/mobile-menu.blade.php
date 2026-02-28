<div x-data="{ open: false }"
     @open-mobile-menu.window="open = true"
     @keydown.escape.window="open = false"
     x-show="open"
     x-cloak
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     class="fixed inset-0 z-[60] md:hidden">
    <div class="absolute inset-0 bg-marine-dark/95 backdrop-blur" @click="open = false"></div>
    <div class="relative flex flex-col items-center justify-center min-h-screen gap-8 py-20"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0">
        <button type="button" @click="open = false" class="absolute top-6 right-6 p-2 text-white" aria-label="Menu sluiten">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
        <a href="{{ route('home') }}" @click="open = false" class="text-xl font-bold text-white hover:text-accent transition-colors">Home</a>
        <a href="{{ route('standpunten') }}" @click="open = false" class="text-xl font-bold text-white hover:text-accent transition-colors">Standpunten</a>
        <a href="{{ route('programma') }}" @click="open = false" class="text-xl font-bold text-white hover:text-accent transition-colors">Programma</a>
        <a href="{{ route('kandidaten') }}" @click="open = false" class="text-xl font-bold text-white hover:text-accent transition-colors">Kandidaten</a>
        <a href="{{ route('about') }}" @click="open = false" class="text-xl font-bold text-white hover:text-accent transition-colors">Over ons</a>
        <a href="{{ route('contact') }}" @click="open = false" class="text-xl font-bold text-white hover:text-accent transition-colors">Contact</a>
        <a href="{{ route('donate') }}" @click="open = false" class="bg-accent text-marine font-bold px-8 py-4 rounded-lg text-lg">Steun ons</a>
    </div>
</div>
