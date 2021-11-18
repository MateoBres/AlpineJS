<?php

namespace App\Http\Livewire\Web_page;

use Livewire\Component;
use App\Models\Page;

class OverlapWindowSoftware extends Component
{
    public $slugPage=null;

    protected $listeners = ['software'];

    public function software($slugPage)
    {
        $this->slugPage = $slugPage;
    }

    public function render()
    {
        $page = Page::where('slug', $this->slugPage)->first();
        
        return view('livewire.webpage.overlap-window-software', [
            'page' => $page,
            'slugPage' => $this->slugPage,
        ]);
    }
}
