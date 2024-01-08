<div>
    <section class="py-4 space-y-2">
        @forelse ($insurance->payments()->get() as $payment)
            <x-card-item>
                <a href="{{ route('admin.insurances.payments.show',['insurance' => $insurance->id, 'payment' => $payment->id])}}" class="block grow">
                    <ul class="grow grid grid-rows-1 md:grid-cols-3 items-center">
                        <li>
                            <small>Amount</small>
                            <br>    
                            <b>{{$payment->amount()}}</b>
                        </li>
                        <li>
                            <b>{{$payment->made_at()}}</b>
                        </li>
                        <li>
                            <b>{{$payment->user->name}}</b>
                        </li>
                    </ul>
                </a>
            </x-card-item>
        @empty
            non data...
        @endforelse
    </section>
</div>
