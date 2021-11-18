<?php

namespace App\Http\Livewire\company;

use Livewire\Component;

class EditCompany extends Component
{
    public $company;

    public function render()
    {
        return view('livewire.company.edit-company');
    }

}
