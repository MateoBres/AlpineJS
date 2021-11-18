<?php

namespace App\Http\Livewire\page;

use Livewire\Component;

class AlertDeleted extends Component
{
    public function render()
    {
        return view('livewire.page.alert-deleted');
    }

    public function refreshFather()
    {
        $this->emitUp('refreshFather');
    }
}
