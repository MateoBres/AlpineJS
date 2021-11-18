<?php

namespace App\Http\Livewire\company;

use Livewire\Component;

class ShowCompany extends Component
{
    public $companies;
    public $company;
    protected $listeners = ['refreshFather'];

    public function render()
    {
        return view('livewire.company.show-company');
    }

    public function refreshFather(){}

}
