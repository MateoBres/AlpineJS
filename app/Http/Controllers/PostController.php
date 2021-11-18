<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();

        return view('post.show', [
            'posts'=>$posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/post/create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'type' => 'required',
                'slug' => 'required|unique:pages,slug'
            ],
            [
                'slug.required' => 'The "Slug" field is mandatory',
                'slug.unique' => 'The "Slug" field must be unique'
            ]
        );
        
            $post = new Post;
            $post->slug = $request->slug;
            if($request->title_trans && $request->content_trans) {
                $post->setTranslation('title', 'it', $request->title);
                $post->setTranslation('content', 'it',$request->content);
                $post->setTranslation('title', 'en', $request->title_trans);
                $post->setTranslation('content', 'en',$request->content_trans);
            } else {
                $post->setTranslation('title', 'it', $request->title);
                $post->setTranslation('content', 'it',$request->content);
                $post->setTranslation('title', 'en', $request->title);
                $post->setTranslation('content', 'en',$request->content);
            }
            $post->type = $request->type;
            $post->user_id = auth()->user()->id;
            $post->save();
        

        if($request->media)
        {
            $media = Media::create([
            'url' => $request->media,
            'type' => 'video',
            'page_slug' => null,
            'user_id' => auth()->user()->id
            ]);
            $post->media()->attach($media);
        }

        return redirect('/post/show')
                ->with(['message'=>'post: '.$post->title.' added correctly.']);
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
        $post = Post::find($id);

        return view('post.edit',
            ['post'=>$post]
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
        $post = Post::find($id);
        if($post->slug !== $request->slug){
            $request->validate(
                [
                    'slug' => 'required|unique:posts,slug'
                ],
                [
                    'slug.required' => 'The "Slug" field is mandatory',
                    'slug.unique' => 'The "Slug" field must be unique'
                ]
            );
        }
        $post->slug = $request->slug;
        if($request->title_trans && $request->content_trans) {
            $post->setTranslation('title', 'it', $request->title);
            $post->setTranslation('content', 'it',$request->content);
            $post->setTranslation('title', 'en', $request->title_trans);
            $post->setTranslation('content', 'en',$request->content_trans);
        } else {
            $post->setTranslation('title', 'it', $request->title);
            $post->setTranslation('content', 'it',$request->content);
            $post->setTranslation('title', 'en', $request->title);
            $post->setTranslation('content', 'en',$request->content);
        }
        $post->type = $request->type;
        $post->user_id = auth()->user()->id;

        if($post->media && $post->media != $request->media)
        {
            $media = Media::create([
                'url' => $request->media,
                'type' => 'video',
                'page_slug' => null,
                'user_id' => auth()->user()->id
                ]);
                $post->media()->attach($media);
        } else {
            $media = Media::create([
                'url' => $request->media,
                'type' => 'video',
                'page_slug' => null,
                'user_id' => auth()->user()->id
                ]);
                $post->media()->attach($media);
        }
        $post->save();

        return redirect('/post/show')
            ->with(['message'=>$request->title . ' modified correctly!']);
    }

    public function confirmDelete($id)
    {
        //instantiate the object to delete
        $post = Post::find($id);
        return view('post/delete',
            [
                'post'=>$post
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
        //delete post by Id
        $post = Post::find($request->id);
        $title = $post->title;
        $post->delete();
        //return a query + message
        return redirect('/post/show')
            ->with(['deleted'=> $title. ' deleted correctly']);
    }
}
