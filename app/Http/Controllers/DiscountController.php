<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index(){
        $discounts = Discount::all();
        return view('discount.index', compact('discounts'));
    }

    public function create(){
        return view('discount.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'percent' => 'required|numeric',
            'status' => 'required',
            'type' => 'required',
        ]);
        Discount::create($request->all());
        return redirect('discount')->with('success', 'Discount created successfully');
    }

    public function edit(Discount $discount){
        return view('discount.edit', compact('discount'));
    }

    public function update(Request $request, Discount $discount){
        $request->validate([
            'title' => 'required',
            'percent' => 'required|numeric',
            'status' => 'required',
            'type' => 'required',
            'metal' => 'required',
        ]);
//        dd($discount->metal);

        $discount->update($request->all());
        return redirect('discount')->with('success', 'Discount Updated successfully');
    }

    public function delete(Discount $discount){
        $discount->delete();
        return back()->with('success', 'Discount Deleted successfully');
    }

    public function status(Discount $discount){
        $discounts = Discount::where('metal' , $discount->metal)->get();
        foreach ($discounts as $dic){
            $dic->update(['status' => '0']);
        }
        $discount->status = '1';
        $discount->save();

        return back()->with('success', 'Status updated successfully');
    }
}

