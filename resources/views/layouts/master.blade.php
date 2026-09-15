<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Blåsbo Transport AB') }}</title>

    <meta
        name="description"
        content="Blåsbo Transport AB – pålitliga och effektiva transportlösningar för företag och privatpersoner.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white font-sans text-slate-900 antialiased">

    <div class="min-h-screen overflow-x-hidden">

        {{-- Navigation --}}
        @include('components.navbar')

        {{-- Main content --}}
        <main>
            @yield('content')
        </main>

    </div>

</body>

</html>