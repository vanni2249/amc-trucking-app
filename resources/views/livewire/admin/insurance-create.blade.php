<div>
    <x-primary-button wire:click="open">
        New insurance
    </x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            Create insurance
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.insurances.form')
                <x-primary-button type="submit">Create</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
