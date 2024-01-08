<div>
    <div class="py-4 flex flex-col md:flex-row">
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Company</small>
                    <br>
                    <b>
                        {{$insurance->company->name}}
                    </b>
                </li>
                <li>
                    <small>Started at</small>
                    <br>
                    <b>{{$insurance->insurance->started_at()??'...'}}</b>
                </li>
                <li>
                    <small>Completed at</small>
                    <br>
                    <b>{{$insurance->insurance->completed_at()??'...'}}</b>
                </li>
                
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Gross</small>
                    <br>
                    <b>{{ $insurance->amount() }}</b>
                </li>
                <li>
                    <small>Adjusts</small>
                    <br>
                    <b>...</b>
                </li>
                <li>
                    <small>Deductions</small>
                    <br>
                    <b>{{ $insurance->sum_deductions() }}</b>
                </li>
                <li>
                    <small>Balance</small>
                    <br>
                    <b>{{ $insurance->balance_company() }}</b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Created by</small><br>
                    <b>{{$insurance->user->name}}</b>
                </li>
                <li>
                    <small>Created at</small><br>
                    <b>{{$insurance->created_at()}}</b>
                </li>
                <li>
                    <small>Updated at</small><br>
                    <b>{{$insurance->updated_at()}}</b>
                </li>
            </ul>
        </div>
    </div>
</div>