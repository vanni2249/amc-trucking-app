<div>
    <x-danger-button wire:click='open'>Delete</x-danger-button>
    <x-modal wire:model='show'>
        @slot('header')
            Delete loan
        @endslot
        @slot('content')
        <span>
            Are you sure you want to delete the <b>{{$loan->amount()}}</b> payment to loan?
        </span>
        <span class="flex space-x-1">
            <x-form wire:submit='delete'>
                <x-danger-button type="submit">remove</x-danger-button>
            </x-form>
            <x-primary-button wire:click="close">cancel</x-primary-button>
        </span>
        @endslot
    </x-modal>
</div>
