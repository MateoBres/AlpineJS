<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    // protected $with = ['media'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('created_at', 'DESC')->get();
        return view('page.show',
            ['pages'=>$pages]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/page/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$uploadMedia = $this->uploadMedia($request);
        $request->validate(
            [
                'slug' => 'required|unique:pages,slug'
            ],
            [
                'slug.required' => 'The "Slug" field is mandatory',
                'slug.unique' => 'The "Slug" field must be unique'
            ]
        );
        $page = Page::create([
            'slug' => $request->slug,
            'title' => $request->title,
            'content' => $request->content,
            'isHomepage' => $request->isHomepage === 'on' ? 1 : 0,
        ]);

        // if($uploadMedia)
        // {
        //     Media::create([
        //     'url' => url("/public/media/$uploadMedia[0]"),
        //     'type' => $uploadMedia[1],
        //     'page_slug' => $page->slug,
        //     ]);
        // }

        //return a query + message
        return redirect('/page/show')
                ->with(
                    [
                        'message'=>'page: '.$page->title.' added correctly.'
                    ]
                );
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);

        return view('page.edit',
            ['page'=>$page]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        // $uploadMedia = $this->uploadMedia($request);

        $page = Page::find($slug);
        if($page->slug !== $request->slug){
            $request->validate(
                [
                    'slug' => 'required|unique:pages,slug'
                ],
                [
                    'slug.required' => 'The "Slug" field is mandatory',
                    'slug.unique' => 'The "Slug" field must be unique'
                ]
            );
        }
        $page->slug = $request->slug;

        $page->title = $request->title;
        $page->content = $request->content;
        $page->isHomepage = $request->isHomepage === 'on' ? 1 : 0;
        // if($uploadMedia)
        // {
        //     Media::create([
        //     'url' => url("/public/media/$uploadMedia[0]"),
        //     'type' => $uploadMedia[1],
        //     'page_slug' => $slug,
        //     ]);
        // }
        $page->save();

        return redirect('/page/show')
            ->with(['message'=>$request->title . ' modified correctly!']);
    }

    // // public function uploadMedia(Request $request)
    // // {
    // //     if( $request->file('media')){
    // //         //rename file
    // //         # time() . extension
    // //         $ext = $request->file('media')->extension();
    // //         $media = $request->file('media');
    // //         //upload image
    // //         $request
    // //             ->file('media')
    // //             ->move( public_path('media/'), $media);

    // //         if(in_array(strtoupper($ext), ['JPG','JPEG','TIFF','TIF','GIF','PNG','WEBP','PSD','RAW','SVG','EPS','PDF','AI'])) {

    // //             $type = 'photo';

    // //             return [$media, $type];

    // //         } elseif(in_array(strtoupper($ext), ['AVI','MOV','MPEG','MPE','MPA','DAT','M1V', 'MP2','M2P','DAT','M2V','MPV2','MP2V','VOB','FLM','RM','RAM','RA','ASF','WMV','WMA','WMS','WMP'])){

    // //             $type = 'video';

    // //             return [$media, $type];

    // //         }

    // //     }
    // // }

    public function confirmDelete($slug)
    {
        //instantiate the object to delete
        $page = Page::find($slug);
        return view('page/delete',
            [
                'page'=>$page
            ]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //delete page by Id
        $page = Page::find($request->slug);
        $title = $page->title;
        $page->delete();
        //return a query + message
        return redirect('/page/show')
            ->with(['deleted'=> $title. ' deleted correctly']);
    }
}
