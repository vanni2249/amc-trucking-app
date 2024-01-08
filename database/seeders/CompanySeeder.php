<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            ['name' => 'Amazon', 'category_id' => 7, 'user_id' => NULL],
            ['name' => 'AMC Trucking', 'category_id' => 8, 'user_id' => 1],
            ['name' => 'AFC Solutions', 'category_id' => 8, 'user_id' => 2],
            ['name' => 'GCB Solutions', 'category_id' => 8, 'user_id' => 3],
            ['name' => 'Progressive', 'category_id' => 9, 'user_id' => NULL],
            ['name' => 'Keep Trucking', 'category_id' => 23, 'user_id' => NULL],
        ]);

    }
}
