<div>
    <div class="space-y-2">
        @forelse ($companies as $company)
            <a href="{{ route('admin.gps.companies.show',['gps' => $gps, 'company' => $company->company->id]) }}" class="block">
                <x-card-item>
                    <ul class="grid grid-cols-1 md:grid-cols-4 items-center">
                        <li>
                            <small>Company</small>
                            <br>
                            <b>{{ $company->company->name }}</b>
                        </li>
                        <li>
                            <b>{{ $company->amount() }}</b>
                        </li>
                        <li>
                            <b>{{ $company->sum_selft_deductions() }}</b>
                        </li>
                        <li>
                            <b>{{ $company->balance_selft() }}</b>
                        </li>
                    </ul>
                </x-card-item>
            </a>
        @empty
            Non data...
        @endforelse
    </div>
</div>
