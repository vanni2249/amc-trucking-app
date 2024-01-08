<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Insurance Payment
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
                            <livewire:admin.insurance-payment-update :$insurance :$payment :key="$insurance->id">
                            <livewire:admin.insurance-payment-delete :$insurance :$payment :key="$insurance->id">
                        </div>
                    </div>
                    <div>
                        @livewire('admin.insurance-payment-read',['insurance' => $insurance, 'payment' => $payment])
                    </div>
                </x-slot>
            </x-card>
        </section>
    </x-slot>
</x-app-layout>