<x-admin-layout title="Dashboard">
    <div class="mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-white">Dashboard</h1>
        <p class="mt-1 text-white/60 text-sm">Samen Barendrecht – overzicht van nieuws, agenda, donaties en vrijwilligers.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-10">
        <a href="{{ route('admin.posts.index') }}" class="block bg-marine-light/30 border border-white/10 rounded-xl p-5 md:p-6 hover:border-accent/30 hover:bg-marine-light/40 transition-colors group">
            <p class="text-white/70 text-sm">Nieuws &amp; Actueel</p>
            <p class="text-2xl md:text-3xl font-bold mt-1 text-white">{{ $postsCount }}</p>
            <span class="text-accent text-sm mt-2 inline-flex items-center gap-1 group-hover:gap-2 transition-all">Overzicht</span>
        </a>
        <a href="{{ route('admin.events.index') }}" class="block bg-marine-light/30 border border-white/10 rounded-xl p-5 md:p-6 hover:border-accent/30 hover:bg-marine-light/40 transition-colors group">
            <p class="text-white/70 text-sm">Agenda</p>
            <p class="text-2xl md:text-3xl font-bold mt-1 text-white">{{ $eventsCount }}</p>
            <span class="text-accent text-sm mt-2 inline-flex items-center gap-1 group-hover:gap-2 transition-all">Overzicht</span>
        </a>
        <a href="{{ route('admin.donations.index') }}" class="block bg-marine-light/30 border border-white/10 rounded-xl p-5 md:p-6 hover:border-accent/30 hover:bg-marine-light/40 transition-colors group">
            <p class="text-white/70 text-sm">Donaties</p>
            <p class="text-2xl md:text-3xl font-bold mt-1 text-white">{{ $donationsCount }}</p>
            <span class="text-accent text-sm mt-2 inline-flex items-center gap-1 group-hover:gap-2 transition-all">Bekijk overzicht</span>
        </a>
        <a href="{{ route('admin.volunteers.index') }}" class="block bg-marine-light/30 border border-white/10 rounded-xl p-5 md:p-6 hover:border-accent/30 hover:bg-marine-light/40 transition-colors group">
            <p class="text-white/70 text-sm">Vrijwilligers</p>
            <p class="text-2xl md:text-3xl font-bold mt-1 text-white">{{ $volunteersCount }}</p>
            <span class="text-accent text-sm mt-2 inline-flex items-center gap-1 group-hover:gap-2 transition-all">Bekijk overzicht</span>
        </a>
    </div>

    <div class="grid lg:grid-cols-2 gap-6 md:gap-8">
        <div class="rounded-xl border border-white/10 bg-marine-light/20 p-6">
            <h2 class="text-lg font-bold text-white mb-4">Recente nieuwsberichten</h2>
            @if($recentPosts->isNotEmpty())
                <ul class="space-y-0">
                    @foreach($recentPosts as $post)
                        <li class="flex justify-between items-center py-3 border-b border-white/10 last:border-0">
                            <a href="{{ route('news.show', $post->slug) }}" class="text-white/90 hover:text-accent truncate pr-2">{{ Str::limit($post->title, 40) }}</a>
                            <a href="{{ route('admin.posts.edit', $post) }}" class="text-sm text-accent shrink-0">Bewerken</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-white/60 text-sm">Nog geen nieuwsberichten.</p>
                <a href="{{ route('admin.posts.create') }}" class="inline-block mt-2 text-accent text-sm">+ Nieuw bericht</a>
            @endif
        </div>
        <div class="rounded-xl border border-white/10 bg-marine-light/20 p-6">
            <h2 class="text-lg font-bold text-white mb-4">Aankomende evenementen</h2>
            @if($recentEvents->isNotEmpty())
                <ul class="space-y-0">
                    @foreach($recentEvents as $event)
                        <li class="flex justify-between items-center py-3 border-b border-white/10 last:border-0">
                            <a href="{{ route('agenda.show', $event->slug) }}" class="text-white/90 hover:text-accent truncate pr-2">{{ Str::limit($event->title, 35) }}</a>
                            <a href="{{ route('admin.events.edit', $event) }}" class="text-sm text-accent shrink-0">Bewerken</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-white/60 text-sm">Geen aankomende evenementen.</p>
                <a href="{{ route('admin.events.create') }}" class="inline-block mt-2 text-accent text-sm">+ Nieuw evenement</a>
            @endif
        </div>
    </div>

    <div class="mt-8 pt-6 border-t border-white/10">
        <a href="{{ route('home') }}" class="text-white/60 hover:text-accent text-sm">← Naar website</a>
    </div>
</x-admin-layout>
