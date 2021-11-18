<?php

namespace App\Http\Livewire\Web_page;

use Livewire\Component;
use App\Models\Page;
use App\Models\Media;

class OverlapWindowServizi extends Component
{
    public $slugPage=null;

    protected $listeners = ['servizi'];



    public function servizi($id)
    {
        $this->slugPage = $id;
    }

    public function render()
    {
        $page = Page::where('slug', $this->slugPage)->first();
        if(isset($page->id))
            $media = Media::find($page->id);

        return view('livewire.webpage.overlap-window-servizi', [
            'page' => $page,
            'media' => $media??'',
            'slugPage' => $this->slugPage
        ]);
    }
}
