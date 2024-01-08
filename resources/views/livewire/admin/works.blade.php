<div>
    @include('admin.partials.filters')
    <div class="space-y-2">
        @forelse ($works as $work)
            <x-card-item>
                <div class="flex flex-row">
                    <div class="grow">
                        <a href="{{ route('admin.works.show', ['work' => $work->id]) }}">
                            @include('admin.works.item')
                        </a>
                    </div>
                </div>
            </x-card-item>
        @empty
            non data...
        @endforelse
        {{ $works->links() }}
    </div>

</div>
