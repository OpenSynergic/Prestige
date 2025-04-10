<div class="committees py-10 sm:py-20 space-y-12">
	@foreach (App\Models\CommitteeRole::get() as $role)
		@if ($role->committees->isNotEmpty())
			<div class="w-auto sm:max-w-screen-xl mx-4 lg:mx-auto">
				<h2 class="committee-role-title text-3xl sm:text-6xl font-bold text-primary">
					{{ $role->name }}
				</h2>
				<div class="committees-slider mt-6 sm:mt-12 py-4 flex gap-6 sm:gap-12 overflow-x-scroll">
					@foreach ($role->committees as $committee)
						<x-scheduledConference::committee-summary :committee="$committee" />
					@endforeach
				</div>
			</div>
		@endif
	@endforeach
</div>