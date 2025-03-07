@props([
    'title' => null,
    'header' => true,
])
<x-website::layouts.base :title="$title">
    <div class="body-wrapper flex h-full min-h-screen flex-col relative">
        
        {{-- <div class="noise-overlay"></div> --}}
        
        @hook('Frontend::Views::Header')
        
        {{ $slot }}

        @hook('Frontend::Views::Footer')
    </div>
</x-website::layouts.base>
