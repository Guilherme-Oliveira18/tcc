@props(['evento'])
<div class="flex items-center flex-col my-6 w-full bg-white rounded shadow-lg sm:w-3/4 md:w-1/2 lg:w-3/5">
    <div class="w-full h-64 bg-top bg-cover rounded-t"
        style="background-image: url({{ $evento->getThumbnailUrl() }}) ; background-repeat:round;">
    </div>
    <div class="flex flex-col w-full md:flex-row">
        <div
            class="flex flex-row justify-center p-4 font-bold leading-none text-gray-800 uppercase bg-gray-400 rounded md:flex-col md:items-center md:justify-center md:w-1/4">
            <div class="md:text-2xl sm:text-xl">{{ $evento->eventoData->format('M') }}</div>
            <div class="md:text-4xl sm:text-xl">{{ $evento->eventoData->format('Y') }}</div>
        </div>
        <div class="p-4 font-normal text-gray-800 md:w-3/4 items-center">
            <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800">{{ $evento->nome }}</h1>
            <p class="leading-normal">{{ $evento->descricao }}.</p>
            <div class="flex flex-row items-center mt-4 text-gray-700">
                <div class="w-1/2">
                    <h3>{{ $evento->categoria }}</h3>
                </div>
                <div class="w-1/2 flex justify-center">
                </div>
            </div>
        </div>
    </div>
</div>


