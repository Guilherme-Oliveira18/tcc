<div class="flex space-x-5">
    <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
        {{ __('Logar') }}
        {{-- usa '__ para tradução '__('Inicio') --}}
    </x-nav-link>
    <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
        {{ __('Registre-se') }}
        {{-- usa '__ para tradução '__('Inicio') --}}
    </x-nav-link>
</div>
