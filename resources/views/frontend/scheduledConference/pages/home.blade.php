<x-website::layouts.main class="!p-0" :header="false">
    @php
        $bannerBackground = $currentScheduledConference->getFirstMediaUrl('prestige_banner_bg');
    @endphp

    <div class="min-h-screen relative flex flex-col justify-stretch bg-cover bg-center bg-no-repeat"
        @if($bannerBackground)
            style="background-image: url({{ $bannerBackground }});"
        @endif
        >
        @if($bannerBackground)
            <div class="h-full w-full bg-opacity-20 absolute top-0 left-0 bg-base-100"></div>
        @endif
        <x-website::layouts.header />
        <x-scheduledConference::hero/>
    </div>


    @foreach ($theme->getLayouts() as $layout)
        @switch($layout['type'])
            @case('speakers')
                @if ($currentScheduledConference?->speakers->isNotEmpty())
                    <x-scheduledConference::speakers-toc :data="$layout['data']"/>
                @endif
            @break
            @case('committees')
                @if ($currentScheduledConference?->committees->isNotEmpty())
                    <x-scheduledConference::committees-toc :data="$layout['data']"/>
                @endif
            @break
            @case('sponsors')
                @if ($sponsorLevels->isNotEmpty() || $sponsorsWithoutLevel->isNotEmpty())
                    <x-scheduledConference::sponsors-toc :sponsorLevels="$sponsorLevels" :sponsorsWithoutLevel="$sponsorsWithoutLevel" :data="$layout['data']" />
                @endif
            @break
            @case('partners')
                @if ($partners->isNotEmpty())
                    <x-scheduledConference::partners-toc :partners="$partners" :data="$layout['data']" />
                @endif
            @break
            @case('custom')
                <x-scheduledConference::custom-layout-content :data="$layout['data']"/>
            @break
            @case('two-column')
                <x-scheduledConference::custom-2-column :data="$layout['data']"/>
            @break
            @case('three-column')
                <x-scheduledConference::custom-3-column :data="$layout['data']"/>
            @break
            @case('galleries')
                <x-scheduledConference::galleries :data="$layout['data']"/>
            @break
            @case('timelines')
                @php
                    $timelines = App\Models\Timeline::query()
                                    ->where('hide', false)
                                    ->orderBy('date')
                                    ->get();
                @endphp 

                <x-scheduledConference::timelines :data="$layout['data']" :timelines="$timelines"/>
            @break
        @endswitch
    @endforeach

</x-website::layouts.main>
