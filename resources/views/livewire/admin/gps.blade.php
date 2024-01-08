<div>
    <div class="space-y-2">
        @forelse ($gps as $item)
            <a href="{{ route('admin.gps.show',['gps' => $item]) }}" class="block">
                <x-card-item>
                    <ul class="grid grid-cols-1 md:grid-cols-6 items-center">
                        <li>
                            <small>Company</small>
                            <br>
                            <b>{{ $item->company->name }}</b>
                        </li>
                        <li>
                            <b>{{ $item->started_at() }}</b>
                        </li>
                        <li>
                            <b>{{ $item->completed_at() }}</b>
                        </li>
                        <li>
                            <small>Amount</small>
                            <br>
                            <b>{{ $item->sum_main_amount() }}</b>
                        </li>
                        <li>
                            <small>Deductions</small>
                            <br>
                            <b>{{ $item->sum_main_deductions() }}</b>
                        </li>
                        <li>
                            <small>Balance</small>
                            <br>
                            <b>{{ $item->main_balance() }}</b>
                        </li>
                    </ul>
                </x-card-item>
            </a>
        @empty
            Non data...
        @endforelse
        {{ $gps->links() }}
    </div>
</div>
