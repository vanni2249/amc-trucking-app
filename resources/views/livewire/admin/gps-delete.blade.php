<div>
    @if (!$gps->gpses()->count())
    <x-danger-button wire:click='open'>Delete gps term</x-danger-button>
        
    @endif
    <x-modal wire:model='show'>
        @slot('header')
            <x-h3>Delete gps term</x-h3>
        @endslot
        @slot('content')
            <span>
                Are you sure you want to delete the <b>{{ $gps->company->name }}</b> gps term?
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
