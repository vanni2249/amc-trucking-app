<div>
    <section class="space-y-2">
        @forelse ($payrolls as $payroll)
            <x-card-item>
                <a href="{{ route('client.payrolls.show',['payroll' => $payroll->id]) }}">
                    <ul class="grid grid-cols-1 md:grid-cols-4 items-center space-y-2 md:space-y-0">
                        <li>
                            <b>{{$payroll->contract->name}}</b>
                            </small>
                        </li> 
                        <li>
                            <small>
                                {{$payroll->started_at()}}
                            </small>
                            <br>
                            <b>
                                {{$payroll->works()->count()}}
                            </b>
                        </li>
                        <li>
                            <small>
                                {{$payroll->completed_at()}}
                            </small> 
                            <br>
                            <b>
                                {{$payroll->week()}}
                            </b>   
                        </li>                  
                        <li>
                            <small>
                                {{$payroll->paid_at()}}
                            </small>
                            <br>
                            <b>
                                {{$payroll->amount()}}
                            </b>
                        </li>
                    </ul>
                </a>
            </x-card-item>
        @empty
           non data... 
        @endforelse

    </section>

</div>
