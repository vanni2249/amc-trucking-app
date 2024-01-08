<div>
    <div class="space-y-2">

        @forelse ($fuels as $fuel)
            <x-card-item>
                <div class="flex items-center">
                    <div class="grow">
                        @include('admin.fuels.item')
                    </div>
                    <div>
                        <x-icon-delete-button wire:click='delete({{ $fuel->id }})'/>
                    </div>
                </div>
            </x-card-item>
        @empty
            Non data...
        @endforelse
    </div>
</div>
