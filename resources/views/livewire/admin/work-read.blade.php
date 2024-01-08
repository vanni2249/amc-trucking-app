<div>
    <div class="py-4 flex flex-col md:flex-row">
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Reference</small><br>
                    <b>{{$work->reference}}</b>
                </li>
                <li>
                    <small>Type</small><br>
                    <b class="capitalize">{{$work->category->name}}</b>
                </li>
                <li>
                    <small>Contract</small><br>
                    <b>{{$work->contract->name}}</b>
                </li>
                <li>
                    <small>Sub-contract</small><br>
                    <b>{{$work->sub_contract->name}}</b>
                </li>
                <li>
                    <small>Driver</small><br>
                    <b>{{$work->driver->name}}</b>
                </li>
                <li>
                    <small>Truck</small><br>
                    <b>{{$work->truck->key}}</b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Started at</small><br>
                    <b>{{$work->started_at()??'...'}}</b>
                </li>
                <li>
                    <small>Completed at</small><br>
                    <b>{{$work->completed_at()??'...'}}</b>
                </li>
                <li>
                    <small>Loads</small><br>
                    <b>{{$work->loads}}/{{$work->loads_completed}}</b>
                </li>
                <li>
                    <small>Price mile</small><br>
                    <b>{{$work->price_mile??'...'}}</b>
                </li>
                <li>
                    <small>Miles</small><br>
                    <b>{{$work->miles}}</b>
                </li>
                <li>
                    <small>Amount</small><br>
                    <b>{{$work->amount()}}</b>
                </li>
                
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Invoice</small><br>
                    @if ($work->invoices()->count())
                        <b>{{$work->invoices()->first()->paid_at()}}</b>
                        
                    @else
                        ...
                    @endif
                </li>
                <li>
                    <small>Payroll</small><br>
                    @if ($work->payrolls()->count())
                        <b>{{$work->payrolls()->first()->paid_at()??''}}</b>
                    @else
                        ...
                    @endif
                </li>
                <li>
                    <small>Created by</small><br>
                    <b>{{$work->user->name}}</b>
                </li>
                <li>
                    <small>Created at</small><br>
                    <b>{{$work->created_at()}}</b>
                </li>
                <li>
                    <small>Updated at</small><br>
                    <b>{{$work->updated_at()}}</b>
                </li>
                
            </ul>
        </div>
    </div>
</div>
