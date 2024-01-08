<div>
    <div class="grid grid-cols-1 md:grid-cols-3">
        <ul class="space-y-2">
            <li>
                <small>Company</small>
                <br>
                <b>{{ $gps->company->name }}</b>
            </li>
            <li>
                <small>Attached</small>
                <br>
                <b>{{ $gps->gpses()->count() }}</b>
            </li>
            <li>
                <small>Amount</small>
                <br>
                <b>{{ $gps->sum_main_amount() }}</b>
            </li>
            <li>
                <small>Deductions</small>
                <br>
                <b>{{ $gps->sum_main_deductions() }}</b>
            </li>
            <li>
                <small>Balance</small>
                <br>
                <b>{{ $gps->main_balance() }}</b>
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
        <ul class="space-y-2">
            <li>
                <small>Created by</small><br>
                <b>{{$gps->user->name}}</b>
            </li>
            <li>
                <small>Created at</small><br>
                <b>{{$gps->created_at()}}</b>
            </li>
            <li>
                <small>Updated at</small><br>
                <b>{{$gps->updated_at()}}</b>
            </li>
        </ul>
    </div>
</div>
