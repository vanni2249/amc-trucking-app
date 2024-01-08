<x-app-layout>
    @slot('header')
        <x-h2>{{ __('Works') }}</x-h2>
        @livewire('admin.work-create')
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('work') }}
        <x-card>
            <x-slot name="content">
                <livewire:admin.works :paginate=15>
            </x-slot>
        </x-card>
    @endslot
</x-app-layout>
