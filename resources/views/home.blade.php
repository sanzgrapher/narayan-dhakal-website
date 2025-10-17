<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Fallback for when Vite assets are not built -->
        {{-- include fallback.blade.php --}}
        @include('fallback');
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- custom styles moved to resources/css/app.css -->
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="max-w-4xl mx-auto px-6 py-12">
        <!-- Profile Section -->
        <x-sections.hero.profile />

        <!-- Tools & Technologies -->
        <x-sections.technology-stack />

        <!-- Experience -->
        <x-sections.experience />

        <!-- Projects -->
        <x-sections.projects />

        <!-- Articles & Guides -->
        <x-sections.articles />

        <!-- Contact Form -->
        <x-sections.contact />

        <!-- Footer -->
        <x-sections.footer />
    </div>

 </body>

</html>
