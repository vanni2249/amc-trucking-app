<div>
    <div class="py-4 flex flex-col md:flex-row">
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Date</small><br>
                    <b>{{$payment->made_at()}}</b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Amount</small>
                    <br>
                    <b>{{$payment->amount()}}</b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Created by</small><br>
                    <b>{{$payment->user->name}}</b>
                </li>
                <li>
                    <small>Created at</small><br>
                    <b>{{$payment->created_at()}}</b>
                </li>
                <li>
                    <small>Updated at</small><br>
                    <b>{{$payment->updated_at()}}</b>
                </li>
            </ul>
        </div>
    </div>
</div>