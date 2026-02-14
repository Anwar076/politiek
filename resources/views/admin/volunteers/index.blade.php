<x-admin-layout title="Vrijwilligers">
    <h1 class="text-2xl font-bold mb-8">Vrijwilligersaanmeldingen</h1>
    <div class="border border-white/10 rounded-xl overflow-hidden">
        <table class="w-full">
            <thead class="bg-marine-light/50">
                <tr>
                    <th class="text-left p-4">Datum</th>
                    <th class="text-left p-4">Naam</th>
                    <th class="text-left p-4 hidden sm:table-cell">E-mail</th>
                    <th class="text-left p-4 hidden md:table-cell">Telefoon</th>
                    <th class="text-left p-4">Status</th>
                    <th class="p-4 w-32"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($volunteers as $volunteer)
                    <tr class="border-t border-white/10 hover:bg-white/5">
                        <td class="p-4 text-white/80">{{ $volunteer->created_at->format('d-m-Y H:i') }}</td>
                        <td class="p-4">{{ $volunteer->name }}</td>
                        <td class="p-4 hidden sm:table-cell text-white/80">{{ $volunteer->email }}</td>
                        <td class="p-4 hidden md:table-cell text-white/70">{{ $volunteer->phone ?? '—' }}</td>
                        <td class="p-4">
                            @if($volunteer->processed)
                                <span class="text-white/50 text-sm">Verwerkt</span>
                            @else
                                <span class="text-accent text-sm">Nieuw</span>
                            @endif
                        </td>
                        <td class="p-4">
                            <a href="{{ route('admin.volunteers.index') }}?view={{ $volunteer->id }}" class="text-accent text-sm">Details</a>
                            @if(!$volunteer->processed)
                                <form action="{{ route('admin.volunteers.markProcessed', $volunteer) }}" method="POST" class="inline ml-2">
                                    @csrf
                                    <button type="submit" class="text-white/70 hover:text-accent text-sm">Markeer verwerkt</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="p-8 text-center text-white/60">Nog geen aanmeldingen.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-6">{{ $volunteers->links() }}</div>

    @if($selectedVolunteer ?? null)
        @php $v = $selectedVolunteer; @endphp
        <div class="mt-8 p-6 rounded-xl bg-marine-light/30 border border-white/10">
            <h2 class="text-lg font-bold mb-4">Aanmelding – {{ $v->name }}</h2>
            <dl class="grid sm:grid-cols-2 gap-3 text-sm">
                <dt class="text-white/60">E-mail</dt><dd>{{ $v->email }}</dd>
                <dt class="text-white/60">Telefoon</dt><dd>{{ $v->phone ?? '—' }}</dd>
                <dt class="text-white/60">Beschikbaarheid</dt><dd>{{ $v->availability ?? '—' }}</dd>
                <dt class="text-white/60">Vaardigheden</dt><dd>{{ $v->skills ?? '—' }}</dd>
            </dl>
            @if($v->message)
                <p class="mt-4 text-white/80"><strong>Bericht:</strong><br>{{ $v->message }}</p>
            @endif
        </div>
    @endif
</x-admin-layout>
