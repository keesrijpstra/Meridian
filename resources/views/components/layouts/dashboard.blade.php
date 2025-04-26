<!DOCTYPE html>
<html class="h-full bg-gray-900">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">
    <x-side-bar />

    <div class="lg:pl-72">
        @livewire('navbar.navbar')

        <main class="px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
