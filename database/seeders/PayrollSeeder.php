<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PayrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payrolls')->insert([
            ['contract_id' => 2, 'started_at' => '2023-12-10', 'completed_at' => '2023-12-16', 'paid_at' => '2023-12-22', 'view_at' => '2023-12-22 00:00:00', 'user_id' => 1]
        ]);
    }
}
