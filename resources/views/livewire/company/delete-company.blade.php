<div class="bg-white border-white">
    <a href={{ url('company/show') }}>
        <button class="bg-feelera_green-default w-auto text-white px-4 py-2 border rounded-md hover:bg-white hover:border-feelera_green-default hover:text-black relative ml-6 mt-1 font-bold">
            <- Back to companies list
        </button>
    </a>
</div>
    <div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ url('company/delete').'/'. $company->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('delete')
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="name" class="block text-xl font-medium text-gray-700 font-bold">
                                 name
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="name" id="name" value="{{ $company->name }}" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-lg border-gray-300" placeholder="example.com" readonly disabled>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="address" class="block text-xl font-medium text-gray-700 font-bold">Address</label>
                        <input address="text" name="address" value="{{ $company->address }}"  id="address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="company_edit" readonly disabled>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="vat" class="block text-xl font-medium text-gray-700 font-bold">VAT</label>
                        <input vat="text" name="vat" value="{{ $company->vat }}"  id="vat" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="company_edit" readonly disabled>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="email" class="block text-xl font-medium text-gray-700 font-bold">email</label>
                        <input email="text" name="email" value="{{ $company->email }}"  id="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="company_edit" readonly disabled>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="phone_number" class="block text-xl font-medium text-gray-700 font-bold">phone_number</label>
                        <input phone_number="text" name="phone_number" value="{{ $company->phone_number }}"  id="phone_number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="company_edit" readonly disabled>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="socials" class="block text-xl font-medium text-gray-700 font-bold">socials</label>
                        <input socials="text" name="socials" value="{{ $company->socials }}"  id="socials" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg border-gray-300 rounded-md" placeholder="company_edit" readonly disabled>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
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
