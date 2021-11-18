<div
    class= "
        w-screen mt-28 shadow-2xl px-12 py-3 bg-white relative z-10
        xxs:absolute
        xs:right-0 xs:mt-32
        md:left-0 md:ml-40 md:mt-0 md:h-screen md:px-16
        lg:ml-32 lg:w-7/12
        xl:px-10 xl:w-1/2 xl:h-screen
        2xl:ml-40 2xl:px-16"
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

    {!! $page->content??'' !!}

    @if ($media)

        <img src="{{ $media->url??'' }}" alt="{{ $page->slug??''}}" class="ml-24 mr-auto h-80 w-auto mt-3">

    @endif

</div>
