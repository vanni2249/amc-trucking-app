<div>
    <ul class="grid grid-cols-1 md:grid-cols-3">
        <li>
            <small>Amount</small>
            <br>
            <b>{{ $payment->amount() }}</b>
        </li>
        <li>
            <small>Attached</small>
            <br>
            <b>{{ $payment->sum_fuels() }}</b>
        </li>
        <li>
            <small>Balance</small>
            <br>
            <b>{{ $payment->diference_balance() }}</b>
        </li>
    </ul>
</div>
