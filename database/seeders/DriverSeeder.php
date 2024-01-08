<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('drivers')->insert([
            ['name' => 'Angel M Colon Barrios', 'email' => 'colon.angel1@gmail.com', 'is_actived' => true],
            ['name' => 'Angel F Colon Barrios', 'email' => 'fabian4126@gmail.com', 'is_actived' => true],
            ['name' => 'Geovanni Colon Barrios', 'email' => 'vanni2249@gmail.com', 'is_actived' => true],
        ]);
    }
}
