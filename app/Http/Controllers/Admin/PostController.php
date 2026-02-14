<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::with('author')->latest()->paginate(15);
        return view('admin.posts.index', compact('posts'));
    }

    public function create(): View
    {
        return view('admin.posts.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'image_upload' => ['nullable', 'image', 'mimes:jpeg,png,gif,webp', 'max:2048'],
            'image' => 'nullable|string|max:500',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'published' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        $validated['image'] = $this->resolveImage($request, null);
        unset($validated['image_upload']);

        $base = Str::slug($validated['title']);
        $validated['slug'] = $base;
        $n = 1;
        while (Post::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = $base . '-' . $n++;
        }
        $validated['user_id'] = $request->user()->id;
        $validated['published'] = $request->boolean('published');
        // Alleen nu zetten als er geen publicatiedatum is ingevuld (direct plaatsen)
        if ($validated['published'] && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        Post::create($validated);
        return redirect()->route('admin.posts.index')->with('success', 'Nieuwsbericht opgeslagen.');
    }

    public function edit(Post $post): View
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'image_upload' => ['nullable', 'image', 'mimes:jpeg,png,gif,webp', 'max:2048'],
            'image' => 'nullable|string|max:500',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'published' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        $validated['image'] = $this->resolveImage($request, $post->image);
        unset($validated['image_upload']);

        $base = Str::slug($validated['title']);
        $validated['slug'] = $base;
        $n = 1;
        while (Post::where('slug', $validated['slug'])->where('id', '!=', $post->id)->exists()) {
            $validated['slug'] = $base . '-' . $n++;
        }
        $validated['published'] = $request->boolean('published');
        $post->update($validated);
        return redirect()->route('admin.posts.index')->with('success', 'Nieuwsbericht bijgewerkt.');
    }

    /** Bepaal afbeelding: upload (opslaan + pad) of bestaande URL, of oude waarde behouden. */
    private function resolveImage(Request $request, ?string $current): ?string
    {
        if ($request->hasFile('image_upload')) {
            if ($current && ! Str::startsWith($current, ['http://', 'https://'])) {
                Storage::disk('public')->delete($current);
            }
            return $request->file('image_upload')->store('posts', 'public');
        }
        if ($request->filled('image')) {
            return $request->input('image');
        }
        return $current;
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Nieuwsbericht verwijderd.');
    }
}
