<x-app-layout>
    @slot('header')
        <x-h2>Loans</x-h2>
        <div class="flex space-x-1">
            @livewire('admin.loan-create')
        </div>
    @endslot
    @slot('main')
        {{ Breadcrumbs::render('loan') }}
        <x-card>
            @slot('content')
                @livewire('admin.loans')
            @endslot
        </x-card>
    @endslot
</x-app-layout>