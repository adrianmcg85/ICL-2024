<div class="w-full flex flex-row lg:flex-col-reverse p-10">
    <div class="lg:hidden flex flex-col  mx-0 " x-data="{ navOpen : false }" x-cloak>
        <x-nav.nav-button />
        <div x-show="navOpen" 
        x-transition:enter.duration.1000ms
        x-transition:leave.duration.800ms
        >
            <x-nav.nav-list/>
        </div>
    </div>
    <div class="lg:flex hidden lg:flex-row lg:mx-auto">
        <x-nav.nav-list/>
    </div>
    <x-nav.nav-logo/>
</div>