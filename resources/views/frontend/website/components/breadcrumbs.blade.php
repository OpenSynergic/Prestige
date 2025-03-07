@props([
    'breadcrumbs' => [],
])

@if(!empty($breadcrumbs))
<div {{ $attributes->class(['breadcrumbs']) }}>
    <ul>
        @foreach ($breadcrumbs as $url => $label)
        <li>
            @if(!is_int($url))
            <x-website::link 
                :href="$url" 
                class="link link-hover link-primary"
                {{-- wire:navigate --}}
            >
                {{ $label }}
            </x-website::link>
            @else
                {{ $label }}
            @endif
        </li>
        @endforeach
    </ul>
</div>
@endif