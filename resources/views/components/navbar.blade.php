<nav
    x-data="{ open: false }"
    class="sticky top-0 z-50 border-b border-slate-100 bg-white/95 backdrop-blur">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="flex h-20 items-center justify-between">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600">
                    <span class="text-xl font-black italic text-white">B</span>
                </div>

                <div class="leading-tight">
                    <div class="text-lg font-extrabold tracking-tight text-blue-950">
                        Blåsbo
                    </div>

                    <div class="text-xs font-semibold tracking-wide text-slate-500">
                        TRANSPORT AB
                    </div>
                </div>
            </a>

            {{-- Desktop navigation --}}
            <div class="hidden items-center gap-10 md:flex">

                <a
                    href="#hem"
                    class="text-sm font-semibold text-blue-600 transition hover:text-blue-800">
                    Hem
                </a>

                <a
                    href="#om-oss"
                    class="text-sm font-semibold text-slate-600 transition hover:text-blue-600">
                    Om oss
                </a>

                <a
                    href="#tjanster"
                    class="text-sm font-semibold text-slate-600 transition hover:text-blue-600">
                    Tjänster
                </a>

                <a
                    href="#kontakt"
                    class="text-sm font-semibold text-slate-600 transition hover:text-blue-600">
                    Kontakt
                </a>
            </div>

            {{-- Desktop CTA --}}
            <div class="hidden md:block">
                <a
                    href="#kontakt"
                    class="inline-flex items-center gap-2 rounded-full bg-blue-600 px-6 py-3 text-sm font-bold text-white shadow-lg shadow-blue-600/20 transition hover:-translate-y-0.5 hover:bg-blue-700">
                    Kontakta oss

                    <svg
                        class="h-4 w-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            {{-- Mobile button --}}
            <button
                @click="open = !open"
                type="button"
                class="rounded-lg p-2 text-slate-700 md:hidden"
                aria-label="Öppna meny">
                <svg
                    x-show="!open"
                    class="h-6 w-6"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <svg
                    x-show="open"
                    x-cloak
                    class="h-6 w-6"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Mobile menu --}}
        <div
            x-show="open"
            x-cloak
            x-transition
            class="border-t border-slate-100 py-5 md:hidden">
            <div class="flex flex-col gap-5">

                <a
                    @click="open = false"
                    href="#hem"
                    class="font-semibold text-blue-600">
                    Hem
                </a>

                <a
                    @click="open = false"
                    href="#om-oss"
                    class="font-semibold text-slate-600">
                    Om oss
                </a>

                <a
                    @click="open = false"
                    href="#tjanster"
                    class="font-semibold text-slate-600">
                    Tjänster
                </a>

                <a
                    @click="open = false"
                    href="#kontakt"
                    class="font-semibold text-slate-600">
                    Kontakt
                </a>

                <a
                    @click="open = false"
                    href="#kontakt"
                    class="inline-flex w-fit items-center gap-2 rounded-full bg-blue-600 px-6 py-3 text-sm font-bold text-white">
                    Kontakta oss
                </a>

            </div>
        </div>

    </div>
</nav>