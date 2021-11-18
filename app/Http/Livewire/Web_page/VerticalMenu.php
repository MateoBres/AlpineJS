<?php

namespace App\Http\Livewire\Web_page;

use App\Models\Company;
use Livewire\Component;

class VerticalMenu extends Component
{
    public $company;
    public function render()
    {
        $this->company = Company::first();

        return view('livewire.webpage.vertical-menu', [
            'comapny' => $this->company
        ]);
    }
}
