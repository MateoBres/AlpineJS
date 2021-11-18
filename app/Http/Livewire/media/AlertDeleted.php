<?php

namespace App\Http\Livewire\media;

use Livewire\Component;

class AlertDeleted extends Component
{
    public function render()
    {
        return view('livewire.media.alert-deleted');
    }

    public function refreshFather()
    {
        $this->emitUp('refreshFather');
    }
}
