{{-- ============================================================
     FOOTER
============================================================ --}}

<footer class="bg-blue-950 text-white">

    <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8">

        <div class="grid gap-10 md:grid-cols-4">

            {{-- Brand --}}
            <div class="md:col-span-2">

                <div class="flex items-center gap-3">

                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white">
                        <span class="text-xl font-black italic text-blue-600">B</span>
                    </div>

                    <div>
                        <p class="font-extrabold">Blåsbo</p>
                        <p class="text-xs font-semibold tracking-wide text-blue-200">
                            TRANSPORT AB
                        </p>
                    </div>

                </div>

                <p class="mt-5 max-w-md text-sm leading-6 text-blue-200">
                    Pålitliga transportlösningar med personlig service,
                    engagemang och fokus på att få ditt gods framåt.
                </p>

            </div>

            {{-- Links --}}
            <div>

                <h3 class="font-bold">Snabblänkar</h3>

                <div class="mt-4 flex flex-col gap-3 text-sm text-blue-200">

                    <a href="#hem" class="transition hover:text-white">Hem</a>
                    <a href="#om-oss" class="transition hover:text-white">Om oss</a>
                    <a href="#tjanster" class="transition hover:text-white">Tjänster</a>
                    <a href="#kontakt" class="transition hover:text-white">Kontakt</a>

                </div>

            </div>

            {{-- Contact --}}
            <div>

                <h3 class="font-bold">Kontakt</h3>

                <div class="mt-4 space-y-3 text-sm text-blue-200">

                    <p>Blåsbo Transport AB</p>
                    <p>info@blåsbo.se</p>
                    <p>+46 (0)00 000 00 00</p>

                </div>

            </div>

        </div>

        <div class="mt-12 border-t border-white/10 pt-6">

            <p class="text-center text-xs text-blue-300">
                © {{ date('Y') }} Blåsbo Transport AB. Alla rättigheter förbehållna.
            </p>

        </div>

    </div>

</footer>