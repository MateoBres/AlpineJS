<?php

namespace App\Http\Livewire\media;

use Livewire\Component;

class CreateMedia extends Component
{
    public $pages;
    public $posts;

    public function render()
    {
        return view('livewire.media.create-media');
    }
}
