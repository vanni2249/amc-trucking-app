<x-responsive-nav-link :href="route('admin.dashboard')">
    {{ __('Dashboard') }}
</x-responsive-nav-link>

<x-responsive-nav-link :href="route('admin.works.index')">
    {{__('Works')}}
</x-responsive-nav-link>

<x-responsive-nav-link :href="route('admin.invoices.index')">
    {{__('Incoices')}}
</x-responsive-nav-link>

<x-responsive-nav-link :href="route('admin.payrolls.index')">
    {{__('Payrolls')}}
</x-responsive-nav-link>

<x-responsive-nav-link :href="route('admin.fuels.index')">
    {{__('Fuel')}}
</x-responsive-nav-link>

<x-responsive-nav-link :href="route('admin.insurances.index')">
    {{__('Insurances')}}
</x-responsive-nav-link>

<x-responsive-nav-link :href="route('admin.loans.index')">
    {{__('Loans')}}
</x-responsive-nav-link>

<x-responsive-nav-link :href="route('admin.gps.index')">
    {{__('Gps')}}
</x-responsive-nav-link>

<x-responsive-nav-link :href="route('admin.payments.index')">
    {{__('Payments')}}
</x-responsive-nav-link>

<x-responsive-nav-link :href="route('admin.companies.index')">
    {{__('Companies')}}
</x-responsive-nav-link>

<x-dropdown-link :href="route('admin.drivers.index')">
    {{ __('Drivers') }}
</x-dropdown-link>

<x-dropdown-link :href="route('admin.cards.index')">
    {{ __('Cards') }}
</x-dropdown-link>

<x-dropdown-link :href="route('admin.trucks.index')">
    {{ __('Trucks') }}
</x-dropdown-link>

<x-dropdown-link :href="route('admin.vehicles.index')">
    {{ __('Vehicles') }}
</x-dropdown-link>

<x-dropdown-link :href="route('admin.stations.index')">
    {{ __('Stations') }}
</x-dropdown-link>

<x-dropdown-link :href="route('admin.states.index')">
    {{ __('States') }}
</x-dropdown-link>

<x-dropdown-link :href="route('admin.categories.index')">
    {{ __('Categories') }}
</x-dropdown-link>

<x-responsive-nav-link :href="route('admin.users.index')">
    {{ __('Users') }}
</x-responsive-nav-link>
