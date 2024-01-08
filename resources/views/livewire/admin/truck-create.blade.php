<div>
    <x-primary-button wire:click="open">
        New truck
    </x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            Create truck
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.trucks.form')
                <x-primary-button type="submit">Create</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>

