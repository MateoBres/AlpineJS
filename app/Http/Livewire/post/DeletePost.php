<?php

namespace App\Http\Livewire\post;

use Livewire\Component;

class DeletePost extends Component
{
    public $post;

    public function render()
    {
        return view('livewire.post.delete-post');
    }
}
