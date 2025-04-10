@props([
    'sidebars' => \App\Facades\SidebarFacade::get(),
    'header' => true,
])


<main {{ $attributes->merge(['class' => 'space-y-8']) }}>
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