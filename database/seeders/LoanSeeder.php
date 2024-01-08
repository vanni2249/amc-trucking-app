<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loans')->insert([
            ['company_id' => 2, 'made_at' => '2023-11-26', 'amount' => '250.00', 'user_id' => 1],
            ['company_id' => 2, 'made_at' => '2023-11-29', 'amount' => '250.00', 'user_id' => 1],
        ]);
    }
}
