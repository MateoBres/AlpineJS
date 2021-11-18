<div class="bg-white border-white">
    <a href={{ url('post/show') }}>
        <button class="bg-feelera_green-default w-auto text-white px-4 py-2 border rounded-md hover:bg-white hover:border-feelera_green-default hover:text-black relative ml-6 mt-1 font-bold">
            <- Back to posts list
        </button>
    </a>
</div>


@if ( $errors->any() )
    @foreach($errors->all() as $error)
        @livewire('page.alert-error', ['error'=>$error])
    @endforeach
@endif


    <div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ url('post/edit').'/'. $post->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="title" class="block text-xl font-medium text-gray-700 font-bold">
                                 Title
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">

                                <input type="text" name="title" id="title" value="{{ old('media', $post->getTranslation('title', 'it')) }}" class=" border border-gray-600 rounded-md px-1 focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full sm:text-lg" placeholder="example.com">
                            </div>
                        </div>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="slug" class="block text-xl font-medium text-gray-700 font-bold">Slug</label>
                        <input type="text" name="slug" value="{{ old('slug', $post->slug) }}"  id="slug" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg border border-gray-600 rounded-md px-1 placeholder="my-post">
                    </div>
                    <div class="bg-white space-y-6 ">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="type" class="block text-xl font-medium text-gray-700 font-bold">
                                 Type
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">

                                <select name="type" id="type" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full sm:text-lg border border-gray-600 rounded-md px-1">
                                    <option value="{{ old('type', $post->type) }}">{{ old('type', $post->type) }}</option>
                                        <option value="video">Video</option>
                                        <option value="article">Article</option>
                                        <option value="post">Post</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="content" class="block text-xl font-medium text-gray-700 font-bold">Content</label>
                        <div class="mt-1">
                            <textarea id="content" name="content" rows="4" class="p-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-lg border border-gray-600 rounded-md">{{ old('content', $post->getTranslation('content', 'it')) }}</textarea>
                        </div>
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                        <label for="media" class="block text-xl font-medium text-gray-700 font-bold">Link to video (video type selected)</label>
                        <input type="text" name="media" id="media" value="{{ old('media', $post->media[0]->url ?? '') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg  border border-gray-600 rounded-md px-1" placeholder="https://www.youtube.com/embed/">
                    </div>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-6 sm:col-span-4">
                            <label for="title_trans" class="block text-xl font-medium text-gray-700 font-bold">
                                Title Translated in English (optional)
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="title_trans" id="title_trans"  value="{{ old('media', $post->getTranslation('title', 'en')) }}" class=" border border-gray-600 rounded-md px-1 focus:border-indigo-500 flex-1 block w-full sm:text-lg">
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="content_trans" class="block text-xl font-medium text-gray-700 font-bold">Content Translated in English (optional)</label>
                        <div class="mt-1">
                            <textarea id="content_trans" name="content_trans" rows="4" class="p-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-lg border border-gray-600 rounded-md px-1">{{ $post->getTranslation('content', 'en') }}</textarea>
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
