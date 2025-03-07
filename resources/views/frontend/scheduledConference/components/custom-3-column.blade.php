@props([
    'data' => [],
])
<div @class([
    'custom-three-column',
	'py-10 sm:py-20 w-auto sm:max-w-screen-xl mx-4 lg:mx-auto' => !$data['full_width'],
])>
    @if ($data['show_title'])
        <h2 class="custom-three-column-title text-primary text-3xl sm:text-6xl font-bold mb-6 sm:mb-12">
            {{ $data['title'] }}
        </h2>
    @endif
    <div class="grid md:grid-cols-3 gap-4">
        <div class="content-one user-content">
            {!! $data['content_one'] !!}
        </div>
        <div class="content-two user-content">
            {!! $data['content_two'] !!}
        </div>
        <div class="content-three user-content">
            {!! $data['content_three'] !!}
        </div>
    </div>

</div>
