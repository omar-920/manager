<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <title>{{ $title ?? 'Page Title' }}</title>
        @fluxAppearance()
    </head>
    <body  class="min-h-screen bg-white dark:bg-zinc-800">
        @include('livewire.sidebar-comp')
        {{ $slot }}
    @fluxScripts
    </body>
</html>
