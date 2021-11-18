<div class="bg-white border-white">
    <a href={{ url('company/show') }}>
        <button class="bg-feelera_green-default w-auto text-white px-4 py-2 border rounded-md hover:bg-white hover:border-feelera_green-default hover:text-black relative ml-6 mt-1 font-bold">
            <- Back to companies list
        </button>
    </a>
</div>
    <div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ url('company/edit').'/'. $company->id }}" method="post">
                @csrf
                @method('put')
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="name" class="block text-xl font-medium text-gray-700 font-bold">
                                 Name
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">

                                <input value="{{ $company->name }}" type="text" name="name" id="name" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full border border-gray-600 rounded-md px-1 sm:text-lg" >
                            </div>
                        </div>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="address" class="block text-xl font-medium text-gray-700 font-bold">Address</label>
                        <input value="{{ $company->address }}" type="text" name="address" id="address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg  border border-gray-600 rounded-md px-1">
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="vat" class="block text-xl font-medium text-gray-700 font-bold">VAT</label>
                        <input value="{{ $company->vat }}" type="text" name="vat" id="vat" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg  border border-gray-600 rounded-md px-1">
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="email" class="block text-xl font-medium text-gray-700 font-bold">Email</label>
                        <input value="{{ $company->email }}" type="text" name="email" id="email" autocomplete="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg  border border-gray-600 rounded-md px-1">
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="phone_number" class="block text-xl font-medium text-gray-700 font-bold">Phone number</label>
                        <input value="{{ $company->phone_number }}" type="text" name="phone_number" id="phone_number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg border border-gray-600 rounded-md px-1">
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="socials" class="block text-xl font-medium text-gray-700 font-bold">Socials</label>
                        <input value="{{ $company->socials }}" type="text" name="socials" id="socials" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg border border-gray-600 rounded-md px-1">
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
