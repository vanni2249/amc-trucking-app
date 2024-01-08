<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('invoices')->insert([
            ['reference' => '123456789', 'contract_id' => 1, 'started_at' => '2023-12-10', 'completed_at' => '2023-12-16', 'paid_at' => '2023-12-22', 'user_id' => 1]
        ]);
    }
}
