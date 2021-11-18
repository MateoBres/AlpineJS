<?php

namespace App\Http\Livewire\company;

use Livewire\Component;

class AlertSuccess extends Component
{
    public function render()
    {
        return view('livewire.company.alert-success');
    }

    public function refreshFather()
    {
        $this->emitUp('refreshFather');
    }
}
