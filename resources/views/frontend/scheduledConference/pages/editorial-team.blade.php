<x-website::layouts.main>
    <div class="relative py-6 sm:py-12 max-w-screen-xl px-4 sm:px-0 sm:mx-auto w-full">
        <div class="mb-6">
            <x-website::breadcrumbs :breadcrumbs="$this->getBreadcrumbs()" />
        </div>
        <h1 class="page-title text-3xl sm:text-6xl font-bold mb-6 sm:mb-12">
            {{ $this->getTitle() }}
        </h1>
        @if ($editorialTeam)
            <div class="user-content">
                {{ new Illuminate\Support\HtmlString($editorialTeam) }}
            </div>
        @else
            <div>
                No information provided.
            </div>
        @endif
    </div>
</x-website::layouts.main>
