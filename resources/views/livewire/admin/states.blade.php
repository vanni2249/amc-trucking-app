<div>
    <section class="space-y-2">
        @forelse ($states as $state)
            <a href="{{ route('admin.states.show', ['state' => $state->id]) }}" class="block group">
                <x-card-item>
                    <ul class="flex justify-between items-center">
                        <li>
                            <b>
                                {{$state->name}}
                            </b>
                            <br>
                            <small>
                                @if ($state->is_actived)
                                    Actived
                                @else
                                    Desactived
                                @endif
                            </small>
                        </li>
                        <li class="group-hover:pr-2 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </li>
                    </ul>
                </x-card-item>
            </a>
        @empty
            non data...
        @endforelse
        {{ $states->links() }}
    </section>
    
</div>
