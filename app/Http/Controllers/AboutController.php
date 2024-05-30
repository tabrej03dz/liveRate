<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $abouts = About::all();
        return view('about.index', compact('abouts'));
    }

    public function create(){
        return view('about.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        About::create($request->all());
        return redirect('about')->with('success', 'About Created successfully');
    }

    public function edit(About $about){
        return view('about.edit', compact('about'));
    }

    public function update(Request $request, About $about){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $about->update($request->all());
        return redirect('about')->with('success', 'Updated successfully');
    }

    public function delete(About $about){
        $about->delete();
        return back()->with('success', 'Deleted successfully');
    }


}
