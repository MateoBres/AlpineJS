<?php

namespace App\Http\Livewire\media;

use Livewire\Component;

class ShowMedia extends Component
{
    public $medias;
    public $pages;
    public $media;
    protected $listeners = ['refreshFather'];
    public $confirmation;

    public function render()
    {
        return view('livewire.media.show-media');
    }

    public function refreshFather(){}

    public function deleteConfirm($id)
    {
        return view('livewire.media.show-media', ['confirmation' => true]);
    }
}
