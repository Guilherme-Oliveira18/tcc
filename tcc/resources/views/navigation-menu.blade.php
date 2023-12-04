<nav class="px-4 lg:px-2 py-2.5  border-gray-900  bg-red-700 dark:bg-red-900 w-full">
    <style>
        .button_register {
            --tw-border-opacity: 1;
            border-color: rgb(55 65 81 / var(--tw-border-opacity));
            background-color: rgba(99, 102, 241, var(--tw-bg-opacity));
        }

        .button_register:hover {
            background: #4447d9;
        }

        .button_login {
            --tw-border-opacity: 1;
            border-color: rgb(55 65 81 / var(--tw-border-opacity));
            background-color: rgba(99, 102, 241, var(--tw-bg-opacity));
            margin-right: 8px;
            background: #ffffff40;
            border: none !important;
            /* font-size: 17px; */
            /* border: 2px solid white !important; */
            box-shadow: 0 0 4px white;
        }

        .button_login:hover {
            background: #621111a1 !important;
        }


        .nav_button {
            border: none !important;
            border-radius: 14px;
            padding-left: 20px;
            padding-right: 20px;
        }

        .nav_button:hover {
            background: #ffffff45;
            box-shadow: 0 0 10px #ffffffa6;
            border-radius: 20px;
        }

        .nav_button_active {
            background: #ffffff45;
            /* box-shadow: 0 0 10px #ffffffa6; */
            border-radius: 20px;
            color: white;
        }
    </style>
    <div x-data="{ isOpen: false }" id="nav-left"
        class="flex flex-wrap left-0 right-0 justify-between items-center mx-auto max-w-screen-xl">
        <x-application-mark class="flex justify-start" />
        <div class="flex justify-end items-center lg:order-2">
            @auth
                @include('layouts.partials.header-right-auth')
            @else
                <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')"
                    class="button_login focus:outline-none font-bold rounded-lg text-sm">Login</x-nav-link>
                <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')"
                    class="button_register focus:outline-none font-bold rounded-lg text-sm">
                    Registrar-se</x-nav-link>
            @endauth
            <div class="flex lg:hidden mx-2 ">
                <button type="button" data-collapse-toggle="mobilemenu"
                    class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                    aria-label="mobilemenu" @click="isOpen = !isOpen">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!isOpen" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="isOpen" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

        </div>
        <div :class="isOpen ? 'show' : 'hidden'"
            class=" justify-between items-center w-full lg:flex lg:w-auto lg:order-1 gap-3" id="mobilemenu">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row  md:flex-row lg:space-x-8 lg:mt-0"
                style="    margin: 0px!important;">

                <li><x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')" class="nav_button">
                        {{ __('Inicio') }}

                    </x-nav-link>
                </li>
                <li><x-nav-link href="{{ route('blog.index') }}" :active="request()->routeIs('blog.index')" class="nav_button">
                        {{ __('Notícias') }}

                    </x-nav-link>
                </li>
                <li><x-nav-link href="{{ route('gincana.index') }}" :active="request()->routeIs('gincana.index')" class="nav_button">
                        {{ __('Gincanas') }}
                    </x-nav-link>
                </li>
                <li><x-nav-link href="{{ route('blog.historia') }}" :active="request()->routeIs('blog.historia')" class="nav_button">
                        {{ __('História') }}
                    </x-nav-link>
                </li>
                <li><x-nav-link href="{{ route('blog.sobre') }}" :active="request()->routeIs('blog.sobre')" class="nav_button">
                        {{ __('Sobre') }}
                    </x-nav-link>
                </li>
            </ul>
        </div>

    </div>
</nav>
