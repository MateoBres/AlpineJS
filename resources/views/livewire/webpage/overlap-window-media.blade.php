
<div
    class= "
        w-screen mt-28 shadow-2xl px-12 py-3 bg-white relative z-10
        xxs:absolute
        xs:right-0 xs:mt-32
        md:left-0 md:ml-40 md:mt-0 md:w-4/5
        lg:h-screen lg:ml-32
        xl:px-12 xl:w-2/3
        2xl:h-screen 2xl:left-6 2xl:pl-20 2xl:px-16"
    x-cloak
    x-show = "showOverlapMondo"
    x-on:click.away="showOverlapMondo = false"
    x-on:keydown.escape.window="showOverlapMondo = false"
    x-transition:enter="transition duration-1000 transform"
    x-transition:enter-start="transform -translate-x-full"
    x-transition:enter-end="transform translate-x-0"
    x-transition:leave="transition delay-1000 duration-1000 transform"
    x-transition:leave-start="transform translate-x-0 "
    x-transition:leave-end="transform -translate-x-full"
>

    {!! $actualPage->content??'' !!}
    <hr class="border-t-1 border-feelera_green-default mt-4 md:w-14/15 md:border-t-2 md:mt-0 xl:mt-2">
    <div class="grid grid-cols-1 mb-120 mt-6 lg:grid-cols-2 lg:mt-6 xl:mt-2 xl:w-full 2xl:mt-6">
        @forelse ($posts as $post)
        <div class="flex flex-row justify-center">
                @if ($post->type == 'video')
                <div class="w-full lg:mr-10  2xl:mr-16 2xl:mt-4">
                    <div class="mb-1 md:mb-3 lg:mb-0">
                        <iframe class="w-full h-44 shadow-feelera
                            xs:h-56
                            sm:h-72
                            lg:h-48
                            xl:h-40
                            2xl:h-60"
                            frameborder="0"
                            src="{{ asset($post->media[0]->url) }}">
                        </iframe>
                    </div>
                    <div class="flex flex-row">
                        <img class="w-6 h-5 mt-4 xl:w-5 xl:h-4 2xl:w-6 2xl:h-5" src="{{ asset('/media/youtube.png') }}" alt="youtube-icon">
                        <div class="ml-4">
                @elseif ($post->type == 'article')
                <div class="w-full lg:mr-10 xl:mr-10 2xl:mr-16  2xl:mt-4">
                    <img
                        src="{{ asset($post->media[0]->url) }}"
                        alt="{{ $post->slug }}"
                        class="mb-1 mt-2 w-full h-44 shadow-feelera
                            sm:h-72
                            md:h-56 md:mb-3
                            lg:h-48 lg:mb-0 lg:mt-0
                            xl:mt-0 xl:mb-0 xl:h-40
                            2xl:h-60"
                    >
                    <div class="flex flex-row">
                        <img class="w-7 h-7 mt-4 xl:h-6 xl:w-6 2xl:w-7 2xl:h-7" src="{{ asset('/media/article.png') }}" alt="article-icon">
                        <div class="ml-4">
                @elseif ($post->type == 'post')
                <div class="w-full lg:mr-10 2xl:mr-16  2xl:mt-4">
                    <img
                        src="{{ asset($post->media[0]->url) }}"
                        alt="{{ $post->slug }}"
                        class="mb-1 mt-2 w-full h-44 shadow-feelera
                            sm:h-72
                            md:h-56 md:mb-3
                            lg:h-48
                            xl:mt-0 xl:mb-0 xl:h-40
                            2xl:h-60"
                    >
                    <div class="flex flex-row">
                        <img class="w-7 h-7 mt-4 xl:h-6 xl:w-6 2xl:w-7 2xl:h-7" src="{{ asset('/media/post.png') }}" alt="post-icon">
                        <div class="ml-4">
                @endif
                            <h3 class="text-lg font-extrabold text-feelera_green-default leading-5
                            sm:mt-2 sm:mb-1 md:leading-6 lg:leading-4 lg:mt-1 2xl:mt-2">{{ $post->title }}</h3>
                            <p class="mb-6 text-base leading-none font-bold tracking-wide lg:text-sm lg:leading-4 2xl:hidden leading-6 xl:leading-4 xl:text-sm xl:tracking-tight xl:mb-2">
                                @if (strlen($post->content)>120)
                                    {{ substr($post->content,0,120) }}<a href="#" wire:click="post('{{$post->id}}')"
                                    x-on:click="showOverlapMondo=true" class="text-feelera_green-default ">&nbsp;&nbsp;&nbsp;&nbsp;>>></a>
                                @else
                                    {{ $post->content }}
                                @endif
                            </p>
                            <p class="hidden mb-6 text-base leading-none font-bold tracking-wide leading-6 lg:text-sm lg:leading-4 2xl:block xl:leading-4 xl:text-sm xl:tracking-tight xl:mb-2">
                                @if (strlen($post->content)>150)
                                    {{ substr($post->content,0,150) }}<a href="#" wire:click="post('{{$post->id}}')"
                                    x-on:click="showOverlapMondo=true" class="text-feelera_green-default">&nbsp;&nbsp;&nbsp;&nbsp;>>></a>
                                @else
                                    {{ $post->content }}
                                @endif
                            </p>
                        </div>
                </div>
            </div>
        </div>
        @empty
        <div class="flex flex-col justify-center mt-16 mb-12">
            <p class="mx-auto text-red-900">No items found</p>
            <svg class="mx-auto text-red-900" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="4em" height="4em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g stroke-width="1.5" fill="none"><path d="M12 8v4" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 16.01l.01-.011" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 3H4v3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 11v2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="M20 11v2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 3h5v3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 21H4v-3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 21h5v-3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/></g></svg>
        </div>
        @endforelse
    </div>
    <div>
        {{ $posts->links('pagination-links') }}
    </div>
</div>
