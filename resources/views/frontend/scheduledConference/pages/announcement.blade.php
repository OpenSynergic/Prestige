<x-website::layouts.main>
    <div class="relative py-6 sm:py-12 max-w-screen-xl px-4 sm:px-0 sm:mx-auto w-full">
        <div class="mb-6">
            <x-website::breadcrumbs :breadcrumbs="$this->getBreadcrumbs()" />
        </div>
        <div class="mb-6">
            <h1 class="page-title text-3xl sm:text-6xl font-bold">
                {{ $announcement->title }}
            </h1>
            <div class="announcement-information">
                <p class="text-xl text-gray-500">
                    {{ $announcement->created_at->format(Setting::get('format_date')) }}
                </p>
            </div>
        </div>
        @if ($announcement->hasMedia('featured_image'))
            <img class="max-h-48 w-auto"
                src="{{ $announcement->getFirstMedia('featured_image')->getAvailableUrl(['thumb']) }}" alt="">
        @endif
        <div class="user-content">
            {{ new Illuminate\Support\HtmlString($this->announcement->getMeta('content')) }}
        </div>
    </div>
</x-website::layouts.main>
