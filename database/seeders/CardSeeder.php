<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cards')->insert([
            ['name' => 'AMC Trucking Comdata', 'company_id' => 2, 'user_id' => 1],
            ['name' => 'AFC Solutions Comdata', 'company_id' => 3, 'user_id' => 1],
            ['name' => 'GCB Solutions Comdata', 'company_id' => 4, 'user_id' => 1],
        ]);
    }
}
