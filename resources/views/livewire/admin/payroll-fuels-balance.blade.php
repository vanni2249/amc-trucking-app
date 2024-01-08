<div>
    <ul class="grid grid-cols-1 md:grid-cols-6">
        <li>
            <small>Company</small>
            <br>
            <b>{{ $payroll->contract->name }}</b>
        </li>
        <li>
            <small>Attached</small>
            <br>
            <b>{{ $payroll->fuels()->count() }}</b>
        </li>
        <li>
            <small>Amount</small>
            <br>
            <b>{{ $payroll->amount_fuels() }}</b>
        </li>
        <li>
            <small>Week</small>
            <br>
            <b>{{ $payroll->week() }}</b>
        </li>
        <li>
            <small>Started at</small>
            <br>
            <b>{{ $payroll->started_at() }}</b>
        </li>
        <li>
            <small>Completed at</small>
            <br>
            <b>{{ $payroll->completed_at() }}</b>
        </li>
    </ul>
</div>
