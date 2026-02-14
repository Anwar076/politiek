<x-admin-layout title="Donaties">
    <h1 class="text-2xl font-bold mb-8">Donaties</h1>
    <div class="mb-6 p-4 rounded-xl bg-marine-light/30 border border-white/10">
        <p class="text-white/70 text-sm">Totaal (alle donaties)</p>
        <p class="text-2xl font-bold text-accent">€ {{ number_format($totalAmount, 2, ',', '.') }}</p>
    </div>
    <div class="border border-white/10 rounded-xl overflow-hidden">
        <table class="w-full">
            <thead class="bg-marine-light/50">
                <tr>
                    <th class="text-left p-4">Datum</th>
                    <th class="text-left p-4">Naam</th>
                    <th class="text-left p-4">E-mail</th>
                    <th class="text-right p-4">Bedrag</th>
                    <th class="text-left p-4 hidden md:table-cell">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($donations as $donation)
                    <tr class="border-t border-white/10 hover:bg-white/5">
                        <td class="p-4 text-white/80">{{ $donation->created_at->format('d-m-Y H:i') }}</td>
                        <td class="p-4">{{ $donation->anonymous ? 'Anoniem' : $donation->name }}</td>
                        <td class="p-4 text-white/80">{{ $donation->anonymous ? '—' : $donation->email }}</td>
                        <td class="p-4 text-right font-medium">€ {{ number_format($donation->amount, 2, ',', '.') }}</td>
                        <td class="p-4 hidden md:table-cell text-white/70">{{ $donation->payment_status }}</td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="p-8 text-center text-white/60">Nog geen donaties.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-6">{{ $donations->links() }}</div>
</x-admin-layout>
