<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TruckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trucks')->insert([
          ['brand' => 'Freighliner', 'model' => 'Cascadia', 'vin' => '123456', 'key' => '101', 'lic' => '123','is_actived' => true],  
          ['brand' => 'Freighliner', 'model' => 'Columbia', 'vin' => '123456', 'key' => '102', 'lic' => '123','is_actived' => true],  
          ['brand' => 'Freighliner', 'model' => 'Century', 'vin' => '123456', 'key' => '105', 'lic' => '123','is_actived' => false],  
          ['brand' => 'Freighliner', 'model' => 'Cascadia', 'vin' => '123456', 'key' => '1004', 'lic' => '123','is_actived' => true],  
        ]);
    }
}
