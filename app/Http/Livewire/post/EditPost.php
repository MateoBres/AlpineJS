<?php

namespace App\Http\Livewire\post;

use Livewire\Component;

class EditPost extends Component
{
    public $post;


    public function render()
    {
        return view('livewire.post.edit-post');
    }

}
