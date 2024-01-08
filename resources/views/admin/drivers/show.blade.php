<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Driver') }}
            </h2>
            <div>
                
            </div>
        </div>
    </x-slot>
    <x-slot name="main">
        <section>
            {{ Breadcrumbs::render('driver',$driver) }}
        </section>
        <x-card>
            <x-slot name="content">
                <div class="flex justify-between items-center">
                    <h2 class="font-bold">Info</h2>
                    <div class="flex space-x-1">
                        @livewire('admin.driver-update', ['driver' => $driver], key($driver->id))
                        @livewire('admin.driver-delete', ['driver' => $driver], key($driver->id))
                    </div>
                </div>
                <section>
                    @livewire('admin.driver-read',['driver' => $driver])
                </section>
            </x-slot>
        </x-card>
    </x-slot>
</x-app-layout>