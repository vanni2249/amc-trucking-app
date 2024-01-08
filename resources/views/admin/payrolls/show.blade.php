<x-app-layout>
    @slot('header')
        <x-h2>{{ __('Payroll info') }}</x-h2>
        @include('admin.payrolls.dropdown')
    @endslot
    @slot('main')
{{ Breadcrumbs::render('payroll',$payroll) }}
    <x-card>
            @slot('header')
                <x-h3>Info</x-h3>
                <div class="flex space-x-1">
                    @livewire('admin.payroll-update', ['payroll' => $payroll], key($payroll->id))
                    @livewire('admin.payroll-delete', ['payroll' => $payroll], key($payroll->id))
                </div>
            @endslot
            @slot('content')
                @livewire('admin.payroll-read', ['payroll' => $payroll])
            @endslot
        </x-card>
    @endslot
  </x-app-layout>
