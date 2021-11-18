<?php

namespace App\Http\Livewire\page;

use Livewire\Component;

class AlertError extends Component
{
    public $error;

    public function render()
    {
        return view('livewire.page.alert-error');
    }

    public function refreshFather()
    {
        $this->emitUp('refreshFather');
    }
}
