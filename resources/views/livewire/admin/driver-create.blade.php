<div>
    <x-primary-button wire:click="open">
        New driver
    </x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            Create company
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.drivers.form')
                <x-primary-button type="submit">Create</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
