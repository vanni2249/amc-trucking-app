<?php

use App\Models\Gps;
use App\Models\Payroll;
use Illuminate\Support\Facades\Route;
   
Route::prefix('client')->name('client.')->middleware(['auth'])->group(function(){
    Route::get('/dashboard', function(){
        return view('client.dashboard');
    })->name('dashboard');

    Route::get('/payrolls', function(){
        return view('client.payrolls.index');
    })->name('payrolls.index');

    Route::get('/payrolls/{payroll}', function (Payroll $payroll){
        return view('client.payrolls.show', compact('payroll'));
    })->name('payrolls.show');
    
    Route::get('/gps', function(){
        return view('client.gps.index');
    })->name('gps.index');

    Route::get('/gps/{gps}', function (Gps $gps){
        return view('client.gps.show', compact('gps'));
    })->name('gps.show');
});