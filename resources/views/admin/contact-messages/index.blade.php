<x-admin-layout title="Contactberichten">
    <h1 class="text-2xl font-bold mb-8">Contactberichten</h1>
    <p class="text-white/70 text-sm mb-6">Alle berichten van het contactformulier worden hier opgeslagen. Je kunt ze hier lezen zonder e-mail of SMTP.</p>
    <div class="border border-white/10 rounded-xl overflow-hidden">
        <table class="w-full">
            <thead class="bg-marine-light/50">
                <tr>
                    <th class="text-left p-4">Datum</th>
                    <th class="text-left p-4">Naam</th>
                    <th class="text-left p-4 hidden sm:table-cell">E-mail</th>
                    <th class="text-left p-4">Onderwerp</th>
                    <th class="text-left p-4">Status</th>
                    <th class="p-4 w-28"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $msg)
                    <tr class="border-t border-white/10 hover:bg-white/5 {{ !$msg->read ? 'bg-accent/5' : '' }}">
                        <td class="p-4 text-white/80">{{ $msg->created_at->format('d-m-Y H:i') }}</td>
                        <td class="p-4">{{ $msg->name }}</td>
                        <td class="p-4 hidden sm:table-cell text-white/80">{{ $msg->email }}</td>
                        <td class="p-4 text-white/90">{{ Str::limit($msg->subject, 40) }}</td>
                        <td class="p-4">
                            @if($msg->read)
                                <span class="text-white/50 text-sm">Gelezen</span>
                            @else
                                <span class="text-accent text-sm">Nieuw</span>
                            @endif
                        </td>
                        <td class="p-4">
                            <a href="{{ route('admin.contact-messages.index') }}?view={{ $msg->id }}" class="text-accent text-sm">Bekijk</a>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="p-8 text-center text-white/60">Nog geen contactberichten.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-6">{{ $messages->links() }}</div>

    @if($selected ?? null)
        @php $m = $selected; @endphp
        <div class="mt-8 p-6 rounded-xl bg-marine-light/30 border border-white/10">
            <h2 class="text-lg font-bold mb-4">{{ $m->subject }}</h2>
            <dl class="grid sm:grid-cols-2 gap-3 text-sm mb-4">
                <dt class="text-white/60">Naam</dt><dd>{{ $m->name }}</dd>
                <dt class="text-white/60">E-mail</dt><dd><a href="mailto:{{ $m->email }}" class="text-accent hover:underline">{{ $m->email }}</a></dd>
                <dt class="text-white/60">Datum</dt><dd>{{ $m->created_at->format('d-m-Y H:i') }}</dd>
            </dl>
            <p class="text-white/80 whitespace-pre-wrap mt-4 pt-4 border-t border-white/10"><strong>Bericht:</strong><br>{{ $m->message }}</p>
            <form action="{{ route('admin.contact-messages.mark-unread', $m) }}" method="POST" class="mt-4">
                @csrf
                <button type="submit" class="text-white/60 hover:text-accent text-sm">Markeer als ongelezen</button>
            </form>
        </div>
    @endif
</x-admin-layout>
