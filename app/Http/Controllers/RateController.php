<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function index(){
        $rate = Rate::first();
        return view('rate.index', compact('rate'));
    }

    public function store(Request $request){
        Rate::create($request->all());
        return back()->with('success', 'Metal rates updated successfully');
    }

    public function update(Request $request, Rate $rate){
        $rate->update($request->all());
        return back()->with('success', 'Metal rates updated successfully');
    }
}
