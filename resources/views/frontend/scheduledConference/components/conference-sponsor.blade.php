@props(['sponsor'])


<div {{ $attributes->class(['sponsor w-full group']) }}>
    <a href="{{ $sponsor->getMeta('url') ?? '#' }}" class="w-full inline-block transition-all border-transparent border-2 group-hover:border-base-content/30 rounded-none ">
        <div class="flex sm:p-[10%] flex-col justify-center items-center group-hover:translate-x-1.5 group-hover:-translate-y-1.5 group-hover:bg-base-content/30 transition-all">
            <img class="flex-1 conference-sponsor-logo w-auto h-full max-h-60" src="{{ $sponsor->getFirstMediaUrl('logo') }}"
                    alt="{{ $sponsor->name }}" />
        </div>
    </a>
</div>
