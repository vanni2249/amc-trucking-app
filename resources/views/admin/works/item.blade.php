<ul class="grid grid-cols-1 md:grid-cols-5 items-center">
    <li>
        <small class="capitalize">{{$work->category->name}}</small><br>
        <b>{{$work->reference}}</b>
    </li>
    <li>
        <small>
            {{$work->contract->name}}
        </small>
        <br/>
        <b>
            {{$work->sub_contract->name}}
        </b>
    </li>
    <li>
        <small>{{$work->driver->name}}</small><br>
        <b>T{{$work->truck->key}}</b>
    </li>
    <li>
        <small>{{$work->started_at()??'...'}}</small><br>
        <b>{{$work->loads}}/{{$work->loads_completed}}</b>
    </li>
    <li>
        <small>{{$work->completed_at()??'...'}}</small><br>
        <b>{{$work->amount()}}</b>

    </li>
    
</ul>
