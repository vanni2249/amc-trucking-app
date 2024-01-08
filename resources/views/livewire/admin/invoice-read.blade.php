<div>
    <div class="py-4 flex flex-col md:flex-row">
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Reference</small><br>
                    <b>{{$invoice->reference}}</b>
                </li>
                <li>
                    <small>Works attached</small>
                    <br>
                    <b>
                        {{$invoice->works()->count()}}
                    </b>
                </li>
                <li>
                    <small>Amount</small>
                    <br>
                    <b>{{$invoice->amount()}}</b>
                </li>
               
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Started at</small><br>
                    <b>{{$invoice->started_at()??'...'}}</b>
                </li>
                <li>
                    <small>Completed at</small><br>
                    <b>{{$invoice->completed_at()??'...'}}</b>
                </li>
                <li>
                    <small>Paid at</small>
                    <br>
                    <b>{{$invoice->paid_at()}}</b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Created by</small><br>
                    <b>{{$invoice->user->name}}</b>
                </li>
                <li>
                    <small>Created at</small><br>
                    <b>{{$invoice->created_at()}}</b>
                </li>
                <li>
                    <small>Updated at</small><br>
                    <b>{{$invoice->updated_at()}}</b>
                </li>
            </ul>
        </div>
    </div>
</div>
