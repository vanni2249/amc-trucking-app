<div>
    <x-primary-button wire:click="open">
        {{ __('New Station') }}
    </x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            {{__('Create station')}}
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.stations.form')
                <x-primary-button type="submit">Create</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
