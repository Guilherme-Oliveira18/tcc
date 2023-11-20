<x-app-layout title=" Gin - Pontos">
    <x-gincana.nav-gin />
    <div class="overflow-x-auto w-full  items-start justify-center">
        <div class="flex flex-col  mt-2 w-full  items-center justify-start font-sans ">
            <div class=" text-center items-center">
                <h1
                    class="text-3xl sm:text-5xl font-bold bg-clip-text text-transparent pb-4 md:pb-6 bg-gradient-to-r from-purple-200 via-purple-400 to-purple-800 dark:from-blue-400">
                    Pontos</h1>
                </header>
            </div>
            <div class="w-full">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-center">Turma</th>
                                <th class="py-3 px-6 text-center">Evento</th>
                                <th class="py-3 px-6 text-center">Quantidade</th>
                                <th class="py-3 px-6 text-center"> EM</th>
                                <th class="py-3 px-6 text-center">Categoria</th>
                            </tr>

                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach ($pontos as $ponto)
                                <!-- component -->
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-center whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="font-medium">{{ $ponto->turmas->mascote_nome }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center">
                                            <div class="mr-2">
                                            </div>
                                            <span>{{ $ponto->eventos->nome }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            {{ $ponto->quantidade }}
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span
                                            class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">{{ $ponto->turmas->cursos->numeracao }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            {{ $ponto->eventos->categoria }}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>

</x-app-layout>
