@props(['partner'])

<div {{ $attributes->class(['partner w-full group']) }}>
    <a href="{{ $partner->getMeta('url') ?? '#' }}" class="w-full inline-block transition-all border-transparent border-2 group-hover:border-base-content/30 rounded-none ">
        <div class="flex sm:p-[12%] flex-col justify-center items-center group-hover:translate-x-1.5 group-hover:-translate-y-1.5 group-hover:bg-base-content/30 transition-all">
            <img class="partner-logo flex-1 w-auto h-full max-h-60" src="{{ $partner->getFirstMediaUrl('logo') }}"
                    alt="{{ $partner->name }}" />
        </div>
    </a>
</div>
