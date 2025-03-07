@props([
	'partners',
	'data' => [],
])

<section class="partners w-full p-4 sm:py-12 sm:px-10">
	<div class="mx-auto text-center gap-2 mb-6">
		<h2 class="text-3xl sm:text-6xl font-bold text-primary">{{ Arr::get($data, 'title') ? $data['title'] : 'Our Partners' }}</h2> 
	</div>
	<div class="space-y-8">
		@if($partners->isNotEmpty())
			<div class="border-t-2 border-base-content py-4">
				<div class="grid sm:grid-cols-2 sm:items-center sm:justify-center gap-4">
					@foreach($partners as $partner)
						@if(!$partner->getFirstMedia('logo'))
							@continue
						@endif
						<x-scheduledConference::conference-partner :partner="$partner" />
					@endforeach
				</div>
			</div>
		@endif
	</div>
</section>