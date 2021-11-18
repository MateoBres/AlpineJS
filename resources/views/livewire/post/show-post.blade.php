<div>
    <div class="m-10 text-xl font-normal">
        <a href="{{ url('dashboard') }}"><button class="bg-feelera_green-default text-white px-4 py-2 border rounded-md hover:bg-white hover:border-feelera hover:text-black  font-bold text-xl">
            to Dashboard
        </button>
        </a>
        <a href="{{ url('post/create') }}"><button class="bg-feelera_green-default text-white px-4 py-2 border rounded-md hover:bg-white hover:border-feelera hover:text-black  font-bold text-xl">
            Create post
        </button>
        </a>
    </div>

    @if ( session('message') )
        @livewire('post.alert-success')
    @endif
    @if ( session('deleted') )
        @livewire('post.alert-deleted')
    @endif


</div>
<div>
    <table class="min-w-full table-auto">
        <thead class="justify-between">
        <tr class="bg-gray-800">
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Title</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Content</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">User</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Type</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Media</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Actions</span>
            </th>
        </tr>
        </thead>
        <tbody class="bg-gray-200">

            @if($posts->count()!=0)
                @foreach($posts as $post)

                    <tr class="{{ $loop->even?'bg-feelera_green-default':''}}">
                        <td class="px-6 py-2 text-center">{{ $post->title }}</td>
                        <td class="px-6 py-2 text-center" ><div style="height:40px; overflow:hidden">{{ $post->content }}</div></td>
                        <td class="px-6 py-2 text-center">{{ $post->user->name }}</td>
                        <td class="px-6 py-2 text-center">{{ $post->type }}</td>
                        <td class="px-6 py-2 text-center">{{ $post->media->count() }}</td>
                        <td class="px-6 py-2 text-center">
                            <a href="{{ url('post/edit').'/'. $post->id }}"><button class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black font-bold text-xl">
                                Modify
                            </button>
                            </a>

                            <a href="{{ url('post/delete').'/'. $post->id }}"><button type="button" class="bg-red-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-red-500 hover:text-black font-bold text-xl">
                                Delete
                            </button></a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr><td colspan=6 class="text-center text-2xl">No items to show.</td></tr>
            @endif
        </tbody>
    </table>
</div>
