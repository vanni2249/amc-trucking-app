<div>
    <div class="py-4 flex flex-col md:flex-row">
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Category</small><br>
                    <b>{{$deduction->category->name}}</b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Amount</small>
                    <br>
                    <b>{{$deduction->amount()}}</b>
                </li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <ul class="space-y-2">
                <li>
                    <small>Created by</small><br>
                    <b>{{$deduction->user->name}}</b>
                </li>
                <li>
                    <small>Created at</small><br>
                    <b>{{$deduction->created_at()}}</b>
                </li>
                <li>
                    <small>Updated at</small><br>
                    <b>{{$deduction->updated_at()}}</b>
                </li>
            </ul>
        </div>
    </div>
</div>