<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::published()->latest('published_at')->paginate(9);

        return view('news.index', [
            'posts' => $posts,
            'metaTitle' => 'Nieuws',
            'metaDescription' => 'Het laatste nieuws van Lijst 8 Barendrecht.',
        ]);
    }

    public function show(string $slug): View
    {
        $post = Post::published()->where('slug', $slug)->firstOrFail();

        return view('news.show', [
            'post' => $post,
            'metaTitle' => $post->meta_title ?? $post->title,
            'metaDescription' => $post->meta_description ?? $post->excerpt ?? Str::limit(strip_tags($post->content), 160),
        ]);
    }
}
