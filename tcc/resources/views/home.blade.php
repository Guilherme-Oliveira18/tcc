<x-app-layout title="Home">
    @section('hero')
        <div class="w-full text-center py-32">
            <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl">
                Bem vindo ao <span class=" font-bold">Cultura</span> <span class=" font-bold  text-red-500">&lt;F</span><span class="text-gray-900">P&gt;</span>
            </h1>
            <p class="text-gray-500 text-lg mt-1">O melhor da Etec para você </p>
            <a class="px-3 py-2 text-lg text-dark bg-gray-300 rounded mt-5 inline-block" href="/blog">Explorar</a>
        </div>
    @endsection
    <div class="mb-10 w-full">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-red-500 font-semibold "> Os mais relevantes</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($featuredPosts as $Post)
                        <x-post.post-card :Post="$Post" class="md:col-span-1 col-span-3" />
                    @endforeach

                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-red-500 font-semibold" href="/blog">Veja mais.. </a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-red-500 font-bold">Novidades</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($latestPosts as $Post)
                    <x-post.post-card :Post="$Post" class="md:col-span-1 col-span-3" />
                @endforeach
            </div>
        </div>
        <a class="mt-10 block text-center text-lg text-red-500 font-semibold" href="/blog">Veja mais..</a>
    </div>

</x-app-layout>
