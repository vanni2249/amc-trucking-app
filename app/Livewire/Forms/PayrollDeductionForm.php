<?php

namespace App\Livewire\Forms;

use App\Models\Deduction;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PayrollDeductionForm extends Form
{
    public ?Deduction $deduction;

    public $payroll;

    #[Validate('required')]
    public $category_id;

    public $category;

    #[Validate('required_if:category,insurance')]
    public $insurance_id;

    #[Validate('required_if:category,loan')]
    public $loan_id;

    #[Validate('required_if:category,gps')]
    public $gps_id;

    #[Validate('required')]
    public $amount;

    public $comment;

    public $user_id;

    public function setDeduction($deduction)
    {
        $this->deduction = $deduction;
        $this->category_id = $deduction->category_id;
        $this->insurance_id = $deduction->insurance_id;
        $this->loan_id = $deduction->loan_id;
        $this->gps_id = $deduction->gps_id;
        $this->amount = $deduction->amount;
        $this->comment = $deduction->comment;
        $this->user_id = $deduction->user_id;
    }

    public function store()
    {
        $this->validate();

        $deduction = $this->payroll->deductions()->create($this->all());

        $this->reset('category_id','insurance_id','loan_id','gps_id','amount','comment');
    }

    public function update()
    {
        $this->validate();

        $this->deduction->update($this->all());
    }
}
