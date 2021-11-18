<?php

namespace App\Http\Livewire\Web_page;

use App\Models\Media;
use Livewire\Component;

class Welcome extends Component
{
    public $slugPage;
    public $section;
    public $mainPicture;
    public $postId;

    protected $listeners = ['mondofeelera', 'software', 'servizi', 'media', 'post'];


    public function mondofeelera($slugPage)
    {
        $this->slugPage = $slugPage;
        $this->section = 'mondofeelera';
        
    }

    public function mondofeelera2($slugPage)
    {
        
        $this->slugPage = $slugPage;
        $this->section = 'mondofeelera';
        
    }

    public function mondofeelera3($slugPage)
    {
        $this->slugPage = $slugPage;
        $this->section = 'mondofeelera';
        
    }


    public function software($slugPage)
    {
        $this->slugPage = $slugPage;
        $this->section = 'software';
        
    }

    public function servizi($slugPage)
    {
        $this->slugPage = $slugPage;
        $this->section = 'servizi';
        
    }

    public function media($slugPage)
    {
        $this->slugPage = $slugPage;
        $this->section = 'media';
        
    }

    public function post($postId)
    {
        $this->postId = $postId;
        $this->section = 'post';
    }

    public function render()
    {
        return view('livewire.webpage.welcome', [
            'slugPage'=>$this->slugPage,
            'section'=>$this->section,
            'mainPicture'=>$this->mainPicture
        ]);
    }
}
