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
            <form action="{{ url('page/create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="slug" class="block text-xl font-medium text-gray-700 font-bold">
                                 Slug
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                <span class="inline-flex items-center rounded-l-md border border-gray-600 rounded-md px-1 bg-gray-50 text-gray-500 text-lg">
                                http://feelera/
                                </span>
                                <input value="{{ old('slug') }}" type="text" name="slug" id="slug" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-lg border-gray-300" placeholder="home-page">
                            </div>
                        </div>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="title" class="block text-xl font-medium text-gray-700 font-bold">Title</label>
                        <input value="{{ old('title') }}" type="text" name="title" id="slug" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg border border-gray-600 rounded-md px-1" placeholder="homepage">
                    </div>

                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input @if(old('isHomepage')){{'checked'}} @endif id="isHomepage" name="isHomepage" type="checkbox" class="focus:ring-indigo-500 h-5 w-5 text-indigo-600 border border-gray-600 rounded-md px-1">
                        </div>
                        <div class="ml-3 text-lg">
                            <label for="isHomepage" class="font-medium text-gray-700 font-bold text-xl">It's homepage</label>
                        </div>
                    </div>
                    <div>
                        <label for="content" class="block text-xl font-medium text-gray-700 font-bold">Content</label>
                        <div class="mt-1">
                            <textarea id="content" name="content" rows="8" class="border border-gray-600 rounded-md px-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-lg" placeholder='<!DOCTYPE html>'>{{ old('content') }}</textarea>
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
