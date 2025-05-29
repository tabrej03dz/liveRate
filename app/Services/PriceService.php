<?php

namespace App\Services;

use App\Models\GoldMetalPrice;
use App\Models\SilverMetalPrice;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;


class PriceService{
    protected $client;
//https://goldpricez.com/api/rates/currency/inr/measure/gram/metal/gram

    public function goldPrice(){

        try {
            $client = new Client();
            $response = $client->request('GET', 'https://goldpricez.com/api/rates/currency/inr/measure/gram/metal/all', [
                'headers' => [
                    'X-API-KEY' => 'f9ff4408caeb1712c83e18d611140424f9ff4408',
                ],
                'verify' => false,
            ]);

            $data = json_decode($response->getBody(), true);

            $data = json_decode($data);
            // Check if all expected keys exist to avoid null errors
            if (isset($data->ounce_price_usd)) {
                $data = GoldMetalPrice::create([
                    'ounce_price_usd' => $data->ounce_price_usd,
                    'gmt_ounce_price_usd_updated' => $data->gmt_ounce_price_usd_updated,
                    'ounce_price_ask' => $data->ounce_price_ask,
                    'ounce_price_bid' => $data->ounce_price_bid,
                    'ounce_price_usd_today_low' => $data->ounce_price_usd_today_low,
                    'ounce_price_usd_today_high' => $data->ounce_price_usd_today_high,
                    'usd_to_inr' => $data->usd_to_inr,
                    'gmt_inr_updated' => $data->gmt_inr_updated,
                    'ounce_in_inr' => $data->ounce_in_inr,
                    'silver_ounce_in_inr' => $data->silver_ounce_in_inr,
                    'gram_to_ounce_formula' => $data->gram_to_ounce_formula,
                    'gram_in_usd' => $data->gram_in_usd,
                    'gram_in_inr' => $data->gram_in_inr,
                    'silver_gram_in_usd' => $data->silver_gram_in_usd,
                    'silver_gram_in_inr' => $data->silver_gram_in_inr,
                    'silver_ounce_price_ask_inr' => $data->silver_ounce_price_ask_inr,
                    'silver_ounce_price_bid_inr' => $data->silver_ounce_price_bid_inr,
                    'silver_ounce_price_inr_today_low' => $data->silver_ounce_price_inr_today_low,
                    'silver_ounce_price_inr_today_high' => $data->silver_ounce_price_inr_today_high,
                ]);
            }

            return $data;
        }catch (RequestException $e){
            $data = GoldMetalPrice::latest()->first();
            // Log the error and return a friendly response
//            Log::error('Gold API Fetch Failed: ' . $e->getMessage());

            return $data; // Return 200 to avoid crashing the frontend
        }

    }

    public function silverPriceUSD(){

        try {
            $client = new Client();
            $response = $client->request('GET', 'https://goldpricez.com/api/rates/currency/usd/measure/gram/metal/all', [
                'headers' => [
//                    'X-API-KEY' => 'f9ff4408caeb1712c83e18d611140424f9ff4408',
                    'X-API-KEY' => env('API_KEY'),
                ],
                'verify' => false,
            ]);

            $data = json_decode($response->getBody(), true);

            $data = json_decode($data);

            if (isset($data->silver_gram_in_usd)) {
                $data = SilverMetalPrice::create([
                    'ounce_price_usd' => $data->ounce_price_usd,
                    'gmt_ounce_price_usd_updated' => $data->gmt_ounce_price_usd_updated,
                    'ounce_price_ask' => $data->ounce_price_ask,
                    'ounce_price_bid' => $data->ounce_price_bid,
                    'ounce_price_usd_today_low' => $data->ounce_price_usd_today_low,
                    'ounce_price_usd_today_high' => $data->ounce_price_usd_today_high,
                    'gram_to_ounce_formula' => $data->gram_to_ounce_formula,
                    'gram_in_usd' => $data->gram_in_usd,
                    'silver_gram_in_usd' => $data->silver_gram_in_usd,
                    'silver_ounce_price_ask_usd' => $data->silver_ounce_price_ask_usd ?? 0,
                    'silver_ounce_price_bid_usd' => $data->silver_ounce_price_bid_usd ?? 0,
                    'silver_ounce_price_usd_today_low_usd' => $data->silver_ounce_price_usd_today_low_usd ?? 0,
                    'silver_ounce_price_usd_today_high_usd' => $data->silver_ounce_price_usd_today_high_usd ?? 0,
                ]);
            }

            return $data;
        }catch (RequestException $e){
            // Log the error and return a friendly response
            Log::error('Gold API Fetch Failed: ' . $e->getMessage());
            $data = SilverMetalPrice::latest()->first();
            return $data;
        }

    }
}
