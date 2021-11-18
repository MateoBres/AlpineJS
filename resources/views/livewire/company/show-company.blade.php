<div>
    <div class="m-10 text-xl font-normal">
        <a href="{{ url('dashboard') }}"><button class="bg-feelera_green-default text-white px-4 py-2 border rounded-md hover:bg-white hover:border-feelera_green-default hover:text-black  font-bold text-xl">
            to Dashboard
        </button>
        </a>
        <a href="{{ url('company/create') }}"><button class="bg-feelera_green-default text-white px-4 py-2 border rounded-md hover:bg-white hover:border-feelera_green-default hover:text-black  font-bold text-xl">
            Add a company
        </button>
        </a>
    </div>

    @if ( session('message') )
        @livewire('company.alert-success')
    @endif
    @if ( session('deleted') )
        @livewire('company.alert-deleted')
    @endif


</div>
<div class="m-10">
    <table class="min-w-full table-auto">
        <thead class="justify-between">
        <tr class="bg-gray-800">
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Actions</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Name</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Address</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">VAT</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Email</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Phone<br>number</span>
            </th>
            <th class="px-16 py-2 text-xl">
                <span class="text-gray-300">Socials</span>
            </th>
        </tr>
        </thead>
        <tbody class="bg-gray-200">
            @if($companies->count()!=0)
                @foreach($companies as $company)
                    <tr class="{{ $loop->even?'bg-feelera_green-default':''}}">
                        <td class="px-6 py-2 text-center">
                            <a href="{{ url('company/edit').'/'. $company->id }}"><button type="button" class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black font-bold text-xl">
                                Modify
                            </button></a>
                            <a href="{{ url('company/delete').'/'. $company->id }}"><button type="button" class="bg-red-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-red-500 hover:text-black font-bold text-xl">
                                Delete
                            </button></a>
                        </td>
                        <td class="px-6 py-2 text-center">{{ $company->name }}</td>
                        <td class="px-6 py-2 text-center" >{{ $company->address }}</td>
                        <td class="px-6 py-2 text-center">{{ $company->vat }}</td>
                        <td class="px-6 py-2 text-center" >{{ $company->email }}</td>
                        <td class="px-6 py-2 text-center">{{ $company->phone_number }}</td>
                        <td class="px-6 py-2 text-center" >{{ $company->socials }}</td>

                    </tr>
                @endforeach
            @else
                <tr><td colspan=7 class="text-center text-2xl">No items to show.</td></tr>
            @endif
        </tbody>
    </table>
</div>
