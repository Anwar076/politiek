<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Inloggen | Samen Barendrecht CMS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-marine min-h-screen flex items-center justify-center font-sans text-white">
    <div class="w-full max-w-md px-6">
        <div class="text-center mb-8">
            <p class="text-xl font-bold text-white">Samen Barendrecht</p>
            <p class="mt-1 text-white/60 text-sm">CMS – Beheer</p>
        </div>
        <div class="bg-marine-light/50 border border-white/10 rounded-xl p-8">
            <h1 class="text-xl font-bold mb-6">Inloggen</h1>
            @if($errors->any())
                <div class="mb-4 p-3 rounded-lg bg-red-500/20 border border-red-500/50 text-sm">
                    {{ $errors->first() }}
                </div>
            @endif
            <form action="{{ route('admin.login') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium mb-2">E-mail</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                           class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-accent">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium mb-2">Wachtwoord</label>
                    <input type="password" name="password" id="password" required
                           class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-accent">
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="remember" id="remember" class="rounded border-white/30 bg-white/10 text-accent focus:ring-accent">
                    <label for="remember" class="text-sm text-white/80">Onthoud mij</label>
                </div>
                <button type="submit" class="w-full bg-accent hover:bg-accent-light text-marine font-bold py-3 rounded-lg transition-colors">Inloggen</button>
            </form>
        </div>
    </div>
</body>
</html>
