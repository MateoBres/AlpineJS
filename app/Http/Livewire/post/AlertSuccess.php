<?php

namespace App\Http\Livewire\post;

use Livewire\Component;

class AlertSuccess extends Component
{
    public function render()
    {
        return view('livewire.post.alert-success');
    }

    public function refreshFather()
    {
        $this->emitUp('refreshFather');
    }
}
