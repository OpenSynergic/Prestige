<x-website::layouts.main>
    <div class="relative py-6 sm:py-12 max-w-screen-xl px-4 sm:px-0 sm:mx-auto w-full">
        <div class="mb-6">
            <x-website::breadcrumbs :breadcrumbs="$this->getBreadcrumbs()" />
        </div>
        <h1 class="page-title text-3xl sm:text-6xl font-bold mb-6 sm:mb-12">
            {{ $this->getTitle() }}
        </h1>
        @if ($mailing_address)
            <div id="mailing-address" class="text-xl mb-6">
                {{ $mailing_address }}
            </div>
        @endif
        <div class="grid sm:grid-cols-2 justify-items-start gap-y-8">
            <div id="chair-contact" class="space-y-2">
                <h2 class="font-bold text-2xl">{{ __('general.principal_contact') }}</h2>
                <div class="text-xl">
                    <p>{{ $principal_contact_name }}</p>
                    @if ($principal_contact_affiliation)
                        <p>{{ $principal_contact_affiliation }}</p>
                    @endif
                </div>
                @if ($principal_contact_phone)
                    <div class="text-xl">
                        <p class="font-bold">{{ __('general.phone') }}</p>
                        <p>
                            {{ $principal_contact_phone }}
                        </p>
                    </div>
                @endif
                @if ($principal_contact_email)
                    <div class="text-xl">
                        <p class="font-bold">{{ __('general.email') }}</p>
                        <p>
                            {{ $principal_contact_email }}
                        </p>
                    </div>
                @endif
            </div>
            <div id="support-contact" class="space-y-2">
                <h2 class="font-bold text-2xl">{{ __('general.technical_support_contact') }}</h2>
                <div class="text-xl">
                    <p>{{ $support_contact_name }}</p>
                </div>
                @if ($support_contact_phone)
                    <div class="text-xl">
                        <p class="font-bold">{{ __('general.phone') }}</p>
                        <p>
                            {{ $support_contact_phone }}
                        </p>
                    </div>
                @endif
                @if ($support_contact_email)
                    <div class="text-xl">
                        <p class="font-bold">{{ __('general.email') }}</p>
                        <p>
                            {{ $support_contact_email }}
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-website::layouts.main>
