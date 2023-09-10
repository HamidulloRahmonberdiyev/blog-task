<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"rel="stylesheet"/>
    <title>{{ $title }}</title>
</head>

<body class="bg-gray-200">
    <div class="container max-w-full mx-auto md:py-24 px-6">
        <div class="max-w-sm mx-auto px-6">
           {{ $slot }}
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</body>
</html>