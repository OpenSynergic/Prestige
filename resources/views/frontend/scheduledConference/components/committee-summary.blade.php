@props(['committee'])

<div class="committee flex flex-col h-full gap-2 min-w-64 sm:min-w-80">
	<img class="committee-img object-cover max-w-80 h-full aspect-square border-4 border-black"
		src="{{ $committee->getFirstMedia('profile')?->getAvailableUrl(['thumb', 'thumb-xl']) }}"
		alt="{{ $committee->fullName }}" />
	<div class="committee-information space-y-1">
		<div class="committee-name text-xl sm:text-3xl font-bold">
			{{ $committee->fullName }}
		</div>
		@if ($committee->getMeta('affiliation'))
			<div class="committee-affiliation text-base sm:text-xl">
				{{ $committee->getMeta('affiliation') }}</div>
		@endif
		@if($committee->getMeta('scopus_url') || $committee->getMeta('google_scholar_url') || $committee->getMeta('orcid_url'))
			<div class="committee-scholar flex flex-wrap items-center gap-1">
				@if($committee->getMeta('orcid_url'))
				<a href="{{ $committee->getMeta('orcid_url') }}" target="_blank">
					<x-academicon-orcid class="orcid-logo" />
				</a>
				@endif
				@if($committee->getMeta('google_scholar_url'))
				<a href="{{ $committee->getMeta('google_scholar_url') }}" target="_blank">
					<x-academicon-google-scholar class="google-scholar-logo" />
				</a>
				@endif
				@if($committee->getMeta('scopus_url'))
				<a href="{{ $committee->getMeta('scopus_url') }}" target="_blank">
					<x-academicon-scopus class="scopus-logo" />
				</a>
				@endif
			</div>
		@endif
	</div>
</div>