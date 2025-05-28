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
        Schema::create('silver_metal_prices', function (Blueprint $table) {
            $table->id();
            $table->decimal('ounce_price_usd', 10, 3);
            $table->string('gmt_ounce_price_usd_updated');
            $table->decimal('ounce_price_ask', 10, 3);
            $table->decimal('ounce_price_bid', 10, 3);
            $table->decimal('ounce_price_usd_today_low', 10, 3);
            $table->decimal('ounce_price_usd_today_high', 10, 3);
            $table->decimal('gram_to_ounce_formula', 20, 15);
            $table->decimal('gram_in_usd', 15, 6);
            $table->decimal('silver_gram_in_usd', 15, 6);
            $table->decimal('silver_ounce_price_ask_usd', 10, 3);
            $table->decimal('silver_ounce_price_bid_usd', 10, 3);
            $table->decimal('silver_ounce_price_usd_today_low_usd', 10, 3);
            $table->decimal('silver_ounce_price_usd_today_high_usd', 10, 3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('silver_metal_prices');
    }
};
