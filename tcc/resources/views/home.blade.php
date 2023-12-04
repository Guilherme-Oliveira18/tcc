<style>
    .foto_new {

        display display: block;
        max-width: 580px;
        MIN-height: 422px !IMPORTANT;
        width: auto !important;
        height: auto !important;
        /* margin: 410px; */
        border-radius: 20px !important;
        /* box-shadow: 0 0 10px silver; */
        margin: 4px;
        /* margin-bottom: 34px; */

    }

    .translate-x-0 {
        display: block !important;
    }

    .translate-x-full {
        display: none;
    }
</style>

<x-app-layout title="Home">



    <div class="mb-16">

        @section('hero')
            <x-section-init />

            <div id="default-carousel" class="relative justify-center  min-h-fit mt-10 mx-10" data-carousel="slide">
                <!-- Carousel wrapper -->
                <h2 class="relative text-center mt-16 mb-5 text-3xl text-red-600 font-bold ">Relevantes</h2>
                <div class="relative h-96 overflow-hidden rounded-lg sm:h-64,w-64 xl:h-80,w-80 2xl:h-96,w-24">
                    @foreach ($featuredPosts as $Post)
                        <!-- Item 1 -->
                        <div>
                            <a href="{{ route('blog.show', $Post->slug) }}" class="hidden duration-700 ease-in-out"
                                data-carousel-item>
                                <img src="{{ $Post->getThumbnailUrl() }}"
                                    class="foto_new absolute rounded-xl block w-1/2 h-80 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="{{ $Post->title }}" />

                            </a>
                        </div>
                    @endforeach
                </div>
                <x-slide-featured />
            @endsection


        </div>
        <hr>

    </div>
    <hr>
    <div class="flex flex-wrap py-10 justify-center items-center -m-4">
        <h2 class="mt-16 mb-5 text-3xl text-red-600 font-bold">Novidades</h2>
        <div class="flex flex-wrap w-full">
            <div class="container px-5 py-4 mx-auto">
                <div class="flex flex-wrap -m-4">
                    @foreach ($latestPosts as $Post)
                        <x-post.post-card :Post="$Post" />
                    @endforeach
                </div>
            </div>
            <div class=" w-full pb-2 justify-centeritems-center">
                <a class="mt-10 block text-center text-lg text-red-600 font-bold hover:text-red-900 duration-200"
                    href="/blog">Veja mais..</a>
            </div>
        </div>
    </div>

</x-app-layout>
