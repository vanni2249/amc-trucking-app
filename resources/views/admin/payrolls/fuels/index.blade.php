<x-app-layout>
    @slot('header')
        <x-h2>Payroll fuels</x-h2>
        <div class="flex space-x-1">
            @livewire('admin.payroll-fuels-attach', ['payroll' => $payroll])
            @include('admin.payrolls.dropdown')
        </div>
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('payroll.fuels',$payroll) }}
        <x-card>
            @slot('content')
                @livewire('admin.payroll-fuels-balance', ['payroll' => $payroll])
            @endslot
        </x-card>
        <x-card>
            @slot('content')
                @livewire('admin.payroll-fuels', ['payroll' => $payroll])
            @endslot
        </x-card>
    @endslot
</x-app-layout>
