<div>
    <div class="m-10 text-xl font-normal">
        <a href="{{ url('dashboard') }}"><button class="bg-feelera_green-default text-white px-4 py-2 border rounded-md hover:bg-white hover:border-feelera_green-default hover:text-black  font-bold text-xl">
            to Dashboard
        </button>
        </a>
        <a href="{{ url('page/create') }}"><button class="bg-feelera_green-default text-white px-4 py-2 border rounded-md hover:bg-white hover:border-feelera_green-default hover:text-black  font-bold text-xl">
            Create page
        </button>
        </a>
    </div>

    @if ( session('message') )
        @livewire('page.alert-success')
    @endif
    @if ( session('deleted') )
        @livewire('page.alert-deleted')
    @endif


</div>
<div>
    <table class="min-w-full table-auto">
        <thead class="justify-between">
        <tr class="bg-gray-800">
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Slug</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Title</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Content</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Is homepage</span>
            </th>
            {{-- <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Media</span>
            </th> --}}
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Actions</span>
            </th>
        </tr>
        </thead>
        <tbody class="bg-gray-200">

            @if($pages->count()!=0)
                @foreach($pages as $page)
                    <tr class="{{ $loop->even?'bg-feelera_green-default':''}}">
                        <td class="px-6 py-2 text-center">{{ $page->slug }}</td>
                        <td class="px-6 py-2 text-center">{{ $page->title }}</td>
                        <td class="px-6 py-2 text-center" ><div style="height:40px; overflow:hidden">{{ $page->content }}</div></td>
                        <td class="px-6 py-2 text-center">{{ $page->isHomepage ? 'Yes' : 'No'; }}</td>
                        {{-- <td class="px-6 py-2 text-center">{{ $page->media->count() }}</td> --}}
                        <td class="px-6 py-2 text-center">
                            <a href="{{ url('page/edit').'/'. $page->slug }}"><button class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black font-bold text-xl">
                                Modify
                            </button>
                            </a>

                            <a href="{{ url('page/delete').'/'. $page->slug }}"><button type="button" class="bg-red-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-red-500 hover:text-black font-bold text-xl">
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
