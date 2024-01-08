<div class="space-y-2">
    @forelse ($fuels as $fuel)
        <x-card-item>
            <div class="flex flex-row">
                <div class="grow">
                    <a href="{{ route('admin.fuels.show',['fuel' => $fuel->id])}}">
                        @include('admin.fuels.item')
                    </a>
                </div>
            </div>
        </x-card-item>
    @empty
        non data...
    @endforelse
    {{ $fuels->links() }}
</div> 

