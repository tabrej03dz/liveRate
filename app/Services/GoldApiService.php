<?php

namespace App\Services;

use Carbon\Carbon;
use GuzzleHttp\Client;


class GoldApiService{
    protected $client;



    public function goldPrice(){
        $apiKey = "goldapi-3w32fslw7pma8f-io";
        $symbol = 'XAU';
        $curr = 'INR';
        $date = Carbon::yesterday()->toDateTimeLocalString();
        $client = new Client();
        $response = $client->request('GET', 'https://www.goldapi.io/api/'.$symbol.'/'.$curr.'/'.$date, [
            'headers' => [
                'x-access-token' => $apiKey,
            ],
            'verify' => false,
        ]);

        return json_decode($response->getBody(), true);
    }

    public function silverPrice(){
        $apiKey = "goldapi-3w32fslw7pma8f-io";
        $symbol = 'XAG';
        $curr = 'INR';
        $date = Carbon::yesterday()->toDateTimeLocalString();
        $client = new Client();

        $response = $client->request('GET', 'https://www.goldapi.io/api/'.$symbol.'/'.$curr.'/'.$date, [
            'headers' => [
                'x-access-token' => $apiKey,
            ],
            'verify' => false,
        ]);

        return json_decode($response->getBody(), true);
    }
}
