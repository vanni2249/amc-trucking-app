<div>
    <div class="py-4 space-y-2">
        @forelse ($deductions as $deduction)
            <x-card-item>
                <a href="{{ route('admin.payrolls.deductions.show', ['payroll' => $payroll->id, 'deduction' => $deduction->id]) }}"
                    class="block">
                    <ul class="grid grid-cols-1 md:grid-cols-4 items-center">
                        <li>
                            <small>{{ $deduction->category->name }}</small>
                            <br>
                            <b>{{ $deduction->amount() }}</b>
                        </li>
                        @switch($deduction->category->key)
                        @case('insurance')
                                <li>
                                    <small>Principal</small>
                                    <br>
                                    <b>{{ $deduction->insurance_principal() }}</b>
                                </li>
                                <li>
                                    <small>Accumulated</small>
                                    <br>
                                    <b>{{ $deduction->insurance_accumulated() }}</b>
                                </li>
                                <li>
                                    <small>Balance</small>
                                    <br>
                                    <b>{{ $deduction->insurance_balance() }}</b>
                                </li>
                            @break
                            @case('gps')
                                <li>
                                    <small>Principal</small>
                                    <br>
                                    <b>{{ $deduction->gps_principal() }}</b>
                                </li>
                                <li>
                                    <small>Accumulated</small>
                                    <br>
                                    <b>{{ $deduction->gps_accumulated() }}</b>
                                </li>
                                <li>
                                    <small>Balance</small>
                                    <br>
                                    <b>{{ $deduction->gps_balance() }}</b>
                                </li>
                            @break
                            @case('loan')
                                <li>
                                    <small>Principal</small>
                                    <br>
                                    <b>{{ $deduction->loan_principal() }}</b>
                                </li>
                                <li>
                                    <small>Acumulated</small>
                                    <br>
                                    <b>{{ $deduction->loan_accumulated() }}</b>
                                </li>
                                <li>
                                    <small>Balance</small>
                                    <br>
                                    <b>{{ $deduction->loan_balance() }}</b>
                                </li>
                            @break
                            @case('fee')
                                <li>
                                    <small>Accumulated this year</small>
                                    <br>
                                    <b>{{ $deduction->fee_accumulated_this_year() }}</b>
                                </li>
                            @break
                            @case('other')
                                <li>
                                    <small>Accumulated this year</small>
                                    <br>
                                    <b>{{ $deduction->other_accumulated_this_year() }}</b>
                                </li>
                                <li>
                                    <small>Comment</small>
                                    <br>
                                    <b class="line-clamp-1">
                                        {{ $deduction->comment??'...' }}
                                    </b>
                                </li>
                            @break
                            @default
                        @endswitch
                    </ul>
                </a>
            </x-card-item>
            @empty
                non data...
            @endforelse
        </div>
    </div>
