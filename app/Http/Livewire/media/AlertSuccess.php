<?php

namespace App\Http\Livewire\media;

use Livewire\Component;

class AlertSuccess extends Component
{
    public function render()
    {
        return view('livewire.media.alert-success');
    }

    public function refreshFather()
    {
        $this->emitUp('refreshFather');
    }
}
