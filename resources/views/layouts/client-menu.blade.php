<x-dropdown-link :href="route('client.dashboard')">
    {{ __('Dashboard') }}
</x-dropdown-link>
<x-dropdown-link :href="route('client.payrolls.index')">
    {{ __('Payrolls') }}
</x-dropdown-link>
<x-dropdown-link :href="route('client.gps.index')">
    {{ __('Gps') }}
</x-dropdown-link>