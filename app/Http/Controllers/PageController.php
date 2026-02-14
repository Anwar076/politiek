<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\View\View;

class PageController extends Controller
{
    public function about(): View
    {
        $page = Page::where('slug', 'over-ons')->where('published', true)->first();

        return view('pages.about', [
            'page' => $page,
            'metaTitle' => 'Over ons',
            'metaDescription' => 'Leer Lijst 8 kennen. Daadkrachtig, verbindend en rechtvaardig voor Barendrecht.',
        ]);
    }

}
