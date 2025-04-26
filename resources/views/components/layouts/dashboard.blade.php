<!DOCTYPE html>
<html class="h-full bg-gray-900">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">
    <div class="flex">
        <x-side-bar />

        <main class="flex-1 lg:pl-72">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
