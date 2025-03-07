@props(['sponsorsWithoutLevel', 'sponsorLevels', 'data' => []])
<section class="sponsors w-full p-4 sm:py-12 sm:px-10">
	<div class="mx-auto text-center gap-2 mb-6">
		<h2 class="text-3xl sm:text-6xl font-bold text-primary">{{ Arr::get($data, 'title') ? $data['title'] : 'Our Sponsors' }} </h2> 
	</div>
	<div class="space-y-4 sm:space-y-8">
		@if($sponsorsWithoutLevel->isNotEmpty())
			<div class="border-t-2 border-base-content py-4">
				<div class="grid sm:grid-cols-2 sm:items-center sm:justify-center gap-4">
					@foreach($sponsorsWithoutLevel as $sponsor)
						@if(!$sponsor->getFirstMedia('logo'))
							@continue
						@endif
						<x-scheduledConference::conference-sponsor :sponsor="$sponsor" />
					@endforeach
				</div>
			</div>
		@endif
		@foreach ($sponsorLevels as $sponsorLevel)
			<div class="border-t-2 border-base-content">
				<h3 class="text-xl sm:text-4xl my-4 font-medium">{{ $sponsorLevel->name }}</h3>
				<div class="grid sm:grid-cols-3 sm:items-center sm:justify-center gap-4">
					@foreach($sponsorLevel->stakeholders as $sponsor)
						@if(!$sponsor->getFirstMedia('logo'))
							@continue
						@endif
						<x-scheduledConference::conference-sponsor :sponsor="$sponsor" />
					@endforeach
				</div>
			</div>
		@endforeach
	</div>
</section>