<?php

use App\Models\Card;
use App\Models\Category;
use App\Models\Company;
use App\Models\Deduction;
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
use Illuminate\Support\Facades\Route;
   
Route::prefix('admin')->name('admin.')->middleware(['auth','role:admin'])->group(function(){
    Route::get('/dashboard', function(){
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/works', function(){
        return view('admin.works.index');
    })->name('works.index');

    Route::get('/works/{work}', function (Work $work){
        return view('admin.works.show', compact('work'));
    })->name('works.show');

    Route::get('/invoices', function(){
        return view('admin.invoices.index');
    })->name('invoices.index');

    Route::get('/invoices/{invoice}', function (Invoice $invoice){
        return view('admin.invoices.show', compact('invoice'));
    })->name('invoices.show');
    
    Route::get('/invoices/{invoice}/works', function (Invoice $invoice){
        return view('admin.invoices.works.index', compact('invoice'));
    })->name('invoices.works.index');

    Route::get('/payrolls', function(){
        return view('admin.payrolls.index');
    })->name('payrolls.index');

    Route::get('/payrolls/{payroll}', function (Payroll $payroll){
        return view('admin.payrolls.show', compact('payroll'));
    })->name('payrolls.show');

    Route::get('/payrolls/{payroll}/works', function(Payroll $payroll){
        return view('admin.payrolls.works.index',compact('payroll'));
    })->name('payrolls.works.index');
    
    Route::get('/payrolls/{payroll}/works/{work}', function(Payroll $payroll, Work $work){
        return view('admin.payrolls.works.show',compact('payroll','work'));
    })->name('payrolls.works.show');

    Route::get('/payrolls/{payroll}/deductions', function(Payroll $payroll){
        return view('admin.payrolls.deductions.index',compact('payroll'));
    })->name('payrolls.deductions.index');

    Route::get('/payrolls/{payroll}/deductions/{deduction}', function(Payroll $payroll, Deduction $deduction){
        return view('admin.payrolls.deductions.show',compact('payroll','deduction'));
    })->name('payrolls.deductions.show');

    Route::get('/payrolls/{payroll}/fuels', function(Payroll $payroll){
        return view('admin.payrolls.fuels.index',compact('payroll'));
    })->name('payrolls.fuels.index');

    Route::get('/payrolls/{payroll}/fuels/{fuel}', function(Payroll $payroll, Fuel $fuel){
        return view('admin.payrolls.fuels.show',compact('payroll','fuel'));
    })->name('payrolls.fuels.show');

    Route::get('/fuels', function(){
        return view('admin.fuels.index');
    })->name('fuels.index');

    Route::get('/fuels/{fuel}', function (Fuel $fuel){
        return view('admin.fuels.show', compact('fuel'));
    })->name('fuels.show');

    Route::get('/insurances', function(){
        return view('admin.insurances.index');
    })->name('insurances.index');

    Route::get('/insurances/{insurance}', function (Insurance $insurance){
        return view('admin.insurances.show', compact('insurance'));
    })->name('insurances.show');

    Route::get('/loans', function(){
        return view('admin.loans.index');
    })->name('loans.index');

    Route::get('/loans/{loan}', function (Loan $loan){
        return view('admin.loans.show', compact('loan'));
    })->name('loans.show');

    Route::get('/gps', function(){
        return view('admin.gps.index');
    })->name('gps.index');

    Route::get('/gps/{gps}', function (Gps $gps){
        return view('admin.gps.show', compact('gps'));
    })->name('gps.show');
    
    Route::get('/gps/{gps}/companies', function (Gps $gps){
        return view('admin.gps.companies.index', compact('gps'));
    })->name('gps.companies.index');
    
    Route::get('/gps/{gps}/companies/{company}', function (Gps $gps, Company $company){
        return view('admin.gps.companies.show', compact('gps','company'));
    })->name('gps.companies.show');
    
    Route::get('/gps/{gps}/companies/{company}/deductions', function (Gps $gps, Company $company){
        return view('admin.gps.companies.deductions.index', compact('gps','company'));
    })->name('gps.companies.deductions.index');
    
    Route::get('/insurances/{insurance}/companies', function (Insurance $insurance){
        return view('admin.insurances.companies.index', compact('insurance'));
    })->name('insurances.companies.index');

    Route::get('/insurances/{insurance}/companies/{company}', function (Insurance $insurance, Company $company){
        return view('admin.insurances.companies.show', compact('insurance','company'));
    })->name('insurances.companies.show');

    Route::get('/insurances/{insurance}/payments', function (Insurance $insurance, Payment $payment){
        return view('admin.insurances.payments.index', compact('insurance','payment'));
    })->name('insurances.payments.index');
    
    Route::get('/insurances/{insurance}/payments/{payment}', function (Insurance $insurance, Payment $payment){
        return view('admin.insurances.payments.show', compact('insurance','payment'));
    })->name('insurances.payments.show');

    Route::get('/payments', function(){
        return view('admin.payments.index');
    })->name('payments.index');

    Route::get('/payments/{payment}', function (Payment $payment){
        return view('admin.payments.show', compact('payment'));
    })->name('payments.show');

    Route::get('/payments/{payment}/fuels', function(Payment $payment){
        return view('admin.payments.fuels.index', compact('payment'));
    })->name('payments.fuels.index');

    Route::get('/companies', function(){
        return view('admin.companies.index');
    })->name('companies.index');

    Route::get('/companies/{company}', function (Company $company){
        return view('admin.companies.show', compact('company'));
    })->name('companies.show');

    Route::get('/drivers', function(){
        return view('admin.drivers.index');
    })->name('drivers.index');

    Route::get('/drivers/{driver}', function (Driver $driver){
        return view('admin.drivers.show', compact('driver'));
    })->name('drivers.show');

    Route::get('/cards', function(){
        return view('admin.cards.index');
    })->name('cards.index');

    Route::get('/cards/{card}', function (Card $card){
        return view('admin.cards.show', compact('card'));
    })->name('cards.show');

    Route::get('/trucks', function(){
        return view('admin.trucks.index');
    })->name('trucks.index');

    Route::get('/trucks/{truck}', function (Truck $truck){
        return view('admin.trucks.show', compact('truck'));
    })->name('trucks.show');

    Route::get('/vehicles', function(){
        return view('admin.vehicles.index');
    })->name('vehicles.index');

    Route::get('/vehicles/{vehicle}', function (Vehicle $vehicle){
        return view('admin.vehicles.show', compact('vehicle'));
    })->name('vehicles.show');
    
    Route::get('/stations', function(){
        return view('admin.stations.index');
    })->name('stations.index');

    Route::get('/stations/{station}', function (Station $station){
        return view('admin.stations.show', compact('station'));
    })->name('stations.show');

    Route::get('/states', function(){
        return view('admin.states.index');
    })->name('states.index');

    Route::get('/states/{state}', function (State $state){
        return view('admin.states.show', compact('state'));
    })->name('states.show');

    Route::get('/categories', function(){
        return view('admin.categories.index');
    })->name('categories.index');

    Route::get('/categories/{category}', function(Category $category){
        return view('admin.categories.show',['category' => $category]);
    })->name('categories.show');

    Route::get('/users', function(){
        return view('admin.users.index');
    })->name('users.index');

    Route::get('/users/{user}', function(User $user){
        return view('admin.users.show',['user' => $user]);
    })->name('users.show');


});