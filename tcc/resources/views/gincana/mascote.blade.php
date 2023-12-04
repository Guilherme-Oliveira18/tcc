<x-app-layout title=" Gin - Mascotes">

    <div class="h-full w-full mt-24 m-4 flex flex-wrap items-center justify-start rounded-tl grid-flow-col auto-cols-max gap-4">
        <x-gincana.nav-gin />
        <!-- End Nav -->
        <!-- Conteudo da página de Eventos-->

        <div class="flex flex-col justify-center items-center w-full min-h-screen">
            <div class="flex flex-row text-center items-center">
                <h1
                    class="text-3xl sm:text-5xl font-bold bg-clip-text text-transparent pb-4 md:pb-6 bg-gradient-to-r from-purple-400 to-purple-800 dark:from-blue-400">
                    MASCOTES</h1>
                </header>
            </div>
            <div class="flex flex-wrap my-4 items-center justify-between">
                @foreach ( $turmas as $turma )
                <!-- component -->
                    <x-gincana.mascote-item :turma="$turma"/>
                @endforeach
            </div>
        </div>

    </div>

</x-app-layout>
