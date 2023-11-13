@props(['Post'])
<div class={{ $attributes }}>
    <a wire:navigate href="{{ route('blog.show', $Post->slug) }}">
        <div>
            <img class="w-full rounded-lg " src="{{ $Post->getThumbnailUrl() }}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2 gap-x-2">
            @if ($categoria = $Post->categorias()->first())
                <x-post.categoria-badge :categoria="$categoria" />
            @endif
            <p class="text-gray-500 text-lg">{{ $Post->publidado_em }}</p>
        </div>
        <a wire:navigate href="{{ route('blog.show', $Post->slug) }}"
            class="text-xl font-bold text-gray-900">{{ $Post->titulo }}</a>
    </div>

</div>
