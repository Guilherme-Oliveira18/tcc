<x-app-layout>
    <x-gincana.nav-gin />
    <div class="w-full items-center justify-between pt-4 ">
        <div class="h-full w-full flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-authentication-card-logo />
            </div>

            <h1 class="text-5xl font-extrabold ">Regulamento<small
                    class="ms-2 font-semibold text-red-800 dark:text-gray-400">XXIV</small></h1>
            <div class="w-full min-h-screen sm:max-w-2xl mx-1/2 my-12 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">

                <object data="{{ asset('storage/regulamento/' . 'regulamentoXXIV.pdf') }}"
                    type="application/pdf" width="100%" height="100%"> <h1 class="text-xl font-extrabold ">Seu navegador não possui um plugin para o formato PDF!</h1><embed src="{{ asset('storage/regulamento/' . 'regulamentoXXIV.pdf') }}"
                    type="application/pdf" width="100%" height="100%"></object>

            </div>
        </div>
    </div>
</x-app-layout>
