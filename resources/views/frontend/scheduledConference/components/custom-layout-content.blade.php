@props([
    'data' => [],
])

<div @class([
    'custom-layout',
	'py-10 sm:py-20 w-auto sm:max-w-screen-xl mx-4 lg:mx-auto' => !$data['full_width'],
])>
    @if ($data['show_title'])
        <h2 class="custom-layout-title text-primary text-3xl sm:text-6xl font-bold mb-6 sm:mb-12">
            {{ $data['title'] }}
        </h2>
    @endif
    <div class="custom-layout-content user-content">
        {!! $data['content'] !!}
    </div>

</div>
