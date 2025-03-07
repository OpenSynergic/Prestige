<x-website::layouts.main>
    <div class="relative py-6 sm:py-12 max-w-screen-xl px-4 sm:px-0 sm:mx-auto w-full">
        <div class="mb-6">
            <x-website::breadcrumbs :breadcrumbs="$this->getBreadcrumbs()" />
        </div>
        <h1 class="page-title text-3xl sm:text-6xl font-bold mb-6 sm:mb-12">
            {{ $this->getTitle() }}
        </h1>

        <div class="user-content">
            @if($publisherLibraries->isNotEmpty())
                <ul>
                    @foreach($publisherLibraries as $media)
                        <li>
                            <a href="{{ route(App\Frontend\ScheduledConference\Pages\PublisherLibraryDownload::getRouteName(), ['media' => $media->uuid]) }}">{{ $media->name }}</a>
                        </li>
                    @endforeach
                </ul>
            @else 
                <p>{{ __('general.no_publisher_library_available') }}</p>
            @endif
        </div>
    </div>
</x-website::layouts.main>