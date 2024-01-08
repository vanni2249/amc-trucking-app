<div>
    {{-- @if (!$state->is_default) --}}
        <x-danger-button wire:click="open">delete</x-danger-button>
    {{-- @endif --}}
    <x-modal wire:model='show'>
        @slot('header')
            {{__('Remove state')}}
        @endslot
        @slot('content')
            <span>
                Are you sure you want to delete the <b>{{$payment->amount}}</b>  payment?
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
