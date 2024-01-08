<div>
    <div class="space-y-2">
        @forelse ($drivers as $driver)
            <x-card-item>
                <a href="{{ route('admin.drivers.show', ['driver' => $driver->id]) }}" class="block group">
                    <ul class="flex justify-between items-center">
                        <li>
                            <b>
                                {{ $driver->name }}
                            </b>
                            <br>
                            <small>
                                {{ $driver->email }}
                            </small>

                        </li>
                        <li class="group-hover:mr-2 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>

                        </li>
                    </ul>

                </a>
            </x-card-item>
        @empty
            <div class="p-4">
                non data...
            </div>
        @endforelse
        {{ $drivers->links() }}
    </div>
</div>
