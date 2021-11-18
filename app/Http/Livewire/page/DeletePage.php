<?php

namespace App\Http\Livewire\page;

use Livewire\Component;

class DeletePage extends Component
{
    public $page;

    public function render()
    {
        return view('livewire.page.delete-page');
    }
}
