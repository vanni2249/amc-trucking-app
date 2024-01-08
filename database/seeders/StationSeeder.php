<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stations')->insert([
            ['name' => 'Love', 'is_actived' => true, 'is_default' => true],
            ['name' => 'Pilot', 'is_actived' => true, 'is_default' => true],
        ]);
    }
}
