<?php

namespace App\Http\Livewire\Web_page;

use Livewire\Component;
use App\Models\Page;
use App\Models\Media;
use App\Models\Post;
use Livewire\WithPagination;

class OverlapWindowMedia extends Component
{
    use WithPagination;

    public $slugPage=null;
    public $socials;
    public $postId;
    public $search;
    public $outputSearch;
    public $searchText;
    public $actualPage;
    public $medias;
    // public $media ='media';
    protected $listeners = ['media', 'refresh'];
    protected $rules = ['search' => 'required'];
    // protected $queryString = ['media'];

    public function searchOutput()
    {
        $validateData = $this->validate();
        $this->searchText = $this->search;
    }

    public function resetSearch()
    {
        $this->search = '';
        $this->searchText = $this->search;
    }

    public function post($postId)
    {
        $this->emit('post', $postId);
    }

    public function media($actualPage_slug)
    {
        $this->slugPage = $actualPage_slug;
    }

    public function getQueryString()
    {
        return [];
    }

    public function render()
    {
        $this->actualPage = Page::where('slug', $this->slugPage)->first();
        if(isset($this->actualPage->slug))
        {
            $this->medias = Media::where('page_slug', $this->actualPage->slug)->get();
        }
        if (empty($this->searchText))
        {
            $posts = Post::with('media')->orderBy('created_at', 'DESC')->paginate(4);
        }
        else
        {
            $posts = Post::with('media')->where('title', 'like',  "%$this->searchText%")->orderBy('created_at', 'DESC')->paginate(4);
            
        }

        return view('livewire.webpage.overlap-window-media', [
            'actualPage' => $this->actualPage,
            'medias' => $this->medias??'',
            'slugPage' => $this->slugPage,
            'posts' => $posts
        ]);
    }
}
