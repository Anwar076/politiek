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
            'metaTitle' => 'Over Samen voor Barendrecht — Wie zijn wij? — Lijst 8',
            'metaDescription' => 'Leer Samen voor Barendrecht kennen: een nieuwe lokale beweging voor eerlijk wonen, eerlijke financiën en eerlijk beleid voor alle Barendrechters.',
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
            'metaTitle' => 'Verkiezingsprogramma Samen voor Barendrecht 2026 — Lijst 8',
            'metaDescription' => 'Download het volledige verkiezingsprogramma van Samen voor Barendrecht. 11 thema’s, 5 meetbare doelen, 3 speerpunten. Lijst 8.',
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
