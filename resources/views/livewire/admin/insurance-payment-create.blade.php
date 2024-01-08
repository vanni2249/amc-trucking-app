<div>
    <x-primary-button wire:click="open">
        New payment
    </x-primary-button>
    <x-modal wire:model='show'>
        @slot('header')
            Create payment
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                @include('admin.insurances.payments.form')
                <x-primary-button type="submit">Create</x-primary-button>
            </x-form>
        @endslot
    </x-modal>
</div>
