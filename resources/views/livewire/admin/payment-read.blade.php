<div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <ul class="space-y-4">
            <li>
                <small>Type payment</small>
                <br>
                <b>{{ $payment->type_payment->name }}</b>
            </li>
            <li>
                <small>Amount</small>
                <br>
                <b>{{ $payment->amount() }}</b>
            </li>
            <li>
                <small>Made at</small>
                <br>
                <b>{{ $payment->made_at() }}</b>
            </li>
        </ul>
        @if ($payment->type_payment->key == 'insurance')
            <ul class="space-y-4">
                <li>
                    <small>Company</small>
                    <br>
                    <b>{{ $payment->insurances()->first()->company->name }}</b>
                </li>
                <li>
                    <small>Gross</small>
                    <br>
                    <b>{{ $payment->insurances()->first()->gross() }}</b>
                </li>
                <li>
                    <small>Deductions</small>
                    <br>
                    <b>...</b>
                </li>
                <li>
                    <small>Payments</small>
                    <br>
                    <b>{{ $payment->insurances()->first()->sum_payments() ?? '...' }}</b>
                </li>
                <li>
                    <small>Balance</small>
                    <br>
                    <b>...</b>
                </li>
            </ul>
        @endif
        @if ($payment->type_payment->key == 'fuel')
            <ul class="space-y-4">
                <li>
                    <small>Attached</small>
                    <br>
                    <b>{{ $payment->fuels()->count() }}</b>
                </li>
                <li>
                    <small>Amount</small>
                    <br>
                    <b>{{ $payment->amount() }}</b>
                </li>
                <li>
                    <small>Accumulated</small>
                    <br>
                    <b>{{ $payment->sum_fuels() }}</b>
                </li>
                <li>
                    <small>Balance</small>
                    <br>
                    <b>{{ $payment->diference_balance() }}</b>
                </li>
            </ul>
        @endif
        <ul class="space-y-4">
            <li>
                <small>Created by</small><br>
                <b>{{ $payment->user->name }}</b>
            </li>
            <li>
                <small>Created at</small><br>
                <b>{{ $payment->created_at() }}</b>
            </li>
            <li>
                <small>Updated at</small><br>
                <b>{{ $payment->updated_at() }}</b>
            </li>
        </ul>
    </div>
</div>
