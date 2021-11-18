<div id="home-page" x-show = "!showMainMenu">
    <div id="content-home-page" class="px-6 md:ml-40 lg:ml-32 2xl:ml-40"
        style="padding-top: 5%">
            {!! $page->content !!}
    </div>
    <div id="richiedi" class="sm:hidden">
        <a href="#" class="cursor-pointer">
            <div class="flex flex-row justify-start ml-6 mt-6">
                <div class="" style="
                                width: 0;
                                height: auto;
                                border-top: 30px solid transparent;
                                border-left: 15px solid #cdde00;
                                border-bottom: 30px solid transparent;">
                </div>

                <p class="w-40 h-auto pt-2 pb-3 pl-4 cursor-pointer font-black leading-none tracking-normal mix-blend-screen bg-feelera_green-default text-xl">Richiedi subito la Tua demo</p>
            </div>
        </a>
    </div>
    <div id="richiedi" class="hidden sm:block">
        <a href="#" class="cursor-pointer">
            <div class="flex flex-row justify-start ml-6 mt-6
                    md:ml-64 md:mt-20
                    lg:justify-start lg:ml-56
                    xl:justify-start xl:mt-10
                    2xl:justify-start 2xl:ml-64 2xl:mt-6">
                <div class="" style="
                                width: 0;
                                height: 0;
                                border-top: 50px solid transparent;
                                border-left: 20px solid #cdde00;
                                border-bottom: 50px solid transparent;">
                </div>

                <p class="cursor-pointer font-black text-3xl leading-none tracking-normal mix-blend-screen bg-feelera_green-default pt-4 pb-3 pl-4 w-60 h-auto
                2xl:w-80 2xl:text-4xl 2xl:pl-6 2xl:pr-4">Richiedi subito la Tua demo</p>
            </div>
        </a>
    </div>
    @livewire('web_page.mobile-socials')
</div>

