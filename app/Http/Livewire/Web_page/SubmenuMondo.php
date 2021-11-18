<?php

namespace App\Http\Livewire\Web_page;

use Livewire\Component;

class SubmenuMondo extends Component
{
    public $slugPage;

    public function mondofeelera($slugPage)
    {
        $this->emit('mondofeelera', $slugPage);
    }

    public function mondofeelera2($slugPage)
    {
        $this->emit('mondofeelera', $slugPage);
    }

    public function mondofeelera3($slugPage)
    {
        $this->emit('mondofeelera', $slugPage);
    }

    public function render()
    {
        return view('livewire.webpage.submenu-mondo');
    }
}
