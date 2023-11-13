<nav class="flex items-center justify-between py-3 px-6 border-b border-gray-900">
    <div id="nav-left" class="flex items-center">

        {{-- !!Texto NavBar (Substituido pela logo escrita)!!
        <div class="text-gray-800 font-semibold">
            <span class="text-red-600 text-2xl font-mono ">Cultura</span>
        </div> --}}
        <x-application-mark />
        <div class="top-menu ml-10">
            <div class="flex space-x-4">

                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Inicio') }}
                    {{-- usa '__ para tradução '__('Inicio') --}}
                </x-nav-link>
               <x-nav-link href="{{ route('blog.index') }}" :active="request()->routeIs('blog.index')">
                    {{ __('Blog') }}
                    {{--usa '__ para tradução '__('Inicio')--}}
                </x-nav-link>
                <x-nav-link href="{{ route('blog.index') }}" :active="request()->routeIs('blog.index')">
                    {{ __('Gincanas') }}
                    {{--usa '__ para tradução '__('Inicio')--}}
                </x-nav-link>
                <x-nav-link href="{{ route('blog.sobre') }}" :active="request()->routeIs('blog.sobre')">
                    {{ __('Sobre') }}
                    {{--usa '__ para tradução '__('Inicio')--}}
                </x-nav-link>






            </div>
        </div>
    </div>

    <div id="nav-right" class="flex items-center md:space-x-6 text">
        @auth
         @include('layouts.partials.header-right-auth')
        @else
         @include('layouts.partials.header-right-guest')
        @endauth
    </div>

   {{-- <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('Inicio') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Blog') }}
            </x-responsive-nav-link>
        </div>
        @auth
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">

                    { @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <div class="shrink-0 me-3">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                    alt="{{ Auth::user()->name }}" />
                            </div>
                        @endif}

                    <div>
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
            @endauth
    </div>--}}
</nav>
