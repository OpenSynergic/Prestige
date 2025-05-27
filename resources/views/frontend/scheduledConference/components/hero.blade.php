<div {{ $attributes->merge(['class' => 'hero h-full flex-grow']) }}>
    <div class="hero-content text-center">
        <div class="py-8 px-4 mx-auto max-w-screen-lg text-center lg:py-16 lg:px-12 z-10 text-[var(--text-hero)]">
            <div class="block sm:flex sm:flex-wrap items-center justify-center gap-4">
                @if ($currentScheduledConference->date_start || $currentScheduledConference->date_end)
                    <p class="hero-date text-3xl md:text-5xl italianno-regular">
                        {{ $theme->formatDateRange($currentScheduledConference->date_start, $currentScheduledConference->date_end) }}
                    </p>
                @endif
                @if (
                    ($currentScheduledConference->date_start || $currentScheduledConference->date_end) &&
                        $currentScheduledConference->getMeta('location'))
                    <div
                        class="hidden sm:inline-block min-h-[1em] w-0.5 self-stretch bg-base-100">
                    </div>
                @endif
                @if ($currentScheduledConference->getMeta('location'))
                    <p class="hero-location text-3xl md:text-5xl italianno-regular">
                        {{ $currentScheduledConference->getMeta('location') }}
                    </p>
                @endif
            </div>
            <h1
                class="hero-title my-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-7xl">
                {{ $contextName }}
            </h1>
            @if (!empty($theme->getSetting('hero_buttons') ?? []))
                <div
                    class="hero-buttons flex flex-col flex-wrap my-8 lg:my-16 sm:flex-row items-center sm:justify-center gap-4">
                    @foreach ($theme->getSetting('hero_buttons') ?? [] as $button)
                        <a 
                        @style([
                            'background-color: ' . data_get($button, 'background_color') => data_get($button, 'background_color'),
                            'color: ' . data_get($button, 'text_color') => data_get($button, 'text_color'),
                        ]) 
                        @class([
                            'btn border-0 w-fit',
                            'btn-primary text-primary-content' => !data_get($button, 'background_color') && !data_get($button, 'text_color'),
                        ])
                        href="{{ data_get($button, 'url') }}">
                            {{ data_get($button, 'text') }}
                        </a>
                    @endforeach
                </div>
            @endif
            @if($theme->getSetting('countdown_timer'))
                <x-scheduledConference::countdown-timer :date="$currentScheduledConference->date_start"/>
            @endif
        </div>
    </div>
</div>