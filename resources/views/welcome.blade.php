@extends('layouts.master')

@section('content')

{{-- ============================================================
     HERO
============================================================ --}}

{{-- Hero Section med fullbredds bakgrundsbild --}}
<section class="relative min-h-[600px] w-full overflow-hidden bg-slate-900 py-20 lg:min-h-[750px] lg:py-32">

    {{-- Bakgrundsbilden (Panoramabilden vi skapade) --}}
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('images/hero.jpeg') }}"
            alt="Blåsbo Transport AB lastbil på väg"
            class="h-full w-full object-cover object-right sm:object-center" />

        {{-- Ett mörkt/tonat overlay så att texten garanterat går att läsa på skärmen --}}
        <div class="absolute inset-0 bg-gradient-to-r from-blue-950/90 via-blue-950/60 to-transparent"></div>
    </div>

    {{-- Innehålls-container (Placeras ovanpå bakgrunden med z-10) --}}
    <div class="container relative z-10 mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">

            {{-- Hero text --}}
            <div class="mb-5 inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-blue-600 shadow-sm ring-1 ring-slate-200">
                <span class="h-2 w-2 rounded-full bg-yellow-400"></span>
                Transport & logistik
            </div>

            <!-- Ändrade textfärg till white/slate-200 för att poppa mot bakgrundsbilden -->
            <h1 class="max-w-2xl text-5xl font-black leading-[1.05] tracking-tight text-white sm:text-6xl lg:text-7xl">
                Vi får ditt gods
                <span class="block text-yellow-400">
                    framåt – i tid.
                </span>
            </h1>

            <p class="mt-7 max-w-xl text-lg leading-8 text-slate-200">
                Blåsbo Transport AB erbjuder pålitliga och effektiva
                transportlösningar för företag och privatpersoner.
                Vi kör tryggt, säkert och med fokus på din leverans.
            </p>

            {{-- Knappar --}}
            <div class="mt-9 flex flex-col gap-4 sm:flex-row">
                <a
                    href="#kontakt"
                    class="inline-flex items-center justify-center gap-3 rounded-full bg-blue-600 px-7 py-4 text-sm font-bold text-white shadow-xl shadow-blue-600/20 transition hover:-translate-y-1 hover:bg-blue-700">
                    Kontakta oss
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>

                <a
                    href="#om-oss"
                    class="inline-flex items-center justify-center rounded-full border border-white/30 bg-white/10 px-7 py-4 text-sm font-bold text-white backdrop-blur-sm transition hover:bg-white/20">
                    Läs mer om oss
                </a>
            </div>

        </div>
    </div>
</section>


{{-- ============================================================
     USP
============================================================ --}}

<section class="border-b border-slate-100 bg-white">

    <div class="mx-auto grid max-w-7xl px-6 sm:grid-cols-2 lg:grid-cols-4 lg:px-8">

        @php
        $features = [
        [
        'title' => 'Trygga leveranser',
        'text' => 'Vi prioriterar säkerhet och pålitlighet i varje transport.',
        'icon' => 'shield',
        'color' => 'blue',
        ],
        [
        'title' => 'Punktlighet',
        'text' => 'Vi håller våra tider och våra löften.',
        'icon' => 'clock',
        'color' => 'yellow',
        ],
        [
        'title' => 'Hållbara transporter',
        'text' => 'Vi arbetar för en mer hållbar framtid.',
        'icon' => 'leaf',
        'color' => 'blue',
        ],
        [
        'title' => 'Personlig service',
        'text' => 'Du får alltid en dedikerad kontaktperson.',
        'icon' => 'support',
        'color' => 'yellow',
        ],
        ];
        @endphp

        @foreach($features as $feature)

        <div class="border-b border-slate-100 px-6 py-10 text-center last:border-0 sm:border-r lg:border-b-0">

            <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-2xl {{ $feature['color'] === 'yellow' ? 'bg-yellow-50 text-yellow-500' : 'bg-blue-50 text-blue-600' }}">

                @if($feature['icon'] === 'shield')
                <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M12 3l7 4v5c0 4.5-3 7.8-7 9-4-1.2-7-4.5-7-9V7l7-4z" />
                </svg>
                @elseif($feature['icon'] === 'clock')
                <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="8.5" stroke-width="1.8" />
                    <path stroke-width="1.8" stroke-linecap="round" d="M12 7v5l3 2" />
                </svg>
                @elseif($feature['icon'] === 'leaf')
                <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M20 4C10 4 5 8 5 14c0 3 2 5 5 5 6 0 10-5 10-15z" />
                    <path stroke-width="1.8" stroke-linecap="round" d="M5 19c2-4 5-7 10-9" />
                </svg>
                @else
                <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="1.8" stroke-linecap="round" d="M18 18a6 6 0 10-12 0" />
                    <circle cx="12" cy="7" r="3" stroke-width="1.8" />
                    <path stroke-width="1.8" stroke-linecap="round" d="M4 21h16" />
                </svg>
                @endif

            </div>

            <h3 class="text-base font-extrabold text-blue-950">
                {{ $feature['title'] }}
            </h3>

            <p class="mx-auto mt-2 max-w-xs text-sm leading-6 text-slate-500">
                {{ $feature['text'] }}
            </p>

        </div>

        @endforeach

    </div>
