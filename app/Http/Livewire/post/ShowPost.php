<?php

namespace App\Http\Livewire\post;

use Livewire\Component;

class ShowPost extends Component
{
    public $posts;
    public $users;
    protected $listeners = ['refreshFather'];
    public $confirmation;

    public function render()
    {
        return view('livewire.post.show-post');
    }

    public function refreshFather(){}

    public function deleteConfirm($id)
    {
        return view('livewire.post.show-post', ['confirmation' => true]);
    }


}
