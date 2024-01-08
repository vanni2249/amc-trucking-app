<div>
    <div class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div>
                <a href="{{ route('admin.works.index') }}" class="block">
                    <x-widget title="Works" value="{{ $works_sum }}" count="{{ $works_count }}"></x-widget>
                </a>
            </div>
            <div>
                <a href="{{ route('admin.invoices.index') }}" class="block">
                    <x-widget title="Invoices" value="{{ $invoices_works_sum }}"
                        count="{{ $invoices_count }}"></x-widget>
                </a>
            </div>
            <div>
                <a href="{{ route('admin.payrolls.index') }}" class="block">
                    <x-widget title="Payrolls" value="{{ $payrolls_works_sum }}"
                        count="{{ $payrolls_count }}"></x-widget>
                </a>
            </div>
            <div>
                <a href="{{ route('admin.fuels.index') }}" class="block">
                    <x-widget title="Fuels" value="{{ $fuels_sum }}" count="{{ $fuels_count }}"></x-widget>
                </a>
            </div>
        </div>
        <div>
            <x-card>
                @slot('content')
                    <canvas id="myChart"></canvas>
                @endslot
            </x-card>
            {{ Js::from($thisYearWorks) }}
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <x-card class="min-h-full">
                @slot('header')
                    <x-h3>Works</x-h3>
                    <x-link-secondary-button href="{{ route('admin.works.index') }}">View all</x-link-secondary-button>
                @endslot
                @slot('content')
                    <div class="space-y-2">
                        @forelse ($works as $work)
                            <a href="{{ route('admin.works.show', ['work' => $work]) }}" class="block">
                                <x-card-item>
                                    <ul class="flex justify-between items-center">
                                        <li>
                                            <small>
                                                {{ $work->category->name }}
                                            </small>
                                            <br>
                                            <b>
                                                {{ $work->sub_contract->name }}
                                            </b>
                                        </li>
                                        <li class="text-right">
                                            <small>{{ $work->completed_at() }}</small>
                                            <br>
                                            <b>{{ $work->amount() }}</b>
                                        </li>
                                    </ul>
                                </x-card-item>
                            </a>
                        @empty
                            Non data...
                        @endforelse
                    </div>
                @endslot
            </x-card>
            <x-card class="h-full">
                @slot('header')
                    <x-h3>Invoices</x-h3>
                    <x-link-secondary-button href="{{ route('admin.invoices.index') }}">View all</x-link-secondary-button>
                @endslot
                @slot('content')
                    <div class="space-y-2">
                        @forelse ($invoices as $invoice)
                            <a href="{{ route('admin.invoices.show', ['invoice' => $invoice]) }}" class="block">
                                <x-card-item>
                                    <ul class="flex justify-between items-center">
                                        <li>
                                            <small>
                                                {{ $invoice->started_at() }} · {{ $invoice->completed_at() }}
                                            </small>
                                            <br>
                                            <b>
                                                {{ $invoice->contract->name }}
                                            </b>
                                        </li>
                                        <li class="text-right">
                                            <small>{{ $invoice->paid_at() }}</small>
                                            <br>
                                            <b>{{ $invoice->amount() }}</b>
                                        </li>
                                    </ul>
                                </x-card-item>
                            </a>
                        @empty
                            Non data...
                        @endforelse
                    </div>
                @endslot
            </x-card>
            <x-card>
                @slot('header')
                    <x-h3>Payrolls</x-h3>
                    <x-link-secondary-button href="{{ route('admin.payrolls.index') }}">View all</x-link-secondary-button>
                @endslot
                @slot('content')
                    <div class="space-y-2">
                        @forelse ($payrolls as $payroll)
                            <a href="{{ route('admin.payrolls.show', ['payroll' => $payroll]) }}" class="block">
                                <x-card-item>
                                    <ul class="flex justify-between items-center">
                                        <li>
                                            <small>
                                                {{ $invoice->started_at() }} · {{ $invoice->completed_at() }}
                                            </small>
                                            <br>
                                            <b>
                                                {{ $payroll->contract->name }}
                                            </b>
                                        </li>
                                        <li class="text-right">
                                            <small>{{ $payroll->paid_at() }}</small>
                                            <br>
                                            <b>{{ $payroll->amount_works() }}</b>
                                        </li>
                                    </ul>
                                </x-card-item>
                            </a>
                        @empty
                            Non data...
                        @endforelse
                    </div>
                @endslot
            </x-card>
            <x-card>
                @slot('header')
                    <x-h3>Fuels</x-h3>
                    <x-link-secondary-button href="{{ route('admin.fuels.index') }}">View all</x-link-secondary-button>
                @endslot
                @slot('content')
                    <div class="space-y-2">
                        @forelse ($fuels as $fuel)
                            <a href="{{ route('admin.fuels.show', ['fuel' => $fuel]) }}" class="block">
                                <x-card-item>
                                    <ul class="flex justify-between items-center">
                                        <li>
                                            <small>{{ $fuel->fuel_type->name }}</small>
                                            <br>
                                            <b>{{ $fuel->company->name }}</b>
                                        </li>
                                        <li class="text-right">
                                            <small>{{ $fuel->made_at() }}</small>
                                            <br>
                                            <b>{{ $fuel->amount() }}</b>
                                        </li>
                                    </ul>
                                </x-card-item>
                            </a>
                        @empty
                            Non data...
                        @endforelse
                    </div>
                @endslot
            </x-card>
        </div>
    </div>
</div>
@push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct',
                        'Nov', 'Dec'
                    ],
                    datasets: [{
                            label: 'Last year',
                            data: {{ Js::from($thisYearWorks) }},
                            borderWidth: 1
                        },
                        {
                            label: 'This year',
                            data: [12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3],
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                }
            });
        </script>
    @endpush
