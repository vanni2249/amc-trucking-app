<div>
    <x-primary-button wire:click="open">Attach fuels</x-primary-button>
    <x-modal maxWidth="7xl" wire:model="show">
        @slot('header')
            Attach fuels
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                <div class="max-h-96 overflow-y-scroll space-y-2">
                    @forelse ($fuels as $fuel)
                        <x-card-item>
                            <div class="flex items-center space-x-4">
                                <div>
                                    <x-checkbox-input value='{{ $fuel->id }}' wire:model.live='selected' />
                                </div>
                                <div class="grow">
                                    @include('admin.fuels.item')
                                </div>
                            </div>
                        </x-card-item>
                    @empty
                        Non data...
                    @endforelse
                    {{-- {{ var_export($selected) }} --}}
                </div>
                <div>
                    <x-primary-button>Attach</x-primary-button>
                </div>
            </x-form>
        @endslot
    </x-modal>
</div>
