<x-app-layout>
    @slot('header')
        <x-h2>Payroll deductions</x-h2>
        <div class="flex space-x-1">
            @livewire('admin.payroll-deduction-create', ['payroll' => $payroll], key($payroll->id))
            @include('admin.payrolls.dropdown')
        </div>
    @endslot
    @slot('main')
    {{ Breadcrumbs::render('payroll.deductions',$payroll) }}
        <x-card>
            @slot('content')
                @livewire('admin.payroll-deductions-balance',['payroll' => $payroll])
            @endslot
        </x-card>
        <x-card>
            @slot('content')
                @livewire('admin.payroll-deductions', ['payroll' => $payroll])
            @endslot
        </x-card>
    @endslot
</x-app-layout>
