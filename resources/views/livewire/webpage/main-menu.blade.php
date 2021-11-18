<div id="main-menu" x-show = "showMainMenu" class="w-screen">
    <ul class="text-white text-4xl font-bold px-10 pt-24 leading-10 text-5xl
            md:ml-44 md:text-6xl md:pt-12
            lg:text-6xl lg:w-2/5 lg:ml-36
            xl:px-0 xl:leading-12 xl:text-6xl xl:ml-40
            2xl:tracking-wide 2xl:ml-60 2xl:text-7xl">
        <a x-on:click="showSubmenuMondo=true">
            <li  class="py-2 hover:text-gray-400 mt-16 cursor-pointer  xxs:py-3 xs:mt-24">Mondo feelera</li>
        </a>
        @livewire('web_page.submenu-mondo')
        <a x-on:click="setTimeout(() => showOverlapMondo = true, 800)" wire:click="software('software')">
            <li class="py-2 xxs:py-3 hover:text-gray-400 cursor-pointer">Software</li>
        </a>
        <a x-on:click="setTimeout(() => showOverlapMondo = true, 800)" wire:click="servizi('servizi-sviluppo')">
            <li class="py-2 xxs:py-3 hover:text-gray-400 cursor-pointer">Servizi</li>
        </a>
        <a x-on:click="setTimeout(() => showOverlapMondo = true, 800)" wire:click="media('media')">
            <li class="py-2 xxs:py-3 hover:text-gray-400 cursor-pointer">Media</li>
        </a>
    </ul>
    <div x-show = "showMainMenu">
        @livewire('web_page.mobile-socials')
    </div>
</div>

