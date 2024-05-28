<?php

namespace App\Services;

use GuzzleHttp\Client;


class PriceService{
    protected $client;


    public function goldPrice(){
        $client = new Client();
        $response = $client->request('GET', 'https://goldpricez.com/api/rates/currency/inr/measure/gram/metal/gram', [
            'headers' => [
                'X-API-KEY' => 'f9ff4408caeb1712c83e18d611140424f9ff4408',
            ],
            'verify' => false,
        ]);

        return json_decode($response->getBody(), true);
    }
}
