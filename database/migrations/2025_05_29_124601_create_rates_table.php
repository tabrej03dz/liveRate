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
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->decimal('24k_gold')->nullable();
            $table->decimal('gold_24k_percent', 5, 2)->nullable();
            $table->decimal('22k_gold')->nullable();
            $table->decimal('gold_22k_percent', 5, 2)->nullable();
            $table->decimal('20k_gold')->nullable();
            $table->decimal('gold_20k_percent', 5, 2)->nullable();
            $table->decimal('18k_gold')->nullable();
            $table->decimal('gold_18k_percent', 5, 2)->nullable();
            $table->decimal('silver')->nullable();
            $table->decimal('silver_percent', 5, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rates');
    }
};
