<?php

namespace App\Http\Livewire\Web_page;

use Livewire\Component;
use App\Models\Page;
use App\Models\Media;

class OverlapWindowMondo extends Component
{
    public $slugPage=null;

    protected $listeners = ['mondofeelera'];



    public function mondofeelera($slug)
    {
        $this->slugPage = $slug;
    }

    public function render()
    {
        $page = Page::where('slug', $this->slugPage)->first();
        if(isset($page->slug))
            $mediaArray = Media::where('page_slug', $page->slug)->orderBy('url')->get();
        foreach($mediaArray as $picture)
            if (strpos($picture->url, '/main_') === false) {
                $medias[] = $picture;
            }
        return view('livewire.webpage.overlap-window-mondo', [
            'page' => $page,
            'medias' => $medias??'',
            'slugPage' => $this->slugPage
        ]);
    }
}
