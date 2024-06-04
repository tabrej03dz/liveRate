<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\BankDetail;
use App\Models\Blog;
use App\Models\Coin;
use App\Models\Contact;
use App\Models\Plan;
use App\Models\Update;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function about(){
        $abouts = About::all();
        return view('front.about', compact('abouts'));
    }

    public function bankDetail(){
        $banks = BankDetail::all();
        return view('front.bankDetail', compact('banks'));
    }

    public function calendar(){
        return view('front.calendar');
    }

    public function coinsRate(){
        $silverCoins = Coin::where('metal', 'silver')->get();
        $goldCoins = Coin::where('metal', 'gold')->get();
        return view('front.coinsRate', compact('goldCoins', 'silverCoins'));
    }

    public function update(){
        $updates = Update::all();
        return view('front.update', compact('updates'));
    }

    public function contact(){
        $contact = Contact::first();
        return view('front.contact', compact('contact'));
    }

    public function blog(){
        $blogs=Blog::all();
        return view('front.blog',compact('blogs'));
    }
    public function blogDetails(Blog $blog){
        $categories = Blog::all();
        $recentPosts = Blog::orderBy('created_at', 'desc')->take(5)->get();
//
        // Pass the data to the view
        return view('front.blogDetails', compact('blog', 'categories', 'recentPosts'));
    }
}
