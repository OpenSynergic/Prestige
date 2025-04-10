@props([
    'data' => [],
	'timelines'
])
<section class="timelines w-auto sm:max-w-screen-xl mx-4 lg:mx-auto">
    <div class="mx-auto text-center gap-2 mb-6">
        <h2 class="text-3xl sm:text-6xl font-bold text-primary">
            {{ Arr::get($data, 'title') ? $data['title'] : 'Timelines' }}
		</h2>
    </div>

    <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">
		@foreach ($timelines as $timeline)	
			<li>
				@if(!$loop->first)
					<hr />
				@endif
				<div class="timeline-middle">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
						<path fill-rule="evenodd"
							d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
							clip-rule="evenodd" />
					</svg>
				</div>
				<div @class([
					'timeline-start mb-10 md:text-end' => $loop->odd,
					'timeline-end md:mb-10' => $loop->even,
				])>
					<time class="font-mono italic">
						{{ $timeline->date->format('d M Y') }} 
						@if($timeline->date_end)
							- {{ $timeline->date_end->format('d M Y') }}
						@endif
					</time>
					<div class="text-lg font-black">{{ $timeline->name }}</div>
					<span>
						{{ $timeline->description }}
					</span>
				</div>
				@if(!$loop->last)
				<hr />
				@endif
			</li>
		@endforeach
    </ul>
</section>
