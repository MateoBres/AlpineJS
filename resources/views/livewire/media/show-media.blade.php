<div>
    <div class="m-10 text-xl font-normal">
        <a href="{{ url('dashboard') }}"><button class="bg-feelera_green-default text-white px-4 py-2 border rounded-md hover:bg-white hover:border-feelera_green-default hover:text-black  font-bold text-xl">
            to Dashboard
        </button>
        </a>
        <a href="{{ url('media/create') }}"><button class="bg-feelera_green-default text-white px-4 py-2 border rounded-md hover:bg-white hover:border-feelera_green-default hover:text-black  font-bold text-xl">
            Upload media
        </button>
        </a>
    </div>

    @if ( session('message') )
        @livewire('media.alert-success')
    @endif
    @if ( session('deleted') )
        @livewire('media.alert-deleted')
    @endif


</div>
<div>
    <table class="min-w-full table-auto">
        <thead class="justify-between">
        <tr class="bg-gray-800">
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Url</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Type</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Page</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Post</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Actions</span>
            </th>
        </tr>
        </thead>
        <tbody class="bg-gray-200">
            @if($medias->count()!=0)
                @foreach($medias as $media)
                    <tr class="{{ $loop->even?'bg-feelera_green-default':''}}">
                        <td class="px-6 py-2 text-center">{{ $media->url }}</td>
                        <td class="px-6 py-2 text-center" >{{ $media->type }}</td>
                        <td class="px-6 py-2 text-center">
                            @if($pages->find($media->page_slug))
                                {{ $pages->find($media->page_slug)->title }}
                            @endif</td>
                        <td class="px-6 py-2 text-center">
                            @if($media->posts->count())
                                @foreach($media->posts as $post){{$post->title}}
                                @endforeach
                            @endif</td>
                        <td class="px-6 py-2 text-center">

                            <a href="{{ url('media/delete').'/'. $media->id }}"><button type="button" class="bg-red-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-red-500 hover:text-black font-bold text-xl">
                                Delete
                            </button></a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr><td colspan=5 class="text-center text-2xl">No items to show.</td></tr>
            @endif
        </tbody>
    </table>
</div>
