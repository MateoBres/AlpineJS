<div
    class= "w-screen mt-28 shadow-2xl px-12 py-3 bg-white relative z-10
        xxs:absolute
        xs:right-0 xs:mt-32
        md:left-0 md:ml-40 md:mt-0 md:w-4/5 md:h-full
        lg:h-auto lg:ml-32
        xl:px-12 xl:w-2/3
        2xl:h-screen 2xl:left-6 2xl:pl-20 2xl:px-16"
    x-cloak
    x-show = "showOverlapMondo"
    x-on:click.away="showOverlapMondo = false"
    x-on:keydown.escape.window="showOverlapMondo = false"
    x-transition:enter="transition duration-1000 transform"
    x-transition:enter-start="transform -translate-x-full "
    x-transition:enter-end="transform translate-x-0"
    x-transition:leave="transition delay-1000 duration-1000 transform"
    x-transition:leave-start="transform translate-x-0 "
    x-transition:leave-end="transform -translate-x-full"
>

    <h1 class="text-lg font-extrabold text-feelera_green-default tracking-wide mt-6 mb-10
        lg:mt-10
        xl:mt-6 xl:mb-6 xl:text-lg"
        >{{ ucfirst($post->type) }}</h1>

    <h2 class="mb-6 text-left text-4xl font-bold text-feelera_green-default leading-10 mt-10 w-full tracking-wide
        sm:leading-tight md:mt-6 md:leading-none
        lg:mt-10 lg:text-5xl lg:font-extrabold lg:mt-10 lg:mb-16"
    >{{ $post->title }}</h2>

    <div class="mb-12">
        <div class="flex flex-row justify-center
            md:mt-10
            lg:mt-16 lg:mb-16 lg:mr-48
            xl:mr-0 2xl:mr-0"
            >

                <div>
                    @if ($post->type == 'video')
                        <iframe class="w-full h-44 shadow-feelera
                            xs:h-60 xs:w-96
                            lg:mt-0 lg:mb-0 lg:h-60 lg:w-96 lg:mr-10
                            xl:w-full xl:h-60"
                            src="{{ $post->media[0]->url }}">
                        </iframe>
                    @elseif ($post->type == 'article')
                        <img
                            src="{{ $post->media[0]->url }}"
                            alt="{{ $post->media[0]->type}}"
                            class="w-auto h-auto
                                xs:h-60 xs:w-96
                                lg:mt-0 lg:mb-0 lg:h-96 lg:mr-10
                                xl:w-full xl:h-60"
                        >
                    @elseif ($post->type == 'post')
                        <img
                            src="{{ $post->media[0]->url }}"
                            alt="{{ $post->media[0]->type}}"
                            class="w-auto h-auto
                                xs:h-60 xs:w-96
                                lg:mt-0 lg:mb-0 lg:h-96 lg:mr-10
                                xl:w-full xl:h-60"
                        >
                    @endif
                </div>
        </div>
    </div>

    <p class="mb-12 text-xl tracking-wide font-bold mt-5
        md:mt-3 leading-normal md:leading-tight
        lg:text-2xl lg:font-extrabold lg:leading-normal lg:mt-5 lg:mr-44
        xl:w-full
        2xl:mr-0"
    >{{ $post->content }}</p>

</div>
