<div>
    @forelse ($deductions as $deduction)
        <x-card-item>
            <ul class="grid grid-cols-1 md:grid-cols-5 md:items-center">
                <li>
                    <small>{{ $deduction->payroll->contract->name }}</small>
                    <br>
                    <b>{{ $deduction->category->name }}</b>
                </li>
                <li>
                    <b>{{ $deduction->gps->gps->company->name }}</b>
                </li>
                <li>
                    <b>{{ $deduction->payroll->paid_at() }}</b>
                </li>
                <li>
                    <b>{{ $deduction->amount() }}</b>
                </li>
                <li>
                    <b>{{ $deduction->gps_balance() }}</b>
                </li>
            </ul>
        </x-card-item>
    @empty
    @endforelse
</div>
