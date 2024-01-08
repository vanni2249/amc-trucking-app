<x-app-layout>
    @slot('header')
        <x-h2>Invoice works</x-h2>
        <div class="flex space-x-1">
            @livewire('admin.invoice-works-attach', ['invoice' => $invoice])
            @include('admin.invoices.dropdown')
        </div>
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('invoice.works',$invoice) }}
        <x-card>
            @slot('content')
                @livewire('admin.invoices-works-balance', ['invoice' => $invoice])
            @endslot
        </x-card>
        <x-card>
            @slot('content')
                @livewire('admin.invoice-works', ['invoice' => $invoice])
            @endslot
        </x-card>
    @endslot
</x-app-layout>
