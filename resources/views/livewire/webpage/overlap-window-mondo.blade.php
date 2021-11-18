<div

    class= "
        w-screen mt-28 shadow-2xl px-12 bg-white relative z-10 py-1
        xxs:absolute
        xs:right-0 xs:px-16 xs:mt-32
        md:left-0 md:ml-40 md:mt-0 md:h-screen
        lg:px-16 lg:py-5 lg:w-7/12 lg:ml-32
        xl:px-10 xl:w-1/2
        2xl:w-1/2 2xl:ml-40 2xl:px-16"
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
@if($medias)
    @if ($medias[0]->page_slug === 'mondo-feelera')

{{-- ########################## INFOGRAFICA SECTION ######################### --}}

            <img src="{{ asset($medias[0]->url)??'' }}"
                alt="{{ $medias[0]->page_slug??''}}"
                class="h-64 mt-10 mr-auto w-auto mb-10
                    xxs:ml-4
                    xs:relative xs:left-2
                    sm:h-96 sm:ml-20
                    md:text-5xl md:ml-10
                    lg:h-2/5
                    xl:w-80 xl:h-auto xl:mt-4 xl:ml-16
                    2xl:mb-0 2xl:mt-10 2xl:h-1/2 2xl:w-auto 2xl:ml-28">
        @elseif($medias[0]->page_slug === 'mondo-feelera-team')

{{-- ########################## TEAM SECTION ######################### --}}

            <img
                src="{{ asset($medias[0]->url)??'' }}"
                alt="{{ $medias[0]->page_slug??''}}"
                class="h-20 w-auto relative top-20 z-0
                    xs:h-32 xs:top-32
                    sm:h-40
                    md:h-44
                    lg:h-36
                    xl:left-6
                    2xl:h-48 2xl:top-36">
            <img
                src="{{ asset($medias[1]->url)??'' }}"
                alt="{{ $medias[1]->page_slug??''}}"
                class="h-36 w-auto relative left-32 bottom-16 z-20
                    xs:h-48 xs:bottom-20 xs:left-44
                    sm:h-40
                    md:h-64 md:bottom-48
                    lg:h-52 lg:bottom-24 lg:left-64
                    2xl:h-80 2xl:left-80 2xl:bottom-40">
            <img
                src="{{ asset($medias[2]->url)??'' }}"
                alt="{{ $medias[2]->page_slug??''}}"
                class="h-32 w-auto relative left-8 bottom-20 z-10
                    xs:h-40 xs:bottom-24 xs:left-10
                    sm:h-52 sm:bottom-20
                    md:bottom-40 md:left-16
                    lg:h-44 lg:bottom-28 lg:left-24
                    xl:h-44 xl:bottom-32
                    2xl:h-64 2xl:left-32 2xl:bottom-72
                    ">
            <img
                src="{{ asset($medias[3]->url)??'' }}"
                alt="{{ $medias[3]->page_slug??''}}"
                class="h-28 w-auto relative bottom-36 left-44 z-30
                    xs:h-36 xs:bottom-52 xs:left-60
                    sm:h-44 sm:bottom-64 sm:left-72
                    md:h-56 md:left-60
                    lg:h-40 lg:left-80 lg:bottom-52
                    xl:h-36 xl:bottom-64
                    2xl:h-56 2xl:bottom-96 2xl:left-96">

        @elseif($medias[0]->page_slug === 'mondo-feelera-partnerships')

{{-- ########################## PARTNERSHIPS SECTION ######################### --}}

        <div class="xl:py-20">
            <img
                src="{{ asset($medias[0]->url)??'' }}"
                alt="{{ $medias[0]->page_slug??''}}"
                class="h-12 w-auto relative right-2
                    xxs:h-16
                    sm:h-20
                    lg:h-12 lg:right-10
                    xl:bottom-24 xl:right-3
                    2xl:h-24">
            <img
                src="{{ asset($medias[1]->url)??'' }}"
                alt="{{ $medias[1]->page_slug??''}}"
                class="h-16 w-auto relative bottom-16 left-40
                    xxs:h-24 xxs:bottom-16 xxs:left-52
                    xs:left-60 xs:bottom-28
                    sm:h-28 sm:bottom-20 sm:left-72
                    md:h-28
                    lg:h-20 lg:left-11/12 lg:ml-12
                    xl:bottom-40 xl:left-36
                    2xl:h-32 2xl:left-64 2xl:bottom-48">
            <img
                src="{{ asset($medias[2]->url)??'' }}"
                alt="{{ $medias[2]->page_slug??''}}"
                class="h-12 w-auto relative bottom-10 left-16
                    xxs:h-16 xxs:bottom-10 xxs:left-10
                    xs:left-36 xs:bottom-20
                    sm:h-20 sm:bottom-20 sm:left-20
                    md:h-20 md:mb-12
                    lg:h-12 lg:bottom-32 lg:left-36
                    xl:bottom-56 xl:left-96
                    2xl:h-24 2xl:bottom-80 2xl:left-140">
        </div>
        @endif
    @endif
</div>


