<x-app-layout>
    @slot('header')
        <x-h2>{{ __('Dashboard') }}</x-h2>
        @livewire('admin.select-year')
    @endslot
    @slot('main')
        @livewire('client.dashboard')
    @endslot
</x-app-layout>