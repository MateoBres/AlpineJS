<div class="bg-white border-white">
    <a href={{ url('page/show') }}>
        <button class="bg-feelera_green-default w-auto text-white px-4 py-2 border rounded-md hover:bg-white hover:border-feelera_green-default hover:text-black relative ml-6 mt-1 font-bold">
            <- Back to pages list
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
            <form action="{{ url('page/edit').'/'. $page->slug }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="slug" class="block text-xl font-medium text-gray-700 font-bold">
                                 Slug
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-lg">
                                http://feelera/
                                </span>
                                <input type="text" name="slug" id="slug" value="{{ old('slug', $page->slug) }}" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none  sm:text-lg border border-gray-600 rounded-md px-1" placeholder="home-page">
                            </div>
                        </div>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="title" class="block text-xl font-medium text-gray-700 font-bold">Title</label>
                        <input type="text" name="title" value="{{ old('title', $page->title) }}"  id="slug" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg border border-gray-600 rounded-md px-1" placeholder="homepage">
                    </div>

                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="isHomepage" name="isHomepage" type="checkbox" {{ $page->isHomepage ? 'checked' : '' }} class="focus:ring-indigo-500 h-5 w-5 text-indigo-600 border border-gray-600 rounded-md px-1">
                        </div>
                        <div class="ml-3 text-lg">
                            <label for="isHomepage" class="font-medium text-gray-700 font-bold text-xl" value="{{ $page->isHomepage }}">It's homepage</label>
                        </div>
                    </div>
                    <div>
                        <label for="content" class="block text-xl font-medium text-gray-700 font-bold">Content</label>
                        <div class="mt-1">
                            <textarea id="content" name="content" rows="8" class="p-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-lg border border-gray-600 rounded-md px-1" placeholder='<!DOCTYPE html>'>{{ $page->content }}</textarea>
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
