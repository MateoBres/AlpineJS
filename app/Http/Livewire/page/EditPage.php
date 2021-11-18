<?php

namespace App\Http\Livewire\page;

use Livewire\Component;
use App\Models\Page;

class EditPage extends Component
{
    // public $pito ='popo';
    // public $title='';
    // public $slug = '';
    // public $isHomepage = '';
    // public $content = '';
    // // public $media = '';
    // public $saved = false;
    public $page;


    public function render()
    {
        return view('livewire.page.edit-page');
    }



    // public function mount(Page $page)
    // {
    //     $this->title = $page->title;
    //     $this->slug = $page->slug;
    //     $this->isHompage = $page->isHomepage;
    //     $this->content = $page->content;
    //     // $this->media = $page->media;
    // }

    // public function update()
    // {
    //     $this->update = 'updated';
    //     $page = Page::find($this->id);
    //     $page->update([
    //         'title' => $this->title,
    //         'slug' => $this->slug,
    //         'isHomepage' => $this->isHompage,
    //         'content' => $this->content,
    //     ]);
    // }

}
