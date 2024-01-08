<x-app-layout>
    @slot('header')
        <x-h2>Loan</x-h2>
        <div class="space-x-1">

        </div>
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('loans',$loan) }}    
    <x-card>
            @slot('header')
                <x-h3>Info</x-h3>
                <div class="flex space-x-1">
                    @livewire('admin.loan-update', ['loan' => $loan])
                    @livewire('admin.loan-delete', ['loan' => $loan])
                </div>
            @endslot
            @slot('content')
                @livewire('admin.loan-read', ['loan' => $loan])
            @endslot
        </x-card>
    @endslot
</x-app-layout>
