<form action="{{ route('donate.store') }}" method="POST" class="space-y-6">
    @csrf
    <div class="grid sm:grid-cols-2 gap-6">
        <div>
            <label for="name" class="block text-sm font-medium text-white mb-2">Naam *</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                   class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-accent focus:border-accent">
            @error('name')<p class="mt-1 text-red-400 text-sm">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-white mb-2">E-mail *</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                   class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-accent focus:border-accent">
            @error('email')<p class="mt-1 text-red-400 text-sm">{{ $message }}</p>@enderror
        </div>
    </div>
    <div>
        <label for="amount" class="block text-sm font-medium text-white mb-2">Bedrag (€) *</label>
        <select name="amount" id="amount" required
                class="donation-amount-select w-full px-4 py-3 rounded-lg bg-marine-light border border-white/20 text-white focus:ring-2 focus:ring-accent focus:border-accent cursor-pointer">
            <option value="" class="bg-marine-light text-white">Kies een bedrag</option>
            <option value="10" class="bg-marine-light text-white" {{ old('amount') == 10 ? 'selected' : '' }}>€ 10</option>
            <option value="25" class="bg-marine-light text-white" {{ old('amount') == 25 ? 'selected' : '' }}>€ 25</option>
            <option value="50" class="bg-marine-light text-white" {{ old('amount') == 50 ? 'selected' : '' }}>€ 50</option>
            <option value="100" class="bg-marine-light text-white" {{ old('amount') == 100 ? 'selected' : '' }}>€ 100</option>
            <option value="250" class="bg-marine-light text-white" {{ old('amount') == 250 ? 'selected' : '' }}>€ 250</option>
            <option value="custom" class="bg-marine-light text-white">Anders (vul hieronder in)</option>
        </select>
        <div id="amount_custom_wrap" class="mt-2 hidden">
            <input type="number" name="amount_custom" id="amount_custom" min="1" step="0.01" placeholder="Eigen bedrag (€)" disabled
                   class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-accent focus:border-accent">
        </div>
        @error('amount')<p class="mt-1 text-red-400 text-sm">{{ $message }}</p>@enderror
    </div>
    <div>
        <label for="message" class="block text-sm font-medium text-white mb-2">Bericht (optioneel)</label>
        <textarea name="message" id="message" rows="3"
                  class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-accent focus:border-accent">{{ old('message') }}</textarea>
    </div>
    <div class="flex items-center gap-2">
        <input type="checkbox" name="anonymous" id="anonymous" value="1" {{ old('anonymous') ? 'checked' : '' }}
               class="rounded border-white/30 bg-white/10 text-accent focus:ring-accent">
        <label for="anonymous" class="text-sm text-white/80">Anoniem doneren</label>
    </div>
    <button type="submit" class="w-full sm:w-auto bg-accent hover:bg-accent-light text-marine font-bold px-8 py-4 rounded-lg text-lg transition-colors">
        Doneren
    </button>
</form>
