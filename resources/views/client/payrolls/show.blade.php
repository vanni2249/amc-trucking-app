<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Payroll
            </h2>
            
        </div>
    </x-slot>
    <x-slot name="main">
        <div class="space-y-4">
            <x-card>
                <x-slot name="content">
                    <div class="flex justify-between items-center gap-2">
                        <div class="grow">
                            <h2 class="font-bold">Info</h2>
                        </div>
                    </div>
                    <div>
                        @livewire('admin.payroll-read',['payroll' => $payroll])
                    </div>
                </x-slot>
            </x-card>
        </div>
    </x-slot>
</x-app-layout>