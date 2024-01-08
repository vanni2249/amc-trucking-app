<x-app-layout>
    @slot('header')
        <x-h2>{{ __('Dashboard') }}</x-h2>
        @livewire('admin.select-year')
    @endslot
    @slot('main')
        @livewire('admin.dashboard')
    @endslot
    {{-- @push('scripts')
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
                        // {
                        //     label: 'This year',
                        //     data: [12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3],
                        //     borderWidth: 1
                        // }
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
    @endpush --}}
</x-app-layout>