</section>


{{-- ============================================================
     ABOUT
============================================================ --}}

<section id="om-oss" class="bg-white py-24 lg:py-32">

    <div class="mx-auto grid max-w-7xl items-center gap-14 px-6 lg:grid-cols-2 lg:px-8">

        {{-- Image placeholder --}}
        <div class="relative">

            <div class="aspect-[4/3] overflow-hidden rounded-[2rem] bg-gradient-to-br from-blue-100 via-slate-100 to-yellow-50">

                <img
                    src="{{ asset('images/hero.jpeg') }}"
                    alt="Blåsbo Transport AB lastbil på väg"
                    class="h-full w-full object-cover" />

            </div>

            <div class="absolute -bottom-5 -right-5 h-28 w-28 rounded-3xl bg-yellow-400"></div>

        </div>

        {{-- Text --}}
        <div>

            <p class="text-sm font-black uppercase tracking-[0.2em] text-blue-600">
                Om Blåsbo Transport AB
            </p>

            <h2 class="mt-4 text-4xl font-black leading-tight tracking-tight text-blue-950 sm:text-5xl">
                Ett transportföretag
                <span class="block">med engagemang.</span>
            </h2>

            <div class="mt-7 space-y-5 text-base leading-7 text-slate-600">

                <p>
                    Blåsbo Transport AB är ett modernt transportföretag
                    med rötterna i norra Sverige. Vi kombinerar lång
                    erfarenhet med nytänkande för att leverera
                    transporttjänster av hög kvalitet.
                </p>

                <p>
                    Vår ambition är enkel – att göra det smidigt,
                    tryggt och effektivt för dig, oavsett om det gäller
                    en enskild leverans eller ett långsiktigt samarbete.
                </p>

            </div>

            <a
                href="#kontakt"
                class="mt-8 inline-flex items-center gap-3 rounded-full border-2 border-blue-600 px-6 py-3 text-sm font-bold text-blue-600 transition hover:bg-blue-600 hover:text-white">
                Läs mer om oss

                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>

        </div>

    </div>
</section>

{{-- ============================================================
     SERVICES (Nu i stilren bg-white för perfekt kontrast)
============================================================ --}}
<section id="tjanster" class="bg-white py-24 lg:py-32">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="grid gap-14 lg:grid-cols-[0.8fr_1.2fr]">

            {{-- Intro --}}
            <div>
                <p class="text-sm font-black uppercase tracking-[0.2em] text-blue-600">
                    Våra tjänster
                </p>

                <h2 class="mt-4 text-4xl font-black leading-tight tracking-tight text-blue-950">
                    Flexibla transportlösningar för alla behov
                </h2>

                <p class="mt-6 max-w-lg leading-7 text-slate-600">
                    Vi erbjuder ett brett utbud av transporttjänster,
                    anpassade efter dina behov och din bransch.
                </p>

                <a
                    href="#kontakt"
                    class="mt-8 inline-flex items-center gap-3 rounded-full bg-yellow-400 px-6 py-3 text-sm font-black text-blue-950 shadow-lg shadow-yellow-400/20 transition hover:-translate-y-1 hover:bg-yellow-300">
                    Se alla tjänster
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            {{-- Cards --}}
            <div class="grid gap-5 sm:grid-cols-2">

                @php
                $services = [
                ['title' => 'Godstransporter', 'text' => 'Säker och effektiv transport av gods i hela Sverige och Europa.'],
                ['title' => 'Distribution', 'text' => 'Flexibla lösningar för både stora och små sändningar.'],
                ['title' => 'Kyltransporter', 'text' => 'Vi hanterar temperaturkänsligt gods med största omsorg.'],
                ['title' => 'Specialtransporter', 'text' => 'Vi löser även de mest utmanande transportuppdragen.'],
                ];
                @endphp

                @foreach($services as $service)
                {{-- Justerat kortens design med bg-slate-50/50 och ring-slate-100 för att ligga snyggt mot den vita bakgrunden --}}
                <div class="group rounded-2xl bg-slate-50/50 p-7 shadow-sm ring-1 ring-slate-100 transition duration-300 hover:-translate-y-1 hover:bg-white hover:shadow-xl hover:shadow-blue-950/5 hover:ring-slate-200/50">

                    <div class="flex items-start justify-between">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" d="M3 7h11v10H3zM14 10h4l3 3v4h-7zM6 20a2 2 0 100-4 2 2 0 000 4zm11 0a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                        </div>

                        <svg
                            class="h-5 w-5 text-blue-500 transition group-hover:translate-x-1"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-4-4l4 4-4 4" />
                        </svg>
                    </div>

                    <h3 class="mt-6 font-extrabold text-blue-950">
                        {{ $service['title'] }}
                    </h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        {{ $service['text'] }}
                    </p>

                </div>
                @endforeach

            </div>

        </div>

    </div>
