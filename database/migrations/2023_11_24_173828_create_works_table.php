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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('reference');
            $table->unsignedBigInteger('contract_id');
            $table->unsignedBigInteger('sub_contract_id');
            $table->foreignId('driver_id');
            $table->foreignId('truck_id');
            $table->timestamp('started_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->integer('loads')->nullable();
            $table->integer('loads_completed')->nullable();
            $table->float('price_mile', 8, 2)->nullable();
            $table->float('miles', 4, 1)->nullable();
            $table->float('amount', 8, 2)->nullable();
            $table->foreignId('user_id');
            $table->timestamps();

            $table->foreign('contract_id')->references('id')->on('companies');
            $table->foreign('sub_contract_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
