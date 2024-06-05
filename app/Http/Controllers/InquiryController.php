<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index(){
        $inquiries = Inquiry::all();
//        dd($inquiries);
        return view('inquiry.index', compact('inquiries'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => '',
            'message' => '',
        ]);


        Inquiry::create($request->all());
        return back()->with('success', 'Your inquiry request has submitted! we contact you soon...');
    }

    public function delete(Inquiry $inquiry){
        $inquiry->delete();
        return back()->with('success', 'Inquiry deleted successfully');
    }
}
