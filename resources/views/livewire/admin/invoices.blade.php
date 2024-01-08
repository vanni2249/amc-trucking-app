<div>
    <section class="space-y-2">
        @forelse ($invoices as $invoice)
            <x-card-item>
                <a href="{{ route('admin.invoices.show',['invoice' => $invoice->id]) }}">
                    <ul class="grid grid-cols-1 md:grid-cols-4 items-center space-y-2 md:space-y-0">
                        <li>
                            <small>{{$invoice->contract->name}}</small>
                            <br>
                            <b>{{$invoice->reference}}</b>    
                        </li> 
                        <li>
                            <small>
                                {{$invoice->started_at()}}
                            </small>
                            <br>
                            <b>
                                {{$invoice->works()->count()}}

                            </b>
                        </li>
                        <li>
                            <small>
                                {{$invoice->completed_at()}}
                            </small>
                            <br>
                            <b>{{$invoice->week()}}</b>    
                        </li>                 
                        <li>
                            <small>
                                {{$invoice->paid_at()}}
                            </small>
                            <br>
                            <b>
                                {{$invoice->amount()}}    
                            </b>
                        </li>
                    </ul>
                </a>
            </x-card-item>
        @empty
           non data... 
        @endforelse
            {{ $invoices->links() }}
    </section>

</div>
