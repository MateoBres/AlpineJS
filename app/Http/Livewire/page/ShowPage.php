<?php

namespace App\Http\Livewire\page;

use Livewire\Component;
use App\Models\Page;

class ShowPage extends Component
{
    public $pages;
    protected $listeners = ['refreshFather'];
    public $confirmation;

    public function render()
    {
        return view('livewire.page.show-page');
    }

    public function refreshFather(){}

    // public function deleteConfirm($id)
    // {
    //     $this->dispatchBrowserEvent('swal:confirm', [
    //         'type' => 'warning',
    //         'title' => 'Are you sure?',
    //         'text' => '',
    //         'id' => $id,
    //     ]);
    // }
    public function deleteConfirm($id)
    {
        return view('livewire.page.show-page', ['confirmation' => true]);
    }

    //redirect('/page/show')->with(['message'=>$request->title . ' modified correctly!']);

}
