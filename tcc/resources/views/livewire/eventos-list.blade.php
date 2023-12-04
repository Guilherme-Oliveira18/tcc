<div class="mt-24 flex flex-col justify-between items-center justify-content-center w-full min-h-screen">
    <div class="flex flex-row text-center items-center">
        <h1
            class=" text-3xl sm:text-5xl font-bold bg-clip-text text-transparent bg-gradient-to-br pb-4 md:pb-6 from-blue-500 to-violet-700 dark:from-blue-400">
            Calendário de eventos</h1>
        </header>
    </div>
    <div class="flex gap-4 md:gap-6 lg:gap-8 items-center overflow-none" id="events-container">
        <div class="flex gap-3 items-center text-blue-500 mx-auto">
            <svg class="animate-spin h-8 w-8" width="20" viewBox="0 0 155 155" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle class="opacity-25" cx="77.5" cy="77.5" r="60" stroke="currentColor"
                    stroke-width="10" />
                <path d="M120.329 35.48a59.998 59.998 0 0 1 6.712 75.868" class="opacity-75" stroke="currentColor"
                    stroke-width="10" />
            </svg>
            <p class="text-center text-3xl animate-pulse">Carregando Eventos</p>
        </div>
    </div>
    <button class='text-gray-900 border-b border-gray-700 py-4'
    wire:click={{$eventos ->latest('eventoData')->get() }}>Recentes</button>
    <button class="text-gray-900 border-b border-gray-700 py-4 "
    wire:click="{{$eventos ->latest('eventoData')->get() }}">Antigos</button>

    @foreach ($eventos as $evento)
        <x-gincana.gincana-item :key="$evento->id" :evento="$evento" />
    @endforeach
</div>
