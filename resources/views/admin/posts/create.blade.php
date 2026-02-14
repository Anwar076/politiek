<x-admin-layout title="Nieuw nieuwsbericht">
    <h1 class="text-2xl font-bold mb-8">Nieuw nieuwsbericht</h1>
    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="max-w-3xl space-y-6">
        @csrf
        <div>
            <label for="title" class="block text-sm font-medium mb-2">Titel *</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required
                   class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white">
            @error('title')<p class="mt-1 text-red-400 text-sm">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="excerpt" class="block text-sm font-medium mb-2">Korte omschrijving</label>
            <input type="text" name="excerpt" id="excerpt" value="{{ old('excerpt') }}"
                   class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white">
        </div>
        <div>
            <label for="content" class="block text-sm font-medium mb-2">Inhoud *</label>
            <textarea name="content" id="content" rows="12" required
                      class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white">{{ old('content') }}</textarea>
            @error('content')<p class="mt-1 text-red-400 text-sm">{{ $message }}</p>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-2">Afbeelding</label>
            <input type="file" name="image_upload" id="image_upload" accept="image/jpeg,image/png,image/gif,image/webp"
                   class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-accent file:text-marine file:font-bold">
            <p class="mt-1 text-white/60 text-sm">JPEG, PNG, GIF of WebP, max. 2 MB</p>
            <p class="mt-2 text-white/70 text-sm">Of voer een URL in:</p>
            <input type="url" name="image" id="image" value="{{ old('image') }}" placeholder="https://..."
                   class="mt-1 w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white">
        </div>
        <div class="grid sm:grid-cols-2 gap-6">
            <div>
                <label for="meta_title" class="block text-sm font-medium mb-2">SEO titel</label>
                <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title') }}"
                       class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white">
            </div>
            <div>
                <label for="meta_description" class="block text-sm font-medium mb-2">SEO beschrijving</label>
                <input type="text" name="meta_description" id="meta_description" value="{{ old('meta_description') }}"
                       class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white">
            </div>
        </div>
        <div class="flex items-center gap-4">
            <label class="flex items-center gap-2">
                <input type="checkbox" name="published" value="1" {{ old('published', true) ? 'checked' : '' }}
                       class="rounded border-white/30 bg-white/10 text-accent">
                <span>Publiceren</span>
            </label>
            <div>
                <label for="published_at" class="block text-sm font-medium mb-1">Publicatiedatum en -tijd</label>
                <input type="datetime-local" name="published_at" id="published_at" value="{{ old('published_at', now()->format('Y-m-d\TH:i')) }}"
                       class="px-4 py-2 rounded-lg bg-white/10 border border-white/20 text-white text-sm">
                <p class="mt-1 text-white/60 text-xs">Direct plaatsen: laat staan of kies nu. Gepland plaatsen: kies een toekomstige datum en tijd.</p>
            </div>
        </div>
        <div class="flex gap-4">
            <button type="submit" class="bg-accent hover:bg-accent-light text-marine font-bold px-6 py-3 rounded-lg">Opslaan</button>
            <a href="{{ route('admin.posts.index') }}" class="border border-white/20 hover:bg-white/10 px-6 py-3 rounded-lg">Annuleren</a>
        </div>
    </form>
</x-admin-layout>
