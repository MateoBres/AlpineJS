<?php

namespace App\Http\Livewire\post;

use Livewire\Component;

class AlertDeleted extends Component
{
    public function render()
    {
        return view('livewire.post.alert-deleted');
    }

    public function refreshFather()
    {
        $this->emitUp('refreshFather');
    }
}
