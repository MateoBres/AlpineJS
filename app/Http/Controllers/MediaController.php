<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Page;
use App\Models\Post;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::orderBy('created_at', 'DESC')->get();
        $pages = Page::all();
        return view('media.show', [
            'medias' => $medias,
            'pages' => $pages
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::all();
        $posts = Post::all();

        return view('media.create', [
            'pages' => $pages,
            'posts' => $posts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( $request->hasFile('media')){

            if($request->file('media')->isValid()) {
                $validated = $request->validate([
                    'media' => 'required|file'
                ]);

                if($request->isBg === 'on') {
                    $url = 'storage/main_'.request('media')->getClientOriginalName();
                    request('media')->storeAs('public/uploads', 'main_'.request('media')->getClientOriginalName());
                } else {
                    $url = 'storage/'.request('media')->getClientOriginalName();
                    request('media')->storeAs('public/uploads', request('media')->getClientOriginalName());
                }

                $media = Media::create([
                    'url' => $url,
                    'type' => $request->type,
                    'page_slug' => $request->pageSlug ?? null,
                    'user_id' => auth()->user()->id
                ]);

                if ($request->postSlug) {
                    $post = Post::where('slug', $request->postSlug)->first();
                    $post->media()->attach($media);
                }
            }
        return redirect('/media/show')
        ->with(
            [
                'message'=>'media: '.request('media')->getClientOriginalName().' added correctly.'
            ]
        );
    }
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $media = Media::find($id);

        return view('media.edit',
            ['media'=>$media]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$uploadMedia = $this->uploadMedia($request);
        $media = Media::find($id);
        $media->url = $request->url;
        $media->type = $request->type;
        $media->page_slug = $request->pageSlug;
        $media->save();

        return redirect('/media/show')
        ->with(['message'=>$request->url . ' modified correctly!']);
    }



    public function confirmDelete($id)
    {
        //instantiate the object to delete
        $media = Media::find($id);
        return view('media/delete',
            [
                'media'=>$media
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //delete media by Id
        $media = Media::find($request->id);
        $url = $media->url;
        $post = Post::find($media->post_id);
        $media->posts()->detach($post);
        $media->delete();
        //return a query + message
        return redirect('/media/show')
            ->with(['deleted'=> $url. ' deleted correctly']);
    }
}
