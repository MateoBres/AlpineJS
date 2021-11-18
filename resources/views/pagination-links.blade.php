@if($paginator->hasPages())
    <ul class="mb-6 mt-4 flex justify-between lg:mt-0 2xl:mt-4">
        <li
            wire:click="previousPage"
            class="w-16 text-center rounded cursor-pointer lg:w-8 lg:ml-12 xl:w-10 2xl:w-14"
        ><img  src="{{ asset('/media/arrow_prev.png') }}" alt="arrow_prev"></li>
        @if($paginator->hasMorePages())
            <li
            wire:click="nextPage"
                class="w-16 cursor-pointer lg:w-8 lg:text-lg lg:mr-20  xl:w-10 xl:mr-28 2xl:w-14"
            ><img  src="{{ asset('/media/arrow_next.png') }}" alt="arrow_next"></li>

        @else
            <li
                class="w-16 lg:w-12 lg:text-lg lg:mr-20 xl:mr-28 xl:w-10"
            ></li>
        @endif
    </ul>
@endif

