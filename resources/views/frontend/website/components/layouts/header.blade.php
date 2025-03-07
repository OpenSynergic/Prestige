@php
    $primaryNavigationItems = app()->getNavigationItems('primary-navigation-menu');
    $userNavigationMenu = app()->getNavigationItems('user-navigation-menu');
@endphp

{{-- <div class="navbar-publisher navbar-container bg-white shadow z-[51] text-gray-800 sticky top-0">
    <div class="navbar mx-auto max-w-7xl items-center h-full">
        <div class="navbar-start items-center gap-x-4 w-max">
            <x-website::logo :headerLogo="app()->getSite()->getFirstMedia('logo')?->getAvailableUrl(['thumb', 'thumb-xl'])" :headerLogoAltText="app()->getSite()->getMeta('name')" :homeUrl="url('/')"/>
            @if(App\Models\Conference::exists())
                @livewire(App\Livewire\GlobalNavigation::class)
            @endif

        </div>
        
        <div class="navbar-end ms-auto gap-x-4 hidden lg:inline-flex">
            <x-website::navigation-menu :items="$userNavigationMenu" class="text-gray-800" />
        </div>
    </div>
</div> --}}


@if(app()->getCurrentConference() || app()->getCurrentScheduledConference())
    <div class="navbar-container relative bg-gradient-to-b from-base-100 z-10">
        <div class="navbar mx-auto justify-between sm:px-10 min-h-24">
            <div class="navbar-start gap-2 hidden lg:flex">
                <x-website::navigation-menu :items="$primaryNavigationItems" />
            </div>
            <div class="navbar-center">
                <x-website::logo :headerLogo="$headerLogo"/>
            </div>
            <div class="navbar-end">
                <x-website::navigation-menu :items="$userNavigationMenu" />
                <x-website::navigation-menu-mobile />
            </div>
        </div>
    </div>
@endif
