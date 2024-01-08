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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->unsignedBigInteger('contract_id');
            $table->date('started_at')->nullable();
            $table->date('completed_at')->nullable();
            $table->date('paid_at')->nullable();
            $table->foreignId('user_id');
            $table->timestamps();

            $table->foreign('contract_id')->references('id')->on('companies');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
