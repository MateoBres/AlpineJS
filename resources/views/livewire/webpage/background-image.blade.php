<div id="backgroundImage">
    @if($mainPicture)
        <div
        id="main1"
        class="hidden md:block h-screen w-screen bg-cover flex fixed top-0"
        style="background-image: url({{ $mainPicture }});">
        @livewire('web_page.socials')
        @livewire('web_page.main-menu')
        </div>
        <div
        id="main2"
        class="md:hidden min-h-screen bg-cover flex fixed top-0 w-screen"
        style="background-image: url('media/main/leaf_mobile.jpg');">
        {{-- @livewire('web_page.mobile-socials') --}}
        @livewire('web_page.socials')
        @livewire('web_page.main-menu')
        </div>
    @else
        <div
        id="main3"
        class="hidden md:block h-screen w-screen bg-cover flex top-0"
        style="background-image: url('media/main/leaf.jpg');">
        @livewire('web_page.socials')
        @livewire('web_page.main-menu')
        @livewire('web_page.home-page')
        </div>
        <div
        id="main4"
        class="hidden sm:block md:hidden min-h-screen bg-cover flex top-0 w-screen"
        style="background-image: url('media/main/leaf_mobile.jpg');">
        {{-- @livewire('web_page.mobile-socials') --}}
        @livewire('web_page.main-menu')
        @livewire('web_page.home-page')
        </div>
        <div
        id="main5"
        class="sm:hidden min-h-screen bg-cover flex top-0 w-screen"
        style="background-image: url('media/main/leaf_mobile.jpg');">
        {{-- @livewire('web_page.mobile-socials') --}}
        @livewire('web_page.main-menu')
        @livewire('web_page.home-page')
        </div>
    @endif
</div>

