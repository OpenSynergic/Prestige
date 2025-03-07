<x-website::layouts.main>
    <div class="relative py-6 sm:py-12 max-w-screen-xl px-4 sm:px-0 sm:mx-auto w-full">
        <div class="mb-6">
            <x-website::breadcrumbs :breadcrumbs="$this->getBreadcrumbs()" />
        </div>
        <h1 class="page-title text-3xl sm:text-6xl font-bold mb-6 sm:mb-12">
            {{ $this->getTitle() }}
        </h1>
        <div class="overflow-x-auto">
            <table class="table table-md sm:table-lg">
                <tbody>
                    <tr>
                        <th class="w-auto">Full Name</th>
                        <td class="w-4">:</td>
                        <td class="w-fit">{{$participant->full_name}}</td>
                    </tr>
                    <tr>
                        <th class="w-auto">Email</th>
                        <td class="w-4">:</td>
                        <td class="w-fit">{{$participant->email}}</td>
                    </tr>
                    <tr>
                        <th class="w-auto">Participant</th>
                        <td class="w-4">:</td>
                        <td class="w-fit">{{$participant->payment->getMeta('title')}}</td>
                    </tr>
                    <tr>
                        <th class="w-auto">Description</th>
                        <td class="w-4">:</td>
                        <td class="w-fit">{{$participant->payment->getMeta('description') ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th class="w-auto">Amount</th>
                        <td class="w-4">:</td>
                        <td class="w-fit">{{$participant->payment->getFormattedFee()}}</td>
                    </tr>
                    <tr>
                        <th class="w-auto">Payment Method</th>
                        <td class="w-4">:</td>
                        <td class="w-fit">{{Str::title($participant->payment->payment_method)}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-6 sm:p-4">
            <p class="sm:text-xl">Thank you for your registration, we will provide further information via email.</p>
        </div>
    </div>
</x-website::layouts.main>
