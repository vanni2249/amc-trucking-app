<div>
    <ul class="grid grid-cols-1 md:grid-cols-3">
        <li>
            <small>Attached</small>
            <br>
            <b>{{ $invoice->works()->count() }}</b>
        </li>
        <li>
            <small>Balance</small>
            <br>
            <b>{{ $invoice->works_amount_sum() }}</b>
        </li>
    </ul>
</div>
