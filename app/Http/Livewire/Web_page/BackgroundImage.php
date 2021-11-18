<?php

namespace App\Http\Livewire\Web_page;

use App\Models\Media;
use Livewire\Component;

class BackgroundImage extends Component
{
    public $slugPage;
    public $section;
    public $mainPicture;
    public $postId;

    protected $listeners = ['mondofeelera', 'software', 'servizi', 'media', 'post'];

    public function mainPicture($slugPage)
    {
        $mediaArray = Media::where('page_slug', $slugPage)->get();
        foreach($mediaArray as $picture)
            if (strpos($picture->url, '/main_') !== false) {
                $this->mainPicture = $picture->url;
            }
    }

    public function mondofeelera($slugPage)
    {
        $this->mainPicture($slugPage);
    }

    public function mondofeelera2($slugPage)
    {
        $this->mainPicture($slugPage);
    }

    public function mondofeelera3($slugPage)
    {
        $this->mainPicture($slugPage);
    }


    public function software($slugPage)
    {
        $this->mainPicture($slugPage);
    }

    public function servizi($slugPage)
    {
        $this->mainPicture($slugPage);
    }

    public function media($slugPage)
    {        
        $this->mainPicture($slugPage);
    }

    public function post($postId)
    {
        $this->postId = $postId;
        $this->section = 'post';
    }

    public function render()
    {
        return view('livewire.webpage.background-image', [
            'slugPage'=>$this->slugPage,
            'section'=>$this->section,
            'mainPicture'=>$this->mainPicture
        ]);
    }
}
