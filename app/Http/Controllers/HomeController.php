<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Post;

class HomeController extends Controller
{
    public function __invoke()
    {
        $posts = Post::published()->latest('published_at')->take(3)->get();
        $events = Event::published()->upcoming()->take(3)->get();

        return view('home', compact('posts', 'events'));
    }
}
