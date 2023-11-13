<div class="px-3 py-6 lg:px-7">
    <div class="flex items-center justify-between border-b border-gray-100">
        <div class="text-gray-600 items-center flex justify-center gap-x-2">

            @if ($this->CategoriaAtiva || $search)
                <button class=" w-6 h-5 text-gray-400 " wire:click="limpaFiltros()"> <svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>

                </button>
            @endif
            @if ($this->CategoriaAtiva)
                <span class="ml-2">
                    <x-badge wire:navigate
                        href="{{ route('blog.index', ['categoria' => $this->CategoriaAtiva->slug]) }}" :cortexto="$this->CategoriaAtiva->cor_texto"
                        :corbg="$this->CategoriaAtiva->cor_bg">
                        {{ $this->CategoriaAtiva->titulo }}
                    </x-badge>
                </span>
            @endif
            @if ($search)
                <span class="ml-2">
                    Filtrando por: <strong>{{ $search }}</strong>
                </span>
            @endif
        </div>
        <div class="flex items-center space-x-4 font-light ">

            <x-label><span class="text-gray-900 text-lg font-mono ">Populares</span></x-label>
            <x-checkbox wire:model.live='popular'/>
            <button class="{{ $sort === 'desc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }} py-4"
                wire:click="setSort('desc')">Recentes</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }} py-4 "
                wire:click="setSort('asc')">Antigos</button>
        </div>
    </div>
    <div class="py-4">
        @foreach ($this->posts as $post)
            <x-post.post-item :key="$post->id" :post="$post" />
        @endforeach
    </div>

    <div class="my-3">
        {{ $this->posts->onEachSide(1)->links() }}
    </div>
</div>
