<div class="bg-white border-white">
    <a href={{ url('media/show') }}>
        <button class="bg-feelera_green-default w-auto text-white px-4 py-2 border rounded-md hover:bg-white hover:border-feelera_green-default hover:text-black relative ml-6 mt-1 font-bold">
            <- Back to medias list
        </button>
    </a>
</div>
    <div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ url('media/create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="type" class="block text-xl font-medium text-gray-700 font-bold">
                                 Type
                                </label>

                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <select name="type" id="type" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-lg border-gray-300">
                                        <option value="">--Please choose an option--</option>
                                        <option value="photo">Photo</option>
                                        <option value="video">Video</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-xl">
                                <label for="isBg" class="block text-xl font-medium text-gray-700 font-bold">It's background image</label>
                            </div>
                            <div class="flex items-center h-5 ml-3 mt-2">
                                <input id="isBg" name="isBg" type="checkbox" class="focus:ring-indigo-500 h-5 w-5 text-indigo-600 border-gray-600 rounded">
                            </div>
                        </div>
                    <div class="bg-white space-y-6 ">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="media" class="block text-xl font-medium text-gray-700 font-bold">
                                 Upload File
                                </label>
                                <div class="custom-file mt-1 mb-4">
                                    <input type="file" name="media"
                                        class="custom-file-input"
                                        id="media">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white space-y-6 ">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="pageSlug" class="block text-xl font-medium text-gray-700 font-bold">
                                 Page Slug
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">

                                <select name="pageSlug" id="pageSlug" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full  border border-gray-600 rounded-md px-1 sm:text-lg">
                                    <option value="">--Please choose an option--</option>
                                    @foreach($pages as $page)
                                        <option value="{{$page->slug}}">{{$page->slug}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white space-y-6 ">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="postSlug" class="block text-xl font-medium text-gray-700 font-bold">
                                 Post Slug
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">

                                <select name="postSlug" id="postSlug" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full sm:text-lg  border border-gray-600 rounded-md px-1">
                                    <option value="">--Please choose an option--</option>
                                    @foreach($posts as $post)
                                        <option value="{{$post->slug}}">{{$post->slug}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <div>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-indigo-600 hover:bg-white hover:border-indigo-500 hover:text-indigo-500 font-bold">
                        Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
