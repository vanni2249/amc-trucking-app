<x-app-layout>
    @slot('header')
        <x-h2>{{ __('Payrolls') }}</x-h2>
        @livewire('admin.payroll-create')
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('payrolls') }}
        <x-card>
            <x-slot name="content">
                @livewire('admin.payrolls')
            </x-slot>
        </x-card>
    @endslot
</x-app-layout>
