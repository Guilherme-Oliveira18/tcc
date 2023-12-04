<x-app-layout  title=" Gincana">
    <div class="w-3/4 m-4 flex flex-wrap items-center justify-content-center rounded-tl grid-flow-col auto-cols-max gap-4">
        <x-gincana.nav-gin/>
        <!-- End Nav -->
        <!-- Conteudo da página de Eventos-->

            <div class="flex flex-col justify-between items-center w-full min-h-screen">
                <div class="flex flex-row text-center items-center">
                    <h1
                        class="mt-20 text-3xl sm:text-5xl font-bold bg-clip-text text-transparent bg-gradient-to-br pb-4 md:pb-6 from-blue-500 to-violet-700 dark:from-blue-400">
                        Calendário de eventos</h1>
                    </header>
                </div>

                @foreach ($eventos as $evento )
                    <x-gincana.gincana-item :key="$evento->id" :evento="$evento" />
                @endforeach
            </div>
    </div>
</x-app-layout>
