<?php

namespace App\Http\Livewire\company;

use Livewire\Component;

class AlertDeleted extends Component
{
    public function render()
    {
        return view('livewire.company.alert-deleted');
    }

    public function refreshFather()
    {
        $this->emitUp('refreshFather');
    }
}
