@props([
    'data' => [],
])
<div @class([
    'custom-two-column',
	'py-10 sm:py-20 w-auto sm:max-w-screen-xl mx-4 lg:mx-auto' => !$data['full_width'],
])>
    @if ($data['show_title'])
        <h2 class="custom-two-column-title text-primary text-3xl sm:text-6xl font-bold mb-6 sm:mb-12">
            {{ $data['title'] }}
        </h2>
    @endif
    <div class="grid md:grid-cols-2 gap-4">
        <div class="content-left user-content">
            {!! $data['content_left'] !!}
        </div>
        <div class="content-right user-content">
            {!! $data['content_right'] !!}
        </div>
    </div>

</div>
