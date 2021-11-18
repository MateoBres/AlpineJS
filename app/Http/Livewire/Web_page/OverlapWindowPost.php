<?php

namespace App\Http\Livewire\Web_page;

use Livewire\Component;
use App\Models\Post;

class OverlapWindowPost extends Component
{
    public $postId;

    protected $listeners = ['post'];


    public function post($postId)
    {
        $this->postId = $postId;
    }

    public function render()
    {
        $post = Post::with('media')->find($this->postId);
        return view('livewire.webpage.overlap-window-post', [
            'post' => $post,
        ]);
    }
}
