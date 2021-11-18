<div class="bg-white border-white">
    <a href={{ url('media/show') }}>
        <button class="bg-feelera_green-default w-auto text-white px-4 py-2 border rounded-md hover:bg-white hover:border-feelera_green-default hover:text-black relative ml-6 mt-1 font-bold">
            <- Back to media list
        </button>
    </a>
</div>
    <div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ url('media/delete').'/'. $media->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('delete')
                <div class="shadow sm:rounded-md sm:overflow-hidden sm:p-6">
                    <div class="col-span-6 sm:col-span-4">
                        <label for="type" class="block text-xl font-medium text-gray-700 font-bold">Type</label>
                        <input type="text" name="type" value="{{ $media->type }}"  id="type" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="media_edit" readonly disabled>
                    </div>
                </div>
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-6 sm:col-span-4">
                            <label for="url" class="block text-xl font-medium text-gray-700 font-bold">
                             URL
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="url" id="url" value="{{ $media->url }}" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-lg border-gray-300" placeholder="example.com" readonly disabled>
                        </div>
                    </div>
                </div>
                <div class="bg-white space-y-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-6 sm:col-span-4">
                            <label for="page_slug" class="block text-xl font-medium text-gray-700 font-bold">
                            Page Slug
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="page_slug" id="page_slug" value="{{ $media->page_slug }}" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-lg border-gray-300" placeholder="example.com" readonly disabled>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right">
                    <div>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-red-600 hover:bg-white hover:border-red-500 hover:text-red-500 font-bold">
                        Confirm delete
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
