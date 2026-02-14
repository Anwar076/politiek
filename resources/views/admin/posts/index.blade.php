<x-admin-layout title="Nieuws">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold">Nieuwsberichten</h1>
        <a href="{{ route('admin.posts.create') }}" class="bg-accent hover:bg-accent-light text-marine font-bold px-4 py-2 rounded-lg">+ Nieuw bericht</a>
    </div>
    <div class="border border-white/10 rounded-xl overflow-hidden">
        <table class="w-full">
            <thead class="bg-marine-light/50">
                <tr>
                    <th class="text-left p-4">Titel</th>
                    <th class="text-left p-4 hidden sm:table-cell">Datum</th>
                    <th class="text-left p-4">Status</th>
                    <th class="p-4 w-24"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                    <tr class="border-t border-white/10 hover:bg-white/5">
                        <td class="p-4"><a href="{{ route('news.show', $post->slug) }}" class="hover:text-accent">{{ Str::limit($post->title, 50) }}</a></td>
                        <td class="p-4 hidden sm:table-cell text-white/70">{{ $post->published_at?->format('d-m-Y') ?? $post->created_at->format('d-m-Y') }}</td>
                        <td class="p-4">
                            @if($post->isScheduled())
                                <span class="text-amber-400 text-sm" title="Zichtbaar vanaf {{ $post->published_at->translatedFormat('d-m-Y H:i') }}">Gepland {{ $post->published_at->translatedFormat('d-m-Y H:i') }}</span>
                            @elseif($post->published)
                                <span class="text-accent text-sm">Gepubliceerd</span>
                            @else
                                <span class="text-white/50 text-sm">Concept</span>
                            @endif
                        </td>
                        <td class="p-4">
                            <a href="{{ route('admin.posts.edit', $post) }}" class="text-accent text-sm">Bewerken</a>
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline" onsubmit="return confirm('Weet je het zeker?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 text-sm ml-2">Verwijderen</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="p-8 text-center text-white/60">Nog geen nieuwsberichten.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-6">{{ $posts->links() }}</div>
</x-admin-layout>
