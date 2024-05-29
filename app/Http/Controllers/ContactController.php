<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function create(){
        return view('contact.create');
    }

    public function store(Request $request){
        $request->validate([
            'phone' => 'required',
            'phone1' => '',
            'full_address' => 'required',
            'email' => '',
        ]);

        Contact::create($request->all());
        return redirect('contact')->with('success', 'contact created successfully');
    }

    public function edit(Contact $contact){
        return view('contact.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact){
        $request->validate([
            'phone' => 'required',
            'phone1' => '',
            'full_address' => 'required',
            'email' => 'required',
        ]);

        $contact->update($request->all());
        return redirect('contact')->with('success', 'Contact Updated successfully');
    }

    public function delete(Contact $contact){
        $contact->delete();
        return back()->with('success', 'Contact Deleted successfully');
    }
}
