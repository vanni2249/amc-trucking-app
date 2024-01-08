<x-app-layout>
    @slot('header')
        <x-h2>
            {{ __('Cards') }}
        </x-h2>
        @livewire('admin.card-create')
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('cards') }}
        <x-card>
            <x-slot name="content">
                @livewire('admin.cards')
            </x-slot>
        </x-card>
    @endslot
</x-app-layout>