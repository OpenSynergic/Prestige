@props(['speaker'])

<div class="speaker flex flex-col h-full gap-2 min-w-64 sm:min-w-80 max-w-80">
	<img class="speaker-img object-cover max-w-80 h-full aspect-square border-4 border-black"
		src="{{ $speaker->getFirstMedia('profile')?->getAvailableUrl(['thumb', 'thumb-xl']) }}"
		alt="{{ $speaker->fullName }}" />
	<div class="speaker-information space-y-1">
		<div class="speaker-name text-xl sm:text-3xl font-bold">
			{{ $speaker->fullName }}
		</div>
		@if ($speaker->getMeta('affiliation'))
			<div class="speaker-affiliation text-base sm:text-xl">
				{{ $speaker->getMeta('affiliation') }}</div>
		@endif
		@if($speaker->getMeta('scopus_url') || $speaker->getMeta('google_scholar_url') || $speaker->getMeta('orcid_url'))
			<div class="speaker-scholar flex flex-wrap items-center gap-1">
				@if($speaker->getMeta('orcid_url'))
				<a href="{{ $speaker->getMeta('orcid_url') }}" target="_blank">
					<x-academicon-orcid class="orcid-logo" />
				</a>
				@endif
				@if($speaker->getMeta('google_scholar_url'))
				<a href="{{ $speaker->getMeta('google_scholar_url') }}" target="_blank">
					<x-academicon-google-scholar class="google-scholar-logo" />
				</a>
				@endif
				@if($speaker->getMeta('scopus_url'))
				<a href="{{ $speaker->getMeta('scopus_url') }}" target="_blank">
					<x-academicon-scopus class="scopus-logo" />
				</a>
				@endif
			</div>
		@endif
	</div>
</div>