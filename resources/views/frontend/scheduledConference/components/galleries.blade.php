@props([
    'data' => [],
])
<div @class(['galleries py-10 sm:py-20 w-auto sm:max-w-screen-xl mx-4 lg:mx-auto'])>
    <h2 class="galleries-title text-primary text-3xl sm:text-6xl font-bold mb-6 sm:mb-12">
        {{ $data['title'] }}
    </h2>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($currentScheduledConference->getMedia($data['image_collection_id']) as $gallery)
            <div>
                <img class="h-full max-w-full aspect-square object-cover bg-center border-4 border-black" src="{{ $gallery->getAvailableUrl(['thumb', 'thumb-xl']) }}">
            </div>
        @endforeach
    </div>

</div>
