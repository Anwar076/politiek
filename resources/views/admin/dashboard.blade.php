<x-admin-layout title="Dashboard">
    <h1 class="text-2xl font-bold mb-8">Dashboard</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        <div class="bg-marine-light/30 border border-white/10 rounded-xl p-6">
            <p class="text-white/70 text-sm">Nieuwsberichten</p>
            <p class="text-3xl font-bold mt-1">{{ $postsCount }}</p>
            <a href="{{ route('admin.posts.create') }}" class="text-accent text-sm mt-2 inline-block">+ Nieuw</a>
        </div>
        <div class="bg-marine-light/30 border border-white/10 rounded-xl p-6">
            <p class="text-white/70 text-sm">Agenda-items</p>
            <p class="text-3xl font-bold mt-1">{{ $eventsCount }}</p>
            <a href="{{ route('admin.events.create') }}" class="text-accent text-sm mt-2 inline-block">+ Nieuw</a>
        </div>
        <div class="bg-marine-light/30 border border-white/10 rounded-xl p-6">
            <p class="text-white/70 text-sm">Donaties</p>
            <p class="text-3xl font-bold mt-1">{{ $donationsCount }}</p>
            <a href="{{ route('admin.donations.index') }}" class="text-accent text-sm mt-2 inline-block">Bekijk overzicht</a>
        </div>
        <div class="bg-marine-light/30 border border-white/10 rounded-xl p-6">
            <p class="text-white/70 text-sm">Vrijwilligers</p>
            <p class="text-3xl font-bold mt-1">{{ $volunteersCount }}</p>
            <a href="{{ route('admin.volunteers.index') }}" class="text-accent text-sm mt-2 inline-block">Bekijk overzicht</a>
        </div>
    </div>
    <div class="grid lg:grid-cols-2 gap-8">
        <div>
            <h2 class="text-lg font-bold mb-4">Recente nieuwsberichten</h2>
            @if($recentPosts->isNotEmpty())
                <ul class="space-y-2">
                    @foreach($recentPosts as $post)
                        <li class="flex justify-between items-center py-2 border-b border-white/10">
                            <a href="{{ route('news.show', $post->slug) }}" class="text-white/90 hover:text-accent">{{ Str::limit($post->title, 40) }}</a>
                            <a href="{{ route('admin.posts.edit', $post) }}" class="text-sm text-accent">Bewerken</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-white/60">Nog geen nieuwsberichten.</p>
            @endif
        </div>
        <div>
            <h2 class="text-lg font-bold mb-4">Aankomende evenementen</h2>
            @if($recentEvents->isNotEmpty())
                <ul class="space-y-2">
                    @foreach($recentEvents as $event)
                        <li class="flex justify-between items-center py-2 border-b border-white/10">
                            <a href="{{ route('agenda.show', $event->slug) }}" class="text-white/90 hover:text-accent">{{ Str::limit($event->title, 35) }}</a>
                            <a href="{{ route('admin.events.edit', $event) }}" class="text-sm text-accent">Bewerken</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-white/60">Geen aankomende evenementen.</p>
            @endif
        </div>
    </div>
</x-admin-layout>
