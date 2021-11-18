<?php

namespace App\Http\Livewire\media;

use Livewire\Component;

class DeleteMedia extends Component
{
    public $media;

    public function render()
    {
        return view('livewire.media.delete-media');
    }
}
