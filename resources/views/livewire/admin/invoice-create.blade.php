<div>
    <x-primary-button wire:click="open">
        New invoice
    </x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            Create invoice
        @endslot
        <form wire:submit='save'>
            <div class="p-4 md:p-6 lg:p-6 space-y-4">
                @include('admin.invoices.form')
                <div>
                    <x-primary-button type="submit">Create</x-primary-button>
                </div>
            </div>
        </form>
    </x-modal>
</div>
