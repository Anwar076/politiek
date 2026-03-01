@props(['title' => 'Beheer'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }} | Samen Barendrecht CMS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-marine text-white font-sans antialiased min-h-screen">
    <div class="flex min-h-screen">
        <aside class="w-56 bg-marine-dark border-r border-white/10 flex flex-col shrink-0">
            <div class="p-4 border-b border-white/10">
                <a href="{{ route('admin.dashboard') }}" class="font-bold text-white block">Samen Barendrecht</a>
                <p class="text-white/50 text-xs mt-0.5">CMS</p>
            </div>
            <nav class="p-4 space-y-0.5 flex-1">
                <a href="{{ route('admin.dashboard') }}" class="block py-2.5 px-3 rounded-lg text-white/80 hover:text-accent hover:bg-white/5 {{ request()->routeIs('admin.dashboard') ? 'bg-white/10 text-accent' : '' }}">Dashboard</a>
                <a href="{{ route('admin.posts.index') }}" class="block py-2.5 px-3 rounded-lg text-white/80 hover:text-accent hover:bg-white/5 {{ request()->routeIs('admin.posts.*') ? 'bg-white/10 text-accent' : '' }}">Nieuws &amp; Actueel</a>
                <a href="{{ route('admin.events.index') }}" class="block py-2.5 px-3 rounded-lg text-white/80 hover:text-accent hover:bg-white/5 {{ request()->routeIs('admin.events.*') ? 'bg-white/10 text-accent' : '' }}">Agenda</a>
                <a href="{{ route('admin.donations.index') }}" class="block py-2.5 px-3 rounded-lg text-white/80 hover:text-accent hover:bg-white/5 {{ request()->routeIs('admin.donations.*') ? 'bg-white/10 text-accent' : '' }}">Donaties</a>
                <a href="{{ route('admin.volunteers.index') }}" class="block py-2.5 px-3 rounded-lg text-white/80 hover:text-accent hover:bg-white/5 {{ request()->routeIs('admin.volunteers.*') ? 'bg-white/10 text-accent' : '' }}">Vrijwilligers</a>
                <a href="{{ route('admin.contact-messages.index') }}" class="block py-2.5 px-3 rounded-lg text-white/80 hover:text-accent hover:bg-white/5 {{ request()->routeIs('admin.contact-messages.*') ? 'bg-white/10 text-accent' : '' }}">Contactberichten</a>
            </nav>
            <div class="p-4 border-t border-white/10 space-y-1">
                <a href="{{ route('home') }}" class="block py-2 text-white/60 hover:text-white text-sm">Naar website</a>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-white/60 hover:text-white text-sm">Uitloggen</button>
                </form>
            </div>
        </aside>
        <main class="flex-1 p-6 md:p-8 overflow-auto min-w-0">
            @if(session('success'))
                <div class="mb-6 p-4 rounded-xl bg-accent/20 border border-accent/50 text-white">
                    {{ session('success') }}
                </div>
            @endif
            {{ $slot }}
        </main>
    </div>
</body>
</html>
