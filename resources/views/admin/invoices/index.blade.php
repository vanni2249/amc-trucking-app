<x-app-layout>
    @slot('header')
        <x-h2>{{ __('Invoices') }}</x-h2>
        @livewire('admin.invoice-create')
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('invoices') }}
        <x-card>
            <x-slot name="content">
                @livewire('admin.invoices')
            </x-slot>
        </x-card>
    @endslot
</x-app-layout>
