<x-app-layout>
    @slot('header')
        <x-h2>{{ __('Invoice') }}</x-h2>
        @include('admin.invoices.dropdown')
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('invoice', $invoice) }}
        <x-card>
            @slot('header')
                <x-h3>{{ __('Info') }}</x-h3>
                <div class="flex space-x-1">
                    @livewire('admin.invoice-update', ['invoice' => $invoice])
                    @livewire('admin.invoice-delete', ['invoice' => $invoice])
                </div>
            @endslot
            @slot('content')
                @livewire('admin.invoice-read', ["invoice" => $invoice])
            @endslot
        </x-card>
    @endslot
</x-app-layout>
