<x-app-layout>
    @slot('header')
        <x-h2>Payroll works</x-h2>
        <div class="flex space-x-1">
            @livewire('admin.payroll-works-attach', ['payroll' => $payroll], key($payroll->id))
            @include('admin.payrolls.dropdown')
        </div>
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('payroll.works',$payroll) }}
        <x-card>
            @slot('content')
                @livewire('admin.payroll-works-balance', ['payroll' => $payroll])
            @endslot
        </x-card>
        <x-card>
            @slot('header')
                <x-h3>Works</x-h3>
            @endslot
            @slot('content')
                @livewire('admin.payroll-works', ['payroll' => $payroll])
            @endslot
        </x-card>
    @endslot
</x-app-layout>
