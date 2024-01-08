<div>
    <div class="grid grid-cols-1 md:grid-cols-3">
        <ul class="space-y-2">
            <li>
                <small>Company</small>
                <br>
                <b>{{ $company->name }}</b>
            </li>
            <li>
                <small>Amount</small>
                <br>
                <b>{{ $item->amount() }}</b>
            </li>
            <li>
                <small>Attached</small>
                <br>
                <b>{{ $item->deductions()->count() }}</b>
            </li>
            <li>
                <small>Deduction</small>
                <br>
                <b>{{ $item->sum_selft_deductions() }}</b>
            </li>
            <li>
                <small>Balance</small>
                <br>
                <b>{{ $item->balance_selft() }}</b>
            </li>
        </ul>
        <ul class="space-y-2">
            <li>
                <small>Started at</small>
                <br>
                <b>{{ $gps->started_at() }}</b>
            </li>
            <li>
                <small>Completed at</small>
                <br>
                <b>{{ $gps->completed_at() }}</b>
            </li>
        </ul>
    </div>
</div>
