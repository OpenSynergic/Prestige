<x-website::layouts.main>
    <section class="relative py-6 sm:py-12 max-w-screen-xl px-4 sm:px-0 sm:mx-auto w-full">
        <div class="mb-6">
            <x-website::breadcrumbs :breadcrumbs="$this->getBreadcrumbs()" />
        </div>
        <h1 class="page-title text-3xl sm:text-6xl font-bold mb-6 sm:mb-12">
            {{ $this->getTitle() }}
        </h1>
        <x-scheduledConference::committees-toc :committeeRoles="$committeeRoles" />
    </section>
</x-website::layouts.main>