</section>


{{-- ============================================================
     KONTAKT / OFFERT (Behåller bg-slate-50 med vitt formulärkort)
============================================================ --}}
<section id="kontakt" class="bg-slate-50 py-24 lg:py-32 border-t border-slate-100">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-black uppercase tracking-[0.2em] text-blue-600">
                Frågor eller offertförfrågan?
            </p>
            <h2 class="mt-4 text-4xl font-black leading-tight tracking-tight text-blue-950 sm:text-5xl">
                Redo för nästa transport?
            </h2>
            <p class="mt-4 text-lg text-slate-600">
                Fyll i formuläret nedan så återkommer vi med ett prisförslag eller svarar på dina frågor så snabbt som möjligt.
            </p>
        </div>

        {{-- Det vita formulärkortet poppar nu perfekt eftersom sektionen under har bg-slate-50 --}}
        <div class="mx-auto mt-16 max-w-xl rounded-[2rem] bg-white p-8 shadow-xl shadow-slate-200/40 ring-1 ring-slate-200/50 sm:p-10">

            <form action="{{ route('kontakt.store') }}" method="POST" class="space-y-6">
                @csrf

                {{-- 🍯 HONEYPOT SPAM PROTECTION (Helt dolt) --}}
                <div class="absolute opacity-0 pointer-events-none -z-50" aria-hidden="true">
                    <label for="company_website">Lämna detta fält tomt om du är människa:</label>
                    <input type="text" id="company_website" name="company_website" autocomplete="off" tabindex="-1">
                </div>

                {{-- Namn --}}
                <div>
                    <label for="name" class="block text-sm font-bold text-blue-950">Namn / Företag</label>
                    <input type="text" id="name" name="name" required
                        class="mt-2 block w-full rounded-xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-slate-900 placeholder-slate-400 focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>

                {{-- E-post & Telefon --}}
                <div class="grid gap-6 sm:grid-cols-2">
                    <div>
                        <label for="email" class="block text-sm font-bold text-blue-950">E-postadress</label>
                        <input type="email" id="email" name="email" required
                            class="mt-2 block w-full rounded-xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-slate-900 placeholder-slate-400 focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-bold text-blue-950">Telefonnummer</label>
                        <input type="tel" id="phone" name="phone"
                            class="mt-2 block w-full rounded-xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-slate-900 placeholder-slate-400 focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                </div>

                {{-- Meddelande --}}
                <div>
                    <label for="message" class="block text-sm font-bold text-blue-950">Beskriv ditt ärende</label>
                    <textarea id="message" name="message" rows="4" required
                        class="mt-2 block w-full rounded-xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-slate-900 placeholder-slate-400 focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-1 focus:ring-blue-600"></textarea>
                </div>

                {{-- Skicka-knapp --}}
                <button type="submit"
                    class="flex w-full items-center justify-center gap-3 rounded-full bg-blue-600 px-7 py-4 text-sm font-bold text-white shadow-xl shadow-blue-600/25 transition hover:-translate-y-0.5 hover:bg-blue-700">
                    Skicka förfrågan
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </form>

        </div>
    </div>
</section>


@include('layouts.footer')

@endsection