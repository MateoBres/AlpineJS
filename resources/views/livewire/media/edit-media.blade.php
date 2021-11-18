<div class="bg-white border-white">
    <a href={{ url('media/show') }}>
        <button class="bg-feelera_green-default w-auto text-white px-4 py-2 border rounded-md hover:bg-white hover:border-feelera_green-default hover:text-black relative ml-6 mt-1 font-bold">
            <- Back to media list
        </button>
    </a>
</div>
    <div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ url('media/edit').'/'. $media->id }}" method="media" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="col-span-6 sm:col-span-4">
                        <label for="type" class="block text-xl font-medium text-gray-700 font-bold">Type</label>
                        <input type="text" name="type" value="{{ $media->type }}"  id="type" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg  border border-gray-600 rounded-md px-1" placeholder="my-media">
                    </div>
                </div>
                <div class="px-4 py-5 bg-white space-y-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-6 sm:col-span-4">
                            <label for="url" class="block text-xl font-medium text-gray-700 font-bold">
                             Url
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">

                            <input type="text" name="url" id="url" value="{{ $media->url }}" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full sm:text-lg  border border-gray-600 rounded-md px-1" placeholder="example.com">
                        </div>
                    </div>
                </div>
                <div class="px-4 py-5 bg-white space-y-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-6 sm:col-span-4">
                            <label for="pageSlug" class="block text-xl font-medium text-gray-700 font-bold">
                             Page Slug
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">

                            <input type="text" name="pageSlug" id="pageSlug" value="{{ $media->url }}" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full border border-gray-600 rounded-md px-1 sm:text-lg border-gray-300" placeholder="page-slug">
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <div>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-indigo-600 hover:bg-white hover:border-indigo-500 hover:text-indigo-500 font-bold">
                        Modify
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
