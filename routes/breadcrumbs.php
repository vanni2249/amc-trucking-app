<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\Card;
use App\Models\Category;
use App\Models\Company;
use App\Models\Driver;
use App\Models\Fuel;
use App\Models\Gps;
use App\Models\Insurance;
use App\Models\Invoice;
use App\Models\Loan;
use App\Models\Payment;
use App\Models\Payroll;
use App\Models\State;
use App\Models\Station;
use App\Models\Truck;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Work;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Work
Breadcrumbs::for('work', function (BreadcrumbTrail $trail) {
    $trail->push('Works', route('admin.works.index'));
});

// Work > [work]
Breadcrumbs::for('works', function (BreadcrumbTrail $trail, Work $work) {
    $trail->parent('work');
    $trail->push($work->sub_contract->name, route('admin.works.show', $work));
});

// Invoice
Breadcrumbs::for('invoices', function (BreadcrumbTrail $trail) {
    $trail->push('Invoices', route('admin.invoices.index'));
});

// Invoice > [invoice]
Breadcrumbs::for('invoice', function (BreadcrumbTrail $trail, Invoice $invoice) {
    $trail->parent('invoices');
    $trail->push($invoice->started_at() . ' · ' . $invoice->completed_at(), route('admin.invoices.show', $invoice));
});

// Invoice > [invoice] > works
Breadcrumbs::for('invoice.works', function (BreadcrumbTrail $trail, Invoice $invoice) {
    $trail->parent('invoice',$invoice);
    $trail->push('Works', route('admin.invoices.works.index', $invoice));
});

// Payrolls
Breadcrumbs::for('payrolls', function (BreadcrumbTrail $trail) {
    $trail->push('Payrolls', route('admin.payrolls.index'));
});

// Payrolls > [payroll]
Breadcrumbs::for('payroll', function (BreadcrumbTrail $trail, Payroll $payroll) {
    $trail->parent('payrolls');
    $trail->push($payroll->contract->name, route('admin.payrolls.show', $payroll));
});

// Payrolls > [payroll] > works
Breadcrumbs::for('payroll.works', function (BreadcrumbTrail $trail, Payroll $payroll) {
    $trail->parent('payroll', $payroll);
    $trail->push('Works', route('admin.payrolls.works.index', $payroll));
});

// Payrolls > [payroll] > deductions
Breadcrumbs::for('payroll.deductions', function (BreadcrumbTrail $trail, Payroll $payroll) {
    $trail->parent('payroll', $payroll);
    $trail->push('Deductions', route('admin.payrolls.deductions.index', $payroll));
});

// Payrolls > [payroll] > fuels
Breadcrumbs::for('payroll.fuels', function (BreadcrumbTrail $trail, Payroll $payroll) {
    $trail->parent('payroll', $payroll);
    $trail->push('Fuels', route('admin.payrolls.fuels.index', $payroll));
});


// Fuel
Breadcrumbs::for('fuel', function (BreadcrumbTrail $trail) {
    $trail->push('Fuels', route('admin.fuels.index'));
});

// Fuel > [fuel]
Breadcrumbs::for('fuels', function (BreadcrumbTrail $trail, Fuel $fuel) {
    $trail->parent('fuel');
    $trail->push($fuel->fuel_type->name, route('admin.fuels.show', $fuel));
});

// Insurances
Breadcrumbs::for('insurances', function (BreadcrumbTrail $trail) {
    $trail->push('Insurances', route('admin.insurances.index'));
});

// Insurances > [Insurance]
Breadcrumbs::for('insurance', function (BreadcrumbTrail $trail, Insurance $insurance) {
    $trail->parent('insurances');
    $trail->push($insurance->started_at() . ' to ' . $insurance->completed_at(), route('admin.insurances.show', $insurance));
});

// Insurances > [Insurance] > companies
Breadcrumbs::for('insurance.companies', function (BreadcrumbTrail $trail, Insurance $insurance) {
    $trail->parent('insurance', $insurance);
    $trail->push('Companies', route('admin.insurances.companies.index', $insurance));
});

// Insurances > [Insurance] > Companies > [Company]
Breadcrumbs::for('insurance.companies.show', function (BreadcrumbTrail $trail, Insurance $insurance, Company $company) {
    $trail->parent('insurance.companies', $insurance);
    $trail->push($company->name, route('admin.insurances.companies.show', ['insurance' => $insurance, 'company' => $company]));
});

// Insurances > [Insurance] > payments
Breadcrumbs::for('insurance.payments', function (BreadcrumbTrail $trail, Insurance $insurance) {
    $trail->parent('insurance', $insurance);
    $trail->push('Payments', route('admin.insurances.payments.index', $insurance));
});

// Loan
Breadcrumbs::for('loan', function (BreadcrumbTrail $trail) {
    $trail->push('Loans', route('admin.loans.index'));
});

// Loan > [loan]
Breadcrumbs::for('loans', function (BreadcrumbTrail $trail, Loan $loan) {
    $trail->parent('loan');
    $trail->push($loan->company->name, route('admin.loans.show', $loan));
});

// Gps
Breadcrumbs::for('gps', function (BreadcrumbTrail $trail) {
    $trail->push('Gps', route('admin.gps.index'));
});

