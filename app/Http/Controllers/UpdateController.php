<?php

namespace App\Http\Controllers;

use App\Models\Update;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function index(){
        $updates = Update::all();
        return view('update.index', compact('updates'));
    }

    public function create(){
        return view('update.create');
    }

    public function store(Request $request){
//        dd($request->all());
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => '',
        ]);

        Update::create($request->except('date') + ['date' => $request->date ?? today()->toDateString()]);
        return redirect('update')->with('success', 'update created successfully');
    }

    public function edit(Update $update){
        return view('update.edit', compact('update'));
    }

    public function update(Request $request, Update $update){
        $update->update($request->all());
        return redirect('update')->with('success', 'updated successfully');
    }

    public function delete(Update $update){
        $update->delete();
        return back()->with('success', 'Update deleted successfully');
    }
}
