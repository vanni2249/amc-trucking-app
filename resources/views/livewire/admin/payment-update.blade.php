<div>
    <x-primary-button wire:click='open'>Update</x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            Update payment
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.payments.form')
                <x-primary-button type="submit">Update</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
