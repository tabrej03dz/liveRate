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
        Schema::create('gold_metal_prices', function (Blueprint $table) {
            $table->id();
            $table->decimal('ounce_price_usd', 10, 3);
            $table->string('gmt_ounce_price_usd_updated');
            $table->decimal('ounce_price_ask', 10, 3);
            $table->decimal('ounce_price_bid', 10, 3);
            $table->decimal('ounce_price_usd_today_low', 10, 2);
            $table->decimal('ounce_price_usd_today_high', 10, 2);
            $table->decimal('usd_to_inr', 10, 6);
            $table->string('gmt_inr_updated');
            $table->decimal('ounce_in_inr', 20, 10);
            $table->decimal('silver_ounce_in_inr', 20, 10);
            $table->decimal('gram_to_ounce_formula', 25, 20);
            $table->decimal('gram_in_usd', 20, 10);
            $table->decimal('gram_in_inr', 20, 10);
            $table->decimal('silver_gram_in_usd', 20, 10);
            $table->decimal('silver_gram_in_inr', 20, 10);
            $table->decimal('silver_ounce_price_ask_inr', 20, 10);
            $table->decimal('silver_ounce_price_bid_inr', 20, 10);
            $table->decimal('silver_ounce_price_inr_today_low', 20, 10);
            $table->decimal('silver_ounce_price_inr_today_high', 20, 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gold_metal_prices');
    }
};
