<div>
    <div class="space-y-2 py-4">
        @forelse ($works as $work)
        <x-card-item>
            <div class="flex flex-row items-center">
                <div class="grow">
                    <a href="{{ route('admin.works.show', ['work' => $work->id]) }}" class="block">
                        @include('admin.works.item')
                    </a>
                </div>
                <div>
                    @if ($work->payrolls()->count() == 0)
                        <x-icon-minus-button wire:click='detach({{$work->id}})'></x-icon-minus-button>
                    @endif
                </div>
            </div>
        </x-card-item>
        @empty
            non data...
        @endforelse
    </div>
</div>
