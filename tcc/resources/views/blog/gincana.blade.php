<x-app-layout :title="$post->titulo">
    <div
        class="h-full w-full m-4 flex flex-wrap items-start justify-start rounded-tl grid-flow-col auto-cols-max gap-4 overflow-y-scroll">
        <nav class="py-2.5  border-gray-900  bg-green-400 dark:bg-red-900 w-full  mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="relative flex flex-row justify-between items-center gap-x-8 border-t py-4 sm:py-0 dark:border-slate-700">
                <div class="flex items-center w-full sm:w-[auto]">
                    <span
                        class="font-semibold whitespace-nowrap text-white border-e border-e-white/[.7] sm:border-transparent pe-4 me-4 sm:py-3.5 dark:text-white">!Gincana!</span>

                    <div class="w-full sm:hidden">
                        <button data-collapse-toggle="secondary-nav-toggle" type="button"
                            class="hs-collapse-toggle group w-full inline-flex justify-between items-center gap-2 rounded-lg font-medium text-gray-600 border border-gray-200 align-middle py-1.5 px-2 hover:text-white focus:outline-none focus:ring-2 focus:ring-white/[.5] transition"
                            aria-controls="secondary-nav-toggle" aria-expanded="false"
                            aria-label="Toggle navigation">Teste
                            <span class="sr-only">Open main menu</span>
                            <svg class="hs-dropdown-open:rotate-180 flex-shrink-0 w-4 h-4 transition group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>

                        </button>

                    </div>
                </div>

                <div id="secondary-nav-toggle"
                    class="hs-collapse hidden overflow-hidden transition-all duration-300 absolute top-16 end-0 w-full rounded-lg bg-red-400 sm:block sm:static sm:top-0 sm:w-full sm:max-h-full sm:bg-transparent sm:overflow-visible">
                    <div class="flex flex-col py-2 sm:flex-row sm:justify-end sm:gap-y-0 sm:gap-x-6 sm:py-0">
                        <x-nav-link-gin href="">
                            {{ __('Home') }}

                        </x-nav-link-gin>
                        <x-nav-link-gin href="{{ route('blog.gincana') }}" :active="request()->routeIs('blog.gincana')">
                            {{ __('Calendário de eventos') }}

                        </x-nav-link-gin>
                        <x-nav-link-gin href="">
                            {{ __('Mascotes') }}
                        </x-nav-link-gin>
                        <x-nav-link-gin href="">
                            {{ __('Regulamento') }}
                        </x-nav-link-gin>
                        <x-nav-link-gin href="">
                            {{ __('Sobre') }}
                        </x-nav-link-gin>
                        <x-nav-link-gin href="">
                            {{ __('?Oscar') }}
                        </x-nav-link-gin>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Nav -->
        <header class="text-center grid p-4 place-items-center content-center">
            <h1
                class="text-3xl sm:text-5xl font-bold bg-clip-text text-transparent bg-gradient-to-br pb-4 md:pb-6 from-blue-500 to-violet-700 dark:from-blue-400">
                My Calender Events</h1>
            <label for="eventAmt">Events to Show</label>
            <input type="range" id="eventAmt" min="1" value="9" max="20"
                class="accent-blue-600 cursor-grab">
        </header>
        <main class="max-w-6xl w-full mx-auto">
            <section class="grid gap-4 md:gap-6 lg:gap-8 items-start grid-cols-cards" id="events-container">
                <div class="flex gap-3 items-center text-blue-500 mx-auto">
                    <svg class="animate-spin h-8 w-8" width="20" viewBox="0 0 155 155" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle class="opacity-25" cx="77.5" cy="77.5" r="60" stroke="currentColor"
                            stroke-width="10" />
                        <path d="M120.329 35.48a59.998 59.998 0 0 1 6.712 75.868" class="opacity-75"
                            stroke="currentColor" stroke-width="10" />
                    </svg>
                    <p class="text-center text-3xl animate-pulse">Loading Events</p>
                </div>
            </section>
        </main>
        <!-- Container -->
        <!-- component -->
        <section class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-10 mx-auto animate-pulse">
                <h1 class="w-48 h-2 mx-auto bg-gray-200 rounded-lg dark:bg-gray-700"></h1>

                <p class="w-64 h-2 mx-auto mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></p>
                <p class="w-64 h-2 mx-auto mt-4 bg-gray-200 rounded-lg sm:w-80 dark:bg-gray-700"></p>

                <div
                    class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 sm:grid-cols-2 xl:grid-cols-4 lg:grid-cols-3">
                    <div class="w-full ">
                        <div class="w-full h-64 bg-gray-300 rounded-lg dark:bg-gray-600"></div>

                        <h1 class="w-56 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></h1>
                        <p class="w-24 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></p>
                    </div>

                    <div class="w-full ">
                        <div class="w-full h-64 bg-gray-300 rounded-lg dark:bg-gray-600"></div>

                        <h1 class="w-56 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></h1>
                        <p class="w-24 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></p>
                    </div>

                    <div class="w-full ">
                        <div class="w-full h-64 bg-gray-300 rounded-lg dark:bg-gray-600"></div>

                        <h1 class="w-56 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></h1>
                        <p class="w-24 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></p>
                    </div>

                    <div class="w-full ">
                        <div class="w-full h-64 bg-gray-300 rounded-lg dark:bg-gray-600"></div>

                        <h1 class="w-56 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></h1>
                        <p class="w-24 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></p>
                    </div>

                    <div class="w-full ">
                        <div class="w-full h-64 bg-gray-300 rounded-lg dark:bg-gray-600"></div>

                        <h1 class="w-56 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></h1>
                        <p class="w-24 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></p>
                    </div>

                    <div class="w-full ">
                        <div class="w-full h-64 bg-gray-300 rounded-lg dark:bg-gray-600"></div>

                        <h1 class="w-56 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></h1>
                        <p class="w-24 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></p>
                    </div>

                    <div class="w-full ">
                        <div class="w-full h-64 bg-gray-300 rounded-lg dark:bg-gray-600"></div>

                        <h1 class="w-56 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></h1>
                        <p class="w-24 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></p>
                    </div>

                    <div class="w-full ">
                        <div class="w-full h-64 bg-gray-300 rounded-lg dark:bg-gray-600"></div>

                        <h1 class="w-56 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></h1>
                        <p class="w-24 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></p>
                    </div>
                    <div class="w-full ">
                        <div class="w-full h-64 bg-gray-300 rounded-lg dark:bg-gray-600"></div>

                        <h1 class="w-56 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></h1>
                        <p class="w-24 h-2 mt-4 bg-gray-200 rounded-lg dark:bg-gray-700"></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
