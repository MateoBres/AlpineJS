<div id="vertical-menu" class="z-50 hidden w-40 bg-feelera_green-default h-screen fixed md:block lg:w-32 2xl:w-40">
    <div x-show = "showMainMenu" id="section1-menu" class="w-full h-16 border-b-2 p-4 md:h-20 md:py-6">
        <a
        x-on:click="showOverlapMondo=false; showMainMenu=false" class="cursor-pointer"><img src="/media/esc.png" class="mx-auto w-12 md:w-10 xl:w-8 2xl:w-10"> </a>
    </div>
    <div x-show = "!showMainMenu" id="section1-menu" class="w-full h-16 border-b-2 p-4 md:h-20 md:py-6">
        <a class="cursor-pointer"  x-on:click="showMainMenu=true"><img src="/media/hamburger.png" class="mx-auto w-12 md:w-10 xl:w-8 2xl:w-10"> </a>
    </div>
    <div id="img-menu" class="w-full h-auto md:mt-76 lg:mt-48 xl:mt-40 2xl:mt-60">
        <a href="{{url('/')}}">
            <img src="/media/logo-white.png" class="animate-pulse lg:w-3/4 lg:mx-auto 2xl:w-11/12">
        </a>
    </div>
    <div id="section2-menu" class="w-full h-72 border-t-2 absolute bottom-0 lg:h-52 2xl:h-60">
        <p class="text-center text-white leading-tight p-4 text-sm lg:text-xs lg:leading-3.5 2xl:leading-tight">
            {{ $company->address }}
            P.IVA e C.F. {{ $company->vat }} <br><br>
            © 2021 <br>
            {{ $company->name }} <br>
            società benefit <br>
            {{ $company->email }}<br><br>
            Privacy Policy <br>
            Cookie Policy <br>
            Corporate Information
        </p>
    </div>
</div>
