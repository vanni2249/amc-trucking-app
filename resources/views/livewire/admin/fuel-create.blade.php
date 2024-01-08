<div>
    <x-primary-button wire:click="open">
        New fuel
    </x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            Create fuel
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.fuels.form')
                <x-primary-button type="submit">Create</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>