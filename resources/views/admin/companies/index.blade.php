<x-app-layout>
    @slot('header')
        <x-h2>{{__('Companies')}}</x-h2>
        @livewire('admin.company-create')
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('companies') }}
        <x-card>
            @slot('content')
            @livewire('admin.companies')
            @endslot
        </x-card>
    @endslot
</x-app-layout>