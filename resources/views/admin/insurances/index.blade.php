<x-app-layout>
    @slot('header')
        <x-h2>
            {{ __('Insurances') }}
        </x-h2>
        @livewire('admin.insurance-create')
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('insurances') }}
        <x-card>
            @slot('content')
                @livewire('admin.insurances')
            @endslot
        </x-card>
    @endslot
</x-app-layout>
