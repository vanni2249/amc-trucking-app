<x-app-layout>
    @slot('header')
        <x-h2>Insurance payments</x-h2>
        <div class="flex space-x-1">
            @livewire('admin.insurance-payment-create', ['insurance' => $insurance], key($insurance->id))
            @include('admin.insurances.dropdown')
        </div>
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('insurance.payments', $insurance) }}
        <x-card>
            @slot('content')
                @livewire('admin.insurance-payments', ['insurance' => $insurance])
            @endslot
        </x-card>
    @endslot
</x-app-layout>
