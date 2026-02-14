<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\Event;
use App\Models\Post;
use App\Models\VolunteerSubmission;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('admin.dashboard', [
            'postsCount' => Post::count(),
            'eventsCount' => Event::count(),
            'donationsCount' => Donation::count(),
            'volunteersCount' => VolunteerSubmission::count(),
            'recentPosts' => Post::latest('published_at')->take(5)->get(),
            'recentEvents' => Event::upcoming()->take(5)->get(),
        ]);
    }
}
