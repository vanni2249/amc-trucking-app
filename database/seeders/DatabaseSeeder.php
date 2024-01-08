<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Payroll;
use App\Models\Work;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            CategorySeeder::class,
            CompanySeeder::class,
            DriverSeeder::class,
            TruckSeeder::class,
            VehicleSeeder::class,
            StateSeeder::class,
            StationSeeder::class,
            CardSeeder::class,
            InvoiceSeeder::class,
            PayrollSeeder::class,
            LoanSeeder::class,
            InsuranceSeeder::class,
        ]);
        
        Work::factory()->count(420)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
