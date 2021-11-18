<div
id="submenu-mundo"
    x-show = "showSubmenuMondo"
    x-on:click.away="showSubmenuMondo = false"
    x-on:keydown.escape.window="showSubmenuMondo = false"
>

    <ul class="text-white font-bold lg:w-2/5">
        <a x-on:click="setTimeout(() => showOverlapMondo = true, 800)" wire:click="mondofeelera('mondo-feelera')">
            <li  class="text-3xl hover:text-gray-400 cursor-pointer md:mb-2 2xl:text-4xl">Chi siamo</li>
        </a>
        <a x-on:click="setTimeout(() => showOverlapMondo = true, 800)" wire:click="mondofeelera2('mondo-feelera-team')">
            <li class="text-3xl hover:text-gray-400 cursor-pointer md:mb-2 2xl:text-4xl">Il team</li>
        </a>
        <a x-on:click="setTimeout(() => showOverlapMondo = true, 800)" wire:click="mondofeelera3('mondo-feelera-partnerships')">
            <li class="text-3xl hover:text-gray-400 cursor-pointer md:mb-2 2xl:text-4xl">Partenships</li>
        </a>
    </ul>
</div>
