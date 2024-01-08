<div>
    <x-primary-button wire:click="open">
        {{ __('New Vehicle') }}
    </x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            {{__('Create vehicle')}}
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.vehicles.form')
                <x-primary-button type="submit">Create</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
