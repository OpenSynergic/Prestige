@props(['date'])

<div class="countdown-timer my-8 sm:my-16 sm:max-w-screen-sm mx-auto">
    <div x-data="flip('{{ $date }}')" data-credits="false">
        <div data-repeat="true" data-layout="horizontal fit" data-transform="preset(d, h, m, s) -> delay">
            <div class="tick-group">
                <div data-key="value" data-repeat="true" data-transform="pad(00) -> split -> delay">
                    <span data-view="flip"></span>
                </div>
    
                <span data-key="label" data-view="text" class="tick-label"></span>
            </div>
        </div>
    </div>
</div>