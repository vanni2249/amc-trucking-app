<x-app-layout>
    @slot('header')
        <x-h2>
            {{ __('States') }}
        </x-h2>
        @livewire('admin.state-create')
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('states') }}
        <x-card>
            <x-slot name="content">
                @livewire('admin.states')
            </x-slot>
        </x-card>
    @endslot
</x-app-layout>