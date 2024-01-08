<div>
    <div class="space-y-2">

        @forelse ($payments as $payment)
            <x-card-item>
                <a href="{{ route('admin.payments.show', ['payment' => $payment]) }}">
                    <ul class="grid grid-cols-1 md:grid-cols-4 items-center">
                        <li>
                            <small>Type</small>
                            <br>
                            <b>{{ $payment->type_payment->name }}</b>
                        </li>
                        @if ($payment->type_payment->key == 'fuel')
                            <li>
                                <small>Attached</small>
                                <br>
                                <b>{{ $payment->fuels()->count() }}</b>
                            </li>
                        @else
                            <li>
                                <small>Company</small>
                                <br>
                                <b>{{ $payment->insurances()->first()->company->name }}</b>
                            </li>
                        @endif
                        <li>
                            <b>{{ $payment->made_at() }}</b>
                        </li>
                        <li>
                            <b>{{ $payment->amount() }}</b>
                        </li>
                    </ul>
                </a>
            </x-card-item>
        @empty
            Non data...
        @endforelse
        {{ $payments->links() }}
    </div>
</div>
