<x-app-layout>
    @slot('header')
        <x-h2>
            Payment
            {{ $payment->type_payment->key }}
        </x-h2>
        @if ($payment->type_payment->key == 'fuel')
            @include('admin.payments.fuels.dropdown')
        @endif
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('payment', $payment) }}
        <x-card>
            @slot('header')
                <x-h3>Info</x-h3>
                <div class="flex space-x-1">
                    @livewire('admin.payment-update', ['payment' => $payment])
                    @livewire('admin.payment-delete', ['payment' => $payment])
                </div>
            @endslot
            @slot('content')
                @livewire('admin.payment-read', ['payment' => $payment])
            @endslot
        </x-card>
    @endslot
</x-app-layout>
