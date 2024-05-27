<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Plan;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('front.index', compact('products'));
      }
      public function about(){
          $teams=Team::all();
          $about=About::all();
          return view('front.about',compact('about','teams'));
      }
      public function services(){
          $services=Service::all();
          $testimonials=Testimonial::all();
          return view('front.service',compact('services','testimonials'));
      }
      public function contact(){
          return view('front.contact');
      }
      public function price(){
          $teams=Team::all();
          $plans=Plan::all();
          return view('front.price',compact('plans','teams'));
      }
      public function team(){
          $teams=Team::all();
          return view('front.team',compact('teams'));
      }
      public function testimonial(){
          $testimonials=Testimonial::all();
          return view('front.testimonial',compact('testimonials'));
      }
      public function appointment(){
          return view('front.appointment');
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
