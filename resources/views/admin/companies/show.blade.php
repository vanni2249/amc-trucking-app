<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Company
            </h2>
            
        </div>
    </x-slot>
    <x-slot name="main">
        <section>
            {{ Breadcrumbs::render('company', $company) }}
        </section>
        <x-card>
            <x-slot name="content">
                <header class="flex justify-between">
                    <section>
                        <h2 class="font-bold">Info</h2>
                    </section>
                    <section class="flex space-x-1">
                        @livewire('admin.company-update', ['company' => $company], key($company->id))
                        @livewire('admin.company-delete', ['company' => $company], key($company->id))

                    </section>
                </header>
                <section>
                        @livewire('admin.company-read',['company' => $company])
                </section>
            </x-slot>
        </x-card>
    </x-slot>
</x-app-layout>