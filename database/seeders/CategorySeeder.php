<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Companies', 'key' => 'companies'],//1
            ['name' => 'Works', 'key' => 'works'],//2
            ['name' => 'Deductions', 'key' => 'deductions'],//3
            ['name' => 'Fuel types', 'key' => 'fuel_types'],//4
            ['name' => 'Fuel units', 'key' => 'fuel_units'],//5
            ['name' => 'Payments', 'key' => 'payments'],//6
        ]);
        
        DB::table('categories')->insert([
            ['name' => 'Contract', 'category_id' => 1, 'key' => 'contract'],//7
            ['name' => 'Sub-contract', 'category_id' => 1, 'key' => 'sub_contract'],//8
            ['name' => 'Insurance', 'category_id' => 1, 'key' => 'insurance'],//9
        ]);
        
        DB::table('categories')->insert([
            ['name' => 'Trip', 'category_id' => 2, 'key' => 'trip'],//10
            ['name' => 'Block', 'category_id' => 2, 'key' => 'block'],//11
            ['name' => 'Contract', 'category_id' => 2, 'key' => 'contract'],//12
            ['name' => 'Insurance', 'category_id' => 3, 'key' => 'insurance'],//13
            ['name' => 'GPS', 'category_id' => 3, 'key' => 'gps'],//14
            ['name' => 'Loan', 'category_id' => 3, 'key' => 'loan'],//15
            ['name' => 'Diesel', 'category_id' => 4, 'key' => 'diesel'],//16
            ['name' => 'Gas', 'category_id' => 4, 'key' => 'gas'],//17
            ['name' => 'Other', 'category_id' => 4, 'key' => 'other'],//18
            ['name' => 'Gallon', 'category_id' => 5, 'key' => 'gallon'],//19
            ['name' => 'Liter', 'category_id' => 5, 'key' => 'liter'],//20
            ['name' => 'Fuel', 'category_id' => 6, 'key' => 'fuel'],//21
            ['name' => 'Insurance', 'category_id' => 6, 'key' => 'insurance'],//22
        ]);

        DB::table('categories')->insert([
            ['name' => 'Gps', 'category_id' => 1, 'key' => 'gps'],//23
        ]);

        DB::table('categories')->insert([
            ['name' => 'Fee', 'category_id' => 3, 'key' => 'fee'],
            ['name' => 'Other', 'category_id' => 3, 'key' => 'other']
        ]);

    }
}
