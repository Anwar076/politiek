@props(['title' => 'Beheer'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }} | CMS Lijst 8</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-marine text-white font-sans antialiased min-h-screen">
    <div class="flex min-h-screen">
        <aside class="w-56 bg-marine-dark border-r border-white/10 flex flex-col">
            <div class="p-4 border-b border-white/10">
                <a href="{{ route('admin.dashboard') }}" class="font-bold">Lijst 8 CMS</a>
            </div>
            <nav class="p-4 space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="block py-2 text-white/80 hover:text-accent">Dashboard</a>
                <a href="{{ route('admin.posts.index') }}" class="block py-2 text-white/80 hover:text-accent">Nieuws</a>
                <a href="{{ route('admin.events.index') }}" class="block py-2 text-white/80 hover:text-accent">Agenda</a>
            </nav>
            <div class="mt-auto p-4 border-t border-white/10">
                <a href="{{ route('home') }}" class="block py-2 text-white/60 hover:text-white text-sm">Naar website</a>
                <form action="{{ route('admin.logout') }}" method="POST" class="mt-2">
                    @csrf
                    <button type="submit" class="text-white/60 hover:text-white text-sm">Uitloggen</button>
                </form>
            </div>
        </aside>
        <main class="flex-1 p-8 overflow-auto">
            @if(session('success'))
                <div class="mb-6 p-4 rounded-lg bg-accent/20 border border-accent text-white">
                    {{ session('success') }}
                </div>
            @endif
            {{ $slot }}
        </main>
    </div>
</body>
</html>
