<div class="mt-10 comments-box border-t border-gray-100 pt-10">
    <h2 class="text-2xl font-semibold text-gray-900 mb-5">Comentários</h2>
    @auth
        <textarea wire:model="comentario"
            class="w-full rounded-lg p-4 bg-gray-50 focus:outline-none text-sm text-gray-700 border-gray-200 placeholder:text-gray-400"
            cols="30" rows="7"></textarea>
        <button wire:click="PostComentario"
            class="mt-3 inline-flex items-center justify-center h-10 px-4 font-medium tracking-wide text-white transition duration-200 bg-gray-900 rounded-lg hover:bg-gray-800 focus:shadow-outline focus:outline-none">
            Postar Comentário
        </button>
    @else
        <a wire:navigate class="text-red-500 underline px-3 py-2" href="{{ route('login') }}"> Login para comentar</a>
    @endauth
    <div class="user-comments px-3 py-2 mt-5 gap-x-2">
        @forelse ($this->comentarios as $comentario)
            <div class="comment [&:not(:last-child)]:border-b border-gray-100 py-5">
                <div class="user-meta flex mb-4 text-sm items-center">
                    <x-post.author :author="$comentario->user" size="xs" />
                    <span class="text-gray-500">{{ $comentario->created_at->diffForHumans() }}</span>
                </div>
                <div class="text-justify text-gray-700  text-sm">
                    {{ $comentario->comentario }}
                </div>
            </div>
        @empty
            <div class="text-gray-500 text-center">
                <span> Nenhum comentário ainda</span>
            </div>
        @endforelse

    </div>
    <div class="my-2">
        {{$this->comentarios->links()}}
    </div>
</div>