// Gps > [gps]
Breadcrumbs::for('gpses', function (BreadcrumbTrail $trail, Gps $gps) {
    $trail->parent('gps');
    $trail->push($gps->started_at() . ' · ' . $gps->completed_at(), route('admin.gps.show', $gps));
});

// Gps > [gps] > companies
Breadcrumbs::for('gps.companies', function (BreadcrumbTrail $trail, Gps $gps) {
    $trail->parent('gpses',$gps);
    $trail->push('Companies', route('admin.gps.companies.index', $gps));
});

// Gps > [gps] > companies > [company]
Breadcrumbs::for('gps.companies.company', function (BreadcrumbTrail $trail, Gps $gps, Company $company) {
    $trail->parent('gps.companies',$gps);
    $trail->push($company->name, route('admin.gps.companies.show',['gps' => $gps, 'company' => $company]));
});

// Gps > [gps] > companies > [company] > deductios
Breadcrumbs::for('gps.companies.company.deductions', function (BreadcrumbTrail $trail, Gps $gps, Company $company) {
    $trail->parent('gps.companies.company',$gps, $company);
    $trail->push('Deductions', route('admin.gps.companies.deductions.index',['gps' => $gps, 'company' => $company]));
});

// Payments
Breadcrumbs::for('payments', function (BreadcrumbTrail $trail) {
    $trail->push('Payments', route('admin.payments.index'));
});

// Payments > [payment]
Breadcrumbs::for('payment', function (BreadcrumbTrail $trail, Payment $payment) {
    $trail->parent('payments');
    $trail->push($payment->type_payment->name, route('admin.payments.show', $payment));
});

// Payments > [payment] > fuels
Breadcrumbs::for('payment.fuels', function (BreadcrumbTrail $trail, Payment $payment) {
    $trail->parent('payment',$payment);
    $trail->push('Attached and balance', route('admin.payments.fuels.index', $payment));
});

// Companies
Breadcrumbs::for('companies', function (BreadcrumbTrail $trail) {
    $trail->push('Companies', route('admin.companies.index'));
});

// Companies > [company]
Breadcrumbs::for('company', function (BreadcrumbTrail $trail, Company $company) {
    $trail->parent('companies');
    $trail->push($company->name, route('admin.companies.show', $company));
});

// Drivers
Breadcrumbs::for('drivers', function (BreadcrumbTrail $trail) {
    $trail->push('Drivers', route('admin.drivers.index'));
});

// Drivers > [driver]
Breadcrumbs::for('driver', function (BreadcrumbTrail $trail, Driver $driver) {
    $trail->parent('drivers');
    $trail->push($driver->name, route('admin.drivers.show', $driver));
});

// Cards
Breadcrumbs::for('cards', function (BreadcrumbTrail $trail) {
    $trail->push('Cards', route('admin.cards.index'));
});

// Cards > [card]
Breadcrumbs::for('card', function (BreadcrumbTrail $trail, Card $card) {
    $trail->parent('cards');
    $trail->push($card->name, route('admin.cards.show', $card));
});

// Trucks
Breadcrumbs::for('trucks', function (BreadcrumbTrail $trail) {
    $trail->push('Trucks', route('admin.trucks.index'));
});

// Trucks > [truck]
Breadcrumbs::for('truck', function (BreadcrumbTrail $trail, Truck $truck) {
    $trail->parent('trucks');
    $trail->push($truck->key, route('admin.trucks.show', $truck));
});

// Vehicles
Breadcrumbs::for('vehicles', function (BreadcrumbTrail $trail) {
    $trail->push('Vehicles', route('admin.vehicles.index'));
});

// Vehicles > [vehicle]
Breadcrumbs::for('vehicle', function (BreadcrumbTrail $trail, Vehicle $vehicle) {
    $trail->parent('vehicles');
    $trail->push($vehicle->key, route('admin.vehicles.show', $vehicle));
});

// Station
Breadcrumbs::for('stations', function (BreadcrumbTrail $trail) {
    $trail->push('Stations', route('admin.stations.index'));
});

// Stations > [Station]
Breadcrumbs::for('station', function (BreadcrumbTrail $trail, Station $station) {
    $trail->parent('stations');
    $trail->push($station->name, route('admin.stations.show', $station));
});

// States
Breadcrumbs::for('states', function (BreadcrumbTrail $trail) {
    $trail->push('States', route('admin.states.index'));
});

// States > [State]
Breadcrumbs::for('state', function (BreadcrumbTrail $trail, State $state) {
    $trail->parent('states');
    $trail->push($state->name, route('admin.states.show', $state));
});

// Categories
Breadcrumbs::for('categories', function (BreadcrumbTrail $trail) {
    $trail->push('Categories', route('admin.categories.index'));
});

// Categories > [Category]
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, Category $category) {
    $trail->parent('categories');
    $trail->push($category->name, route('admin.categories.show', $category));
});

// Users
Breadcrumbs::for('users', function (BreadcrumbTrail $trail) {
    $trail->push('Users', route('admin.users.index'));
});

// Users > [user]
Breadcrumbs::for('user', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('users');
    $trail->push($user->name, route('admin.users.show', $user));
});
