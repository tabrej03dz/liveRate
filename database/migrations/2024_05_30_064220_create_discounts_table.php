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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('percent');
            $table->enum('status', [0, 1])->default(0);
            $table->enum('type', ['0', '1'])->default(0);
            $table->enum('metal', ['gold', 'silver'])->default('gold');
            $table->enum('carat', ['18', '20', '22', '24'])->default('22');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
