@props(['announcement'])

<div class="announcement-summary space-y-2">
    <div>
        <h2 class="announcement-title text-xl sm:text-3xl tracking-tight font-medium">
            <a href="{{ route('livewirePageGroup.scheduledConference.pages.announcement-page', ['announcement' => $announcement->id]) }}"
                class="link link-hover">
                {{ $announcement->title }}
            </a>
        </h2>
        <div class="announcement-date text-base sm:text-xl font-medium text-gray-500">
            {{ $announcement->created_at->format(Setting::get('format_date')) }}
        </div>
    </div>
    <p class="summary text-gray-800 text-base sm:text-xl">
        {{ $announcement->getMeta('summary') }}
    </p>
</div>
