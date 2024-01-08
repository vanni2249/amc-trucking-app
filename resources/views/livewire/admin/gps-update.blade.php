<div>
    <x-primary-button wire:click='open'>Update</x-primary-button>
    <x-modal wire:model='show' >
        @slot('header')
            <x-h2>Update gps</x-h2>
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.gps.form')
                <x-primary-button type='submit'>Save</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
