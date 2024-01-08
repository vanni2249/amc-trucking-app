<div>
    <x-primary-button wire:click="open">
        Add company
    </x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            Add company
        @endslot
        <form wire:submit='save'>
            <div class="p-4 md:p-6 lg:p-6 space-y-4">
                @include('admin.insurances.companies.form')
                <div>
                    <x-primary-button type="submit">Create</x-primary-button>
                </div>
            </div>
        </form>
    </x-modal>
</div>
