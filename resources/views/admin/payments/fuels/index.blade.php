<x-app-layout>
    @slot('header')
        <x-h2>Payment fuels</x-h2>
        @livewire('admin.payment-fuels-attach', ['payment' => $payment])
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('payment.fuels',$payment) }}
        <x-card>
            @slot('content')
                @livewire('admin.payment-fuels-balance',['payment' => $payment])
            @endslot
        </x-card>
        <x-card>
            @slot('content')
                @livewire('admin.payment-fuels',['payment' => $payment])
            @endslot
        </x-card>
    @endslot
</x-app-layout>
