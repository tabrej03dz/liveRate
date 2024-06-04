<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use Illuminate\Http\Request;

class CoinController extends Controller
{
    public function index(){
        $coins = Coin::all();
        return view('coin.index', compact('coins'));
    }

    public function create(){
        return view('coin.create');
    }

    public function store(Request $request){
        $request->validate([
            'metal' => 'required',
            'carat' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'type' => 'required',
        ]);

        Coin::create($request->all());
        return redirect('coin')->with('success', 'Coin created successfully');
    }

    public function edit(Coin $coin){
        return view('coin.edit', compact('coin'));
    }

    public function update(Request $request, Coin $coin){
        $request->validate([
            'metal' => 'required',
            'carat' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'type' => 'required',
        ]);

        $coin->update($request->all());
        return redirect('coin')->with('success', 'Coin Updated successfully');
    }

    public function delete(Coin $coin){
        $coin->delete();
        return back()->with('success', 'Coin deleted successfully');
    }


}
