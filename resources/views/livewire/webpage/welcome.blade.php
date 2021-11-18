<div class="container font-feelera_lato"
    x-data="{
        showOverlapMondo: false,
        showSubmenuMondo: false,
        showOverlapSoftware: false,
        showSubmenuSoftware: false,
        showOverlapServizi: false,
        showSubmenuServizi: false,
        showOverlapMedia: false,
        showSubmenuMedia: false,
        showMainMenu: false,
        showOverlapPost: false,
    }">

@livewire('web_page.vertical-menu')
@livewire('web_page.mobile-menu')
@livewire('web_page.background-image')




@if($section==='mondofeelera')

    @livewire('web_page.overlap-window-mondo', [
        'slugPage' => $slugPage
        ])

@elseif ($section==='software')

    @livewire('web_page.overlap-window-software', [
        'slugPage' => $slugPage
        ])

@elseif ($section==='servizi')

    @livewire('web_page.overlap-window-servizi', [
        'slugPage' => $slugPage
        ])

@elseif ($section==='media')

    @livewire('web_page.overlap-window-media', [
        'slugPage' => $slugPage
        ])



@elseif ($section==='post')

    @livewire('web_page.overlap-window-post', [
        'postId' => $postId
        ])

@endif

</div>
