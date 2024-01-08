<div>
    <x-danger-button wire:click='open'>delete</x-danger-button>
    <x-modal wire:model="show">
        @slot('header')
            Remove payment insurance
        @endslot
        @slot('content')
            <p>
                Are you sure you want to delete the <b>{{$payment->amount}}</b>  payment?
            </p>
            <div class="flex space-x-1">
                <div>
                    <form wire:submit='delete'>
                        <div>
                            <x-danger-button type="submit">remove</x-danger-button>
                        </div>
                    </form>
                </div>
                <div>
                    <x-primary-button wire:click="close">cancel</x-primary-button>
                </div>
            </div>
        @endslot
    </x-modal>
</div>
