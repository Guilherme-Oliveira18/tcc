<nav class="px-4 lg:px-2 py-2.5  border-gray-900  bg-red-700 dark:bg-red-900 w-full">
    <div id="nav-left" class="flex flex-wrap left-0 right-0 justify-between items-center mx-auto max-w-screen-xl">
        <x-application-mark class="flex justify-start" />
        <div class="flex justify-end items-center lg:order-2">
            @auth
                @include('layouts.partials.header-right-auth')
            @else
                <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')"
                    class="font-bold rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 ">Login</x-nav-link>
                <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')"
                    class="text-white bg-primary-900 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Registrar-se</x-nav-link>
            @endauth
            <button onclick="mostra('mobile-menu-2')" data-collapse-toggle="mobile-menu-2" type="button"
                class="flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1 gap-3" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <li><x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('Inicio') }}

                    </x-nav-link>
                </li>
                <li><x-nav-link href="{{ route('blog.index') }}" :active="request()->routeIs('blog.index')">
                        {{ __('Notícias') }}

                    </x-nav-link>
                </li>
                <li><x-nav-link href="{{ route('blog.gincana') }}" :active="request()->routeIs('blog.gincana')">
                        {{ __('Gincanas') }}
                    </x-nav-link>
                </li>
                <li><x-nav-link href="{{ route('blog.historia') }}" :active="request()->routeIs('.historia')">
                        {{ __('História') }}
                    </x-nav-link>
                </li>
                <li><x-nav-link href="{{ route('blog.sobre') }}" :active="request()->routeIs('blog.sobre')">
                        {{ __('Sobre') }}
                    </x-nav-link>
                </li>
            </ul>
        </div>
    </div>
</nav>
