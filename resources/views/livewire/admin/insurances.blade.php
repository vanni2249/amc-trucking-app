<div>
    <section class="space-y-2">
        @forelse ($insurances as $insurance)
            <x-card-item>
                <a href="{{ route('admin.insurances.show', ['insurance' => $insurance->id]) }}">
                    <ul class="grid grid-cols-1 md:grid-cols-5 items-center space-y-2 md:space-y-0">
                        <li>
                            <small>{{ $insurance->company->name }}</small>
                            <br>
                            <b>{{ $insurance->reference }}</b>
                        </li>
                        <li>
                            <small>
                                {{ $insurance->started_at() }}
                            </small>
                            <br>
                            <b>
                                {{ $insurance->gross() ?? '...' }}
                            </b>
                        </li>
                        <li>
                            <small>
                                {{ $insurance->completed_at() }}
                            </small>
                            <br>
                            <b>
                                {{ $insurance->sum_payments() ?? '...' }}
                            </b>
                        </li>
                        <li>
                            <b>
                                {{ $insurance->sum_deductions() }}
                            </b>
                        </li>
                        <li>
                            <b>
                                {{ $insurance->balance_company() }}
                            </b>
                        </li>
                    </ul>
                </a>
            </x-card-item>
        @empty
            non data...
        @endforelse
        {{ $insurances->links() }}
    </section>

</div>
