<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Payroll deduction
            </h2>
            
        </div>
    </x-slot>
    <x-slot name="main">
        <section class="space-y-4">
            <x-card>
                <x-slot name="content">
                    <div class="flex justify-between items-center gap-2">
                        <div class="grow">
                            <h2 class="font-bold">Info</h2>
                        </div>
                        <div class="flex space-x-1">
                            <livewire:admin.payroll-deduction-update :$payroll :$deduction >
                            <livewire:admin.payroll-deduction-delete :$payroll :$deduction >
                        </div>
                    </div>
                    <div>
                        @livewire('admin.payroll-deduction-read',['payroll' => $payroll, 'deduction' => $deduction])
                    </div>
                </x-slot>
            </x-card>
        </section>
    </x-slot>
</x-app-layout>