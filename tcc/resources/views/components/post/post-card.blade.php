@props(['Post'])
<div class={{ $attributes }}>
    <a wire:navigate href="{{ route('blog.show', $Post->slug) }}">
        <div class=>
            <img class="object-fill  rounded-md  md:drop-shadow-xl h-80 w-full " src="{{ $Post->getThumbnailUrl() }}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2 gap-x-2">
            @if ($categoria = $Post->categorias()->first())
                <x-post.categoria-badge :categoria="$categoria" />
            @endif
            <p class="text-gray-700 text-sm">{{ Str::upper($Post->publidado_em->diffForHumans()) }}</p>
        </div>
        <a wire:navigate href="{{ route('blog.show', $Post->slug) }}"
            class="text-xl font-bold text-gray-900">{{ $Post->titulo }}</a>
    </div>

</div>
