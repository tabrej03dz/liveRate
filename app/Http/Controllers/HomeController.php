<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\GoldMetalPrice;
use App\Models\Plan;
use App\Models\Service;
use App\Models\SilverMetalPrice;
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
    public function index(Request $request){
//        $goldPrice = $this->goldApiService->goldPrice();
        if ($request->query('auto') == '1'){
            $prices = GoldMetalPrice::latest()->first();
            $silverPrices = SilverMetalPrice::latest()->first();
        }else{
            $prices = $this->priceService->goldPrice();
            $silverPrices = $this->priceService->silverPriceUSD();
        }


        $goldDiscount22k = Discount::where(['status' => '1', 'metal' => 'gold', 'carat' => '22'])->first();
        if ($goldDiscount22k == null){
            $goldDiscount22k = Discount::where('percent', 0)->first();
        }

        $goldDiscount20k = Discount::where(['status' => '1', 'metal' => 'gold', 'carat' => '20'])->first();
        if ($goldDiscount20k == null){
            $goldDiscount20k = Discount::where('percent', 0)->first();
        }

        $goldDiscount18k = Discount::where(['status' => '1', 'metal' => 'gold', 'carat' => '18'])->first();
        if ($goldDiscount18k == null){
            $goldDiscount18k = Discount::where('percent', 0)->first();
        }
        $silverDiscount = Discount::where(['status' => '1', 'metal' => 'silver'])->first();
        if ($silverDiscount == null){
            $silverDiscount = Discount::where('percent', 0)->first();
        }
        return view('front.index', compact( 'prices', 'goldDiscount22k', 'goldDiscount20k', 'goldDiscount18k', 'silverDiscount', 'silverPrices'));
    }


    public function test(){
        return view('front.test');
    }
}
