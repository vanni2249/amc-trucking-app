<div>
    <x-primary-button wire:click='open'>add works</x-primary-button>
    <x-modal wire:model='show' maxWidth="7xl">
        @slot('header')
            Add works
        @endslot
        @slot('content')
            <x-form wire:submit='save'>
                <div class="max-h-96 overflow-y-scroll space-y-2">
                    @forelse ($works as $work)
                        <x-card-item>
                            <div class="flex flex-row items-center space-x-4">
                                <div>
                                    <x-checkbox-input value="{{ $work->id }}" wire:model="selected" />
                                </div>
                                <div class="grow">
                                    @include('admin.works.item')
                                </div>
                            </div>
                        </x-card-item>
                    @empty
                        non data...
                    @endforelse
                </div>
                <div>
                    <x-primary-button type="submit">Save</x-primary-button>
                </div>
            </x-form>
        @endslot
    </x-modal>
</div>
