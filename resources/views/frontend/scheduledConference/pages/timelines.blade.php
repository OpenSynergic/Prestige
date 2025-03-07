<x-website::layouts.main>
    <div class="relative py-6 sm:py-12 max-w-screen-xl px-4 sm:px-0 sm:mx-auto w-full">
        <div class="mb-6">
            <x-website::breadcrumbs :breadcrumbs="$this->getBreadcrumbs()" />
        </div>
        <h1 class="page-title text-3xl sm:text-6xl font-bold mb-6 sm:mb-12">
            {{ $this->getTitle() }}
        </h1>
        @if($timelines->isNotEmpty())
        <ol class="relative border-s border-primary">
            @foreach ($timelines as $timeline)
                <li class="mb-10 ms-4 last:mb-0">
                    <div class="absolute w-3 h-3 bg-primary rounded-full mt-1.5 -start-1.5 border border-primary"></div>
                    <time class="mb-1 text-sm sm:text-base font-normal leading-none text-gray-700">{{ $timeline->date->format(Setting::get('format_date')) }}</time>
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-900">{{ $timeline->name }}</h3>
                    <p class="text-base sm:text-lg font-normal text-gray-700">
                        {{ $timeline->description }}
                    </p>
                </li>
            @endforeach
        </ol>
        @else
            <div class="">
                No timelines yet.
            </div>
        @endif
    </div>
</x-website::layouts.main>
