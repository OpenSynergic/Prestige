@props([
    'sidebars' => \App\Facades\SidebarFacade::get(),
    'header' => true,
])


<main>
    {{-- Load Main Layout --}}
    @if($header)
        <x-website::layouts.header />
    @endif

    
    <div {{$attributes->merge(['class' => 'page-main'])}}>
        {{ $slot }}
    </div>

    {{-- Load Footer Layout --}}
    <x-website::layouts.footer />
</main>