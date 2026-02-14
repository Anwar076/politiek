<form action="{{ route('volunteer.store') }}" method="POST" class="space-y-6">
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
        <label for="phone" class="block text-sm font-medium text-white mb-2">Telefoon</label>
        <input type="tel" name="phone" id="phone" value="{{ old('phone') }}"
               class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-accent focus:border-accent">
    </div>
    <div>
        <label for="availability" class="block text-sm font-medium text-white mb-2">Beschikbaarheid</label>
        <input type="text" name="availability" id="availability" value="{{ old('availability') }}" placeholder="bijv. weekenden, avonden"
               class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-accent focus:border-accent">
    </div>
    <div>
        <label for="skills" class="block text-sm font-medium text-white mb-2">Vaardigheden / interesse</label>
        <input type="text" name="skills" id="skills" value="{{ old('skills') }}" placeholder="bijv. flyeren, social media"
               class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-accent focus:border-accent">
    </div>
    <div>
        <label for="message" class="block text-sm font-medium text-white mb-2">Bericht</label>
        <textarea name="message" id="message" rows="4"
                  class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-accent focus:border-accent">{{ old('message') }}</textarea>
        @error('message')<p class="mt-1 text-red-400 text-sm">{{ $message }}</p>@enderror
    </div>
    <button type="submit" class="w-full sm:w-auto bg-accent hover:bg-accent-light text-marine font-bold px-8 py-4 rounded-lg text-lg transition-colors">
        Aanmelden als vrijwilliger
    </button>
</form>
