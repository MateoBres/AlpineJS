<?php

namespace App\Http\Livewire\media;

use Livewire\Component;

class EditMedia extends Component
{
    public $media;

    public function render()
    {
        return view('livewire.media.edit-media');
    }

}
