<?php

namespace App\Services;

use GuzzleHttp\Client;


class PriceService{
    protected $client;


    public function goldPrice(){
        $client = new Client();
        $response = $client->request('GET', 'https://goldpricez.com/api/rates/currency/inr/measure/gram/metal/gram', [
            'headers' => [
                'X-API-KEY' => env('API_KEY'),
            ],
            'verify' => false,
        ]);

        return json_decode($response->getBody(), true);
    }
}
