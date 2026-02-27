@props(['metaTitle' => 'Samen Barendrecht', 'metaDescription' => 'Samen Barendrecht: de lokale partij voor eerlijk bestuur, rechtszekerheid en meetbare resultaten.'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $metaTitle }} | Samen Barendrecht</title>
    <meta name="description" content="{{ $metaDescription }}">
    <link rel="canonical" href="{{ url()->current() }}">
    @stack('meta')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>[x-cloak]{display:none!important}</style>
</head>
<body class="bg-marine text-white font-sans antialiased min-h-screen flex flex-col">
    <x-navbar />
    <main class="flex-grow">
        {{ $slot }}
    </main>
    <x-footer />
    <x-mobile-menu />
    @stack('scripts')
</body>
</html>
