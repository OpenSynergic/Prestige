@props([
    'homeUrl' => url('/'),
    'headerLogo' => null,
    'headerLogoAltText' => config('app.name'),
])

@if ($headerLogo)
    <x-website::link :href="$homeUrl">
        <img
            {{ $attributes }}
            src="{{ $headerLogo }}"
            alt="{{ $headerLogoAltText }}"
            class="header-logo-img max-h-24 w-auto"
        />
    </x-website::link>
@else
    <x-website::link
        :href="$homeUrl"
        {{ $attributes->merge(['class' => 'header-logo-text text-lg sm:text-lg text-center']) }}
    >
        {{ $headerLogoAltText }}
    </x-website::link>
@endif