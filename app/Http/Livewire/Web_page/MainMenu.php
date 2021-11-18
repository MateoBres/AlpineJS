<?php

namespace App\Http\Livewire\Web_page;

use Livewire\Component;

class MainMenu extends Component
{
    public $slugPage;
    
    
    public function media($slugPage)
    {
        $this->emit('media', $slugPage);
    } 

    public function servizi($slugPage)
    {
        $this->emit('servizi', $slugPage);
    }

    public function software($slugPage)
    { 
        $this->emitUp('software', $slugPage);
       
    }

    public function render()
    {
        return view('livewire.webpage.main-menu');
    }
}
