@props(['post'])
<article class="[&:not(:last-child)]:border-b border-gray-100 pb-10">
    <div class="grid items-start grid-cols-12 gap-3 mt-5 article-body">
        <div class="flex items-center col-span-4 article-thumbnail">
            <a wire:navigate href="{{ route('blog.show', $post->slug) }}">
                <img class="mx-auto mw-100 rounded-xl" src="{{ $post->getThumbnailUrl() }}" alt="thumbnail">
            </a>
        </div>
        <div class="col-span-8">
            <div class="flex items-center py-1 text-sm article-meta">
                <x-post.author :author="$post->author" size="xs"/>
                <span class="text-xs text-gray-500"> {{ $post->publidado_em->diffForHumans() }}</span>
            </div>
            <h2 class="text-xl font-bold text-gray-900">
                <a wire:navigate href="{{ route('blog.show', $post->slug) }}">
                    {{ $post->titulo }}
                </a>
            </h2>

            <p class="mt-2 text-base font-light text-gray-700">
                {{ $post->resumo() }}
            </p>
            <div class="flex items-center justify-between mt-6 article-actions-bar">
                <div class='flex gap-2'>
                    @foreach ($post->categorias as $categoria)
                        <x-post.categoria-badge :categoria="$categoria" />
                    @endforeach
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-500 text-sm">Tempo de leitura: {{ $post->getReadingTime() }}
                            minuto</span>
                    </div>
                </div>
                <div>
                    <livewire:btn-like :key="'like-'.$post->id . now()" :$post />

                </div>
            </div>
        </div>
    </div>
</article>
