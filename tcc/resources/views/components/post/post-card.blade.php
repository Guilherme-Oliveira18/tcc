@props(['Post'])

<div class="p-4 md:w-1/3">
    <div class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-blue-100 overflow-hidden hover:drop-shadow-md duration-200">
        <a wire:navigate href="{{ route('blog.show', $Post->slug) }}"><img
                class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100"
                src="{{ $Post->getThumbnailUrl() }}" alt="blog"></a>
        <div class="p-6">
            @if ($categoria = $Post->categorias()->first())
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                    <x-post.categoria-badge :categoria="$categoria" />
                </h2>
            @endif
            <a wire:navigate href="{{ route('blog.show', $Post->slug) }}">
                <h1 class="title-font text-lg font-medium text-gray-600 mb-3">{{ $Post->titulo }}</h1>
            </a>
            {{-- <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p> --}}
            <div class="flex items-center flex-wrap ">
                <a wire:navigate href="{{ route('blog.show', $Post->slug) }}"
                    class="bg-gradient-to-r from-red-500 to-pink-500 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">Explorar</a>
            </div>
        </div>
    </div>
</div>
