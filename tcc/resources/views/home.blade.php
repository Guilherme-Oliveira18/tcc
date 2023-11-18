<x-app-layout title="Home">

    <div class="mb-10 w-full">

        <div class="mb-16">

            @section('hero')
                <x-section-init/>

                    <div id="default-carousel"  class="relative justify-center  min-h-fit mt-10 mx-10" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <h2 class="relative text-center mt-16 mb-5 text-3xl text-red-600 font-semibold "> Os mais relevantes</h2>
                        <div class="relative h-96 overflow-hidden rounded-lg sm:h-64,w-64 xl:h-80,w-80 2xl:h-96,w-24">
                            @foreach ($featuredPosts as $Post)
                                <!-- Item 1 -->
                                    <a href="{{ route('blog.show', $Post->slug) }}" class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ $Post->getThumbnailUrl() }}" class="absolute rounded-xl block w-1/2 h-80 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="{{ $Post->title}}">

                                        <div class="hidden items-center mb-2 gap-x-2">
                                            @if ($categoria = $Post->categorias()->first())
                                                <x-post.categoria-badge :categoria="$categoria" />
                                            @endif
                                            <p class="hidden text-gray-700 text-sm">{{ Str::upper($Post->publidado_em->diffForHumans()) }}</p>
                                        </div>
                                        <a wire:navigate href="{{ route('blog.show', $Post->slug) }}"
                                            class="hidden text-xl font-bold text-gray-900">{{ $Post->titulo }}</a>
                                         </a>
                            @endforeach
                        </div>
                    <x-slide-featured />

            @endsection


        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-red-600 font-bold">Novidades</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($latestPosts as $Post)
                    <x-post.post-card :Post="$Post" class="md:col-span-1 col-span-3 " />
                @endforeach
            </div>
        </div>
        <a class="mt-10 block text-center text-lg text-red-600 font-semibold hover:text-red-900 duration-200" href="/blog">Veja mais..</a>
    </div>

</x-app-layout>
