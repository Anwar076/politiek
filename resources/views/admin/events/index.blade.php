<x-admin-layout title="Agenda">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold">Agenda</h1>
        <a href="{{ route('admin.events.create') }}" class="bg-accent hover:bg-accent-light text-marine font-bold px-4 py-2 rounded-lg">+ Nieuw evenement</a>
    </div>
    <div class="border border-white/10 rounded-xl overflow-hidden">
        <table class="w-full">
            <thead class="bg-marine-light/50">
                <tr>
                    <th class="text-left p-4">Titel</th>
                    <th class="text-left p-4">Datum</th>
                    <th class="text-left p-4 hidden sm:table-cell">Locatie</th>
                    <th class="p-4 w-24"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($events as $event)
                    <tr class="border-t border-white/10 hover:bg-white/5">
                        <td class="p-4"><a href="{{ route('agenda.show', $event->slug) }}" class="hover:text-accent">{{ Str::limit($event->title, 40) }}</a></td>
                        <td class="p-4 text-white/80">{{ $event->starts_at->format('d-m-Y H:i') }}</td>
                        <td class="p-4 hidden sm:table-cell text-white/70">{{ Str::limit($event->location, 25) }}</td>
                        <td class="p-4">
                            <a href="{{ route('admin.events.edit', $event) }}" class="text-accent text-sm">Bewerken</a>
                            <form action="{{ route('admin.events.destroy', $event) }}" method="POST" class="inline" onsubmit="return confirm('Weet je het zeker?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 text-sm ml-2">Verwijderen</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="p-8 text-center text-white/60">Nog geen agenda-items.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-6">{{ $events->links() }}</div>
</x-admin-layout>
