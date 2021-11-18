<?php

namespace App\Http\Livewire\Web_page;

use Livewire\Component;
use App\Models\Page;

class HomePage extends Component
{
    public function render()
    {
        $page = Page::where('slug', 'home-page')->first();

        return view('livewire.webpage.home-page', [
            'page' => $page,
        ]);
    }
}
