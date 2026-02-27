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
            'metaTitle' => 'Over Samen Barendrecht — Wie zijn wij?',
            'metaDescription' => 'Leer Samen Barendrecht kennen: een nieuwe lokale partij voor eerlijk bestuur, rechtszekerheid en een gemeente die werkt voor alle Barendrechters.',
        ]);
    }

    public function standpunten(): View
    {
        return view('pages.standpunten', [
            'metaTitle' => 'Standpunten Samen Barendrecht — Waar staan wij voor?',
            'metaDescription' => 'De standpunten van Samen Barendrecht op tien thema’s: wonen, bestuur, jongeren, buitenruimte, veiligheid, financiën, ondernemen, zorg, regio en communicatie.',
        ]);
    }

    public function programma(): View
    {
        return view('pages.programma', [
            'metaTitle' => 'Verkiezingsprogramma Samen Barendrecht 2026',
            'metaDescription' => 'Download het volledige verkiezingsprogramma van Samen Barendrecht. 10 thema’s, 10 meetbare doelen en 5 concrete beloftes.',
        ]);
    }

    public function kandidaten(): View
    {
        return view('pages.kandidaten', [
            'metaTitle' => 'Kandidaten Samen Barendrecht — Ons team',
            'metaDescription' => 'Maak kennis met de kandidaten van Samen Barendrecht voor de gemeenteraadsverkiezingen 2026 in Barendrecht.',
        ]);
    }

}
