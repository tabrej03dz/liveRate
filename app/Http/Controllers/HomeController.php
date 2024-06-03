<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Plan;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Services\GoldApiService;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use App\Services\PriceService;
use App\Models\Discount;

class HomeController extends Controller
{
    protected $priceService;
    public function __construct(PriceService $priceService, GoldApiService $goldApiService){
        $this->priceService = $priceService;
        $this->goldApiService = $goldApiService;
    }
    public function index(){

        $response = $this->priceService->goldPrice();
//        $goldPrice = $this->goldApiService->goldPrice();
        $silverResponse = $this->priceService->silverPriceUSD();

//        dd($response);

        $silverPrices = json_decode($silverResponse);
        $prices = json_decode($response);

        $discount = Discount::where('status', '1')->first();
        if ($discount == null){
            $discount = Discount::where('percent', 0)->first();
        }
        return view('front.index', compact( 'prices', 'discount', 'silverPrices'));
    }

}
