@props([
	'committeeRoles' => null,
])

<div class="committees space-y-12">
	@foreach ($committeeRoles as $role)
		@if ($role->committees->isNotEmpty())
			<div class="w-auto sm:max-w-screen-xl mx-4 lg:mx-auto">
				<h2 class="committee-role-title text-xl sm:text-3xl font-bold">
					{{ $role->name }}
				</h2>
				<div class="committees-slider py-4 flex gap-6 sm:gap-12 overflow-x-scroll">
					@foreach ($role->committees as $committee)
						<x-scheduledConference::committee-summary :committee="$committee" />
					@endforeach
				</div>
			</div>
		@endif
	@endforeach
</div>