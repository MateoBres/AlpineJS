<?php

namespace App\Http\Livewire\post;

use Livewire\Component;

class AlertError extends Component
{
    public $error;

    public function render()
    {
        return view('livewire.post.alert-error');
    }

    public function refreshFather()
    {
        $this->emitUp('refreshFather');
    }
}
