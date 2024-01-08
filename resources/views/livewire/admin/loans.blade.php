<div>
    <div class="space-y-2">
        @forelse ($loans as $loan)
            <a href="{{ route('admin.loans.show', ['loan' => $loan]) }}" class="block">
                <x-card-item>
                    <ul class="grid grid-cols-1 md:grid-cols-5 items-center">
                        <li>
                            <small>Company</small>
                            <br>
                            <b>{{ $loan->company->name }}</b>
                        </li>
                        <li>
                            <b>{{ $loan->made_at() }}</b>
                        </li>
                        <li>
                            <b>{{ $loan->amount() }}</b>
                        </li>
                        <li>
                            <b>{{ $loan->acumulated() }}</b>
                        </li>
                        <li>
                            <b>{{ $loan->balance() }}</b>
                        </li>
                    </ul>
                </x-card-item>
            </a>
        @empty
            Non data...
        @endforelse
        {{ $loans->links() }}
    </div>
</div>
