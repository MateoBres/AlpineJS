<?php

namespace App\Http\Livewire\company;

use Livewire\Component;

class DeleteCompany extends Component
{
    public $company;

    public function render()
    {
        return view('livewire.company.delete-company');
    }
}
