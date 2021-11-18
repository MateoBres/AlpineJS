<?php

namespace App\Http\Livewire\Web_page;

use App\Models\Company;
use Livewire\Component;

class Socials extends Component
{
    public $socials;

    public function render()
    {
        $company = Company::where('name', 'feelera srl')->first();
        $this->socials = explode(',', $company->socials);


        return view('livewire.webpage.socials', [
            'socials' => $this->socials
        ]);
    }
}
