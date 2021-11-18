<div
    class="h-screen w-screen mt-28 py-3 px-12 shadow-2xl bg-white relative z-10
        xxs:absolute
        xs:right-0 xs:mt-32
        md:ml-40 md:mt-0 md:px-24 md:left-0
        lg:ml-32  lg:w-1/2
        xl:w-1/2 xl:h-screen xl:px-10
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

    
</div>
