<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Deduction extends Model
{
    use HasFactory, ModelTrait;

    protected $fillable = [
        'payroll_id',
        'category_id',
        'insurance_id',
        'gps_id',
        'loan_id',
        'amount',
        'comment',
        'user_id'
    ];

    public function payroll()
    {
        return $this->belongsTo(Payroll::class);
    }

    public function insurance()
    {
        return $this->belongsTo(Insurance::class);
    }
    
    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

    public function fee()
    {
        return $this->payroll->deductions()->where('category_id',24)->whereYear('made_at',now('Y'))->get();
    }
    
    public function gps()
    {
        return $this->belongsTo(Gps::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function insurance_principal()
    {
        return Number::currency($this->insurance->amount);
    }

    public function insurance_accumulated()
    {
        return Number::currency($this->insurance->deductions()->sum('amount'));
    }

    public function insurance_balance()
    {
        return Number::currency($this->insurance->amount - $this->insurance->deductions()->sum('amount'));
    }

    public function gps_principal()
    {
        return Number::currency($this->gps->amount);
    }

    public function gps_accumulated()
    {
        return Number::currency($this->gps->deductions()->where('id','<=',$this->id)->sum('amount'));
    }

    public function gps_balance()
    {
        return Number::currency($this->gps->amount - $this->gps->deductions()->where('id','<=',$this->id)->sum('amount'));
    }

    public function loan_principal()
    {
        return Number::currency($this->loan->amount);
    }

    public function loan_accumulated()
    {
        return Number::currency($this->loan->deductions()->sum('amount'));
    }

    public function loan_balance()
    {
        return Number::currency($this->loan->amount - $this->loan->deductions()->sum('amount'));
    }

    public function fee_accumulated_this_year()
    {
        return Number::currency($this->payroll->deductions()->where('id','<=',$this->id)->where('category_id',24)->whereYear('created_at',now('Y'))->sum('amount'));
    }
    
    public function other_accumulated_this_year()
    {
        return Number::currency($this->payroll->deductions()->where('id','<=',$this->id)->where('category_id',25)->whereYear('created_at',now('Y'))->sum('amount'));
    }
}
