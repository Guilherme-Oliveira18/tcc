@props(['turma'])
<div onclick="" class="mx-4 my-4 pt-5 w-96 h-96 bg-transparent cursor-pointer group perspective">
    <div class="relative preserve-3d group-hover:my-rotate-y-180 w-full h-full duration-1000">
        <div class="absolute backface-hidden border-2 w-full h-full">
            <img src="{{ $turma->getThumbnailUrl() }}" class="w-full h-full" />
        </div>
        <div class="absolute my-rotate-y-180 backface-hidden w-full h-full bg-gray-100 overflow-hidden">
            <div
                class="text-center flex flex-col items-center justify-center h-full text-gray-800 px-2 pb-24">
                <h1 class="text-3xl font-semibold">{{ $turma->mascote_nome }}</h1>
                <p class="my-2">EM{{ $turma->cursos->numeracao }}</p>
                <p>
                    {{ $turma->cursos->descricao }}
                </p>
                <button
                    class="bg-teal-500 px-6 py-2 font-semibold text-white rounded-full absolute -bottom-20 delay-500 duration-1000 group-hover:bottom-20 scale-0 group-hover:scale-125">
                    {{ $turma->ano_saiu }}
                </button>
            </div>
        </div>
    </div>
</div>
