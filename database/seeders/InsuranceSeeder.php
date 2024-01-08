<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsuranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('insurances')->insert([
            ['reference' => '123456789', 'company_id' => 5, 'started_at' => '2023-01-01', 'completed_at' => '2023-12-01', 'user_id' => 1],
        ]);

        DB::table('insurances')->insert([
            ['insurance_id' => 1, 'company_id' => 2, 'amount' => 2500.00, 'user_id' => 1],
            ['insurance_id' => 1, 'company_id' => 3, 'amount' => 2500.00, 'user_id' => 1],
            ['insurance_id' => 1, 'company_id' => 4, 'amount' => 2500.00, 'user_id' => 1],
        ]);
    }
}
