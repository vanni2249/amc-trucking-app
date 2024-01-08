<div>
    <div class="grid grid-cols-1 md:grid-cols-3">
        <ul class="space-y-2">
            <li>
                <small>Attached</small>
                <br>
                <b>{{ $payroll->deductions()->count() }}</b>
            </li>
        </ul>
        <ul class="space-y-2">
            <li>
                <small>Amount</small>
                <br>
                <b>{{ $payroll->amount_deductions() }}</b>
            </li>
        </ul>
    </div>
    {{-- In work, do what you enjoy. --}}
</div>
