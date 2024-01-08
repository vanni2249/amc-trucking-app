<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('states')->insert([
          ['name' => 'Lousianna', 'is_actived' => true, 'is_default' => true],
          ['name' => 'Texas', 'is_actived' => true, 'is_default' => true],
          ['name' => 'Oklahoma', 'is_actived' => true, 'is_default' => true],  
        ]);
    }
}
