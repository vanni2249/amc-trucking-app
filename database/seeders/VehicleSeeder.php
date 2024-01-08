<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicles')->insert([
            ['brand' => 'Ford', 'model' => '150', 'key' => '030', 'is_actived' => true],
            ['brand' => 'Toyota', 'model' => 'Camry', 'key' => '010', 'is_actived' => true],
        ]);
    }
}
