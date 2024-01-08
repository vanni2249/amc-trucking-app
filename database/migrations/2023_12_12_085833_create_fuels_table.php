<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fuels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fuel_type_id'); //['diesel','gas','other']
            $table->foreignId('state_id'); //['Texas','Lousianna','etc']
            $table->foreignId('station_id');//['Love']
            $table->foreignId('company_id');//['AFC Solution']
            $table->foreignId('driver_id');//['Angel...']
            $table->foreignId('truck_id')->nullable();//['101']
            $table->foreignId('vehicle_id')->nullable();//['010']
            $table->foreignId('card_id')->nullable();//['comdata','love']
            $table->foreignId('fuel_unit_id')->nullable();//['gallon','liter']
            $table->float('units', 8, 2)->nullable();//['25.56']
            $table->float('price_unit', 8, 2)->nullable();//['3.52']
            $table->float('discount', 8, 2)->nullable();//['30.56']
            $table->float('amount', 8, 2)->nullable();//[30.56]
            $table->date('made_at');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuels');
    }
};
