<div class="speakers py-10 sm:py-20 space-y-12">
	@foreach ($currentScheduledConference->speakerRoles as $role)
		@if ($role->speakers->isNotEmpty())
			<div class="w-auto sm:max-w-screen-xl mx-4 lg:mx-auto">
				<h2 class="speakers-title text-3xl sm:text-6xl font-bold text-primary">
					{{ $role->name }}
				</h2>
				<div class="speakers-slider mt-6 sm:mt-12 py-4 flex gap-6 sm:gap-12 overflow-x-scroll">
					@foreach ($role->speakers as $speaker)
						<x-scheduledConference::speaker-summary :speaker="$speaker" />
					@endforeach
				</div>
			</div>
		@endif
	@endforeach
</div>