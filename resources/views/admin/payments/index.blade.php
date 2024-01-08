<x-app-layout>
    @slot('header')
        <x-h2>Payment</x-h2>
        @livewire('admin.payment-create')
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('payments') }}
        <x-card>
            @slot('content')
                @livewire('admin.payments')
            @endslot
        </x-card>
    @endslot
</x-app-layout>
