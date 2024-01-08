<div>
    <div class="grid grid-cols-1 md:grid-cols-3">
        <ul class="space-y-2">
            <li>
                <small>Company</small>
                <br>
                <b>{{ $loan->company->name }}</b>
            </li>
            <li>
    
            </li>
        </ul>
        <ul class="space-y-2">
            <li>
                <small>Made at</small>
                <br>
                <b>{{ $loan->made_at() }}</b>
            </li>
            <li>
                <small>Amount</small>
                <br>
                <b>{{ $loan->amount() }}</b>
            </li>
            <li>
                <small>Deduction</small>
                <br>
                <b>0.00</b>
            </li>
            <li>
                <small>Balance</small>
                <br>
                <b>0.00</b>
            </li>
        </ul>
        <ul class="space-y-2">
            <li>
                <small>Created by</small><br>
                <b>{{$loan->user->name}}</b>
            </li>
            <li>
                <small>Created at</small><br>
                <b>{{$loan->created_at()}}</b>
            </li>
            <li>
                <small>Updated at</small><br>
                <b>{{$loan->updated_at()}}</b>
            </li>
        </ul>
    </div>
</div>
