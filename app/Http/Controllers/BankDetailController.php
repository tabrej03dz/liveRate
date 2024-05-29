<?php

namespace App\Http\Controllers;

use App\Models\Update;
use Illuminate\Http\Request;
use App\Models\BankDetail;

class BankDetailController extends Controller
{
    public function index(){
        $banks = BankDetail::all();
        return view('bank.index', compact('banks'));
    }

    public function create(){
        return view('bank.create');
    }

    public function store(Request $request){
//        dd($request->all());
        $request->validate([
            'bank_logo' => 'image|mimes:jpeg,jpg,png',
            'bank_name' => 'required',
            'account_holder_name' => 'required',
            'account_number' => 'required',
            'ifsc_code' => 'required',
            'swift_code' => '',
            'branch_name' => 'required',

        ]);


        $bank = BankDetail::create($request->except('bank_logo'));
        if($request->file('bank_logo')){
            $file = $request->file('bank_logo')->store('public/bankLogo');
            $bank->bank_logo = str_replace('public/', '', $file);
            $bank->save();
        }
        return redirect('bank')->with('success', 'bank detail created successfully');
    }

    public function edit(BankDetail $bank){
        return view('bank.edit', compact('bank'));
    }

    public function update(Request $request, BankDetail $bank){
        $request->validate([
            'bank_logo' => 'image|mimes:jpeg,jpg,png',
            'bank_name' => 'required',
            'account_holder_name' => 'required',
            'account_number' => 'required',
            'ifsc_code' => 'required',
            'branch_name' => 'required',

        ]);
        $bank->update($request->except('bank_logo'));

        if ($request->file('bank_logo')){
            if ($bank->bank_logo){
                unlink('storage/'. $bank->bank_logo);
            }
            $file = $request->file('bank_logo')->store('public/bankLogo');
            $bank->bank_logo = str_replace('public/', '', $file);
            $bank->save();
        }

        return redirect('bank')->with('success', 'updated successfully');
    }

    public function delete(BankDetail $bank){
        if($bank->bank_logo){
            $filePath = 'storage/' . $bank->bank_logo;
            if (file_exists($filePath)) {
                unlink($filePath);
            } else {
                // Log an error or handle the missing file scenario
                \Log::error('File not found: ' . $filePath);
            }
        }
        $bank->delete();
        return back()->with('success', 'BankDetail deleted successfully');
    }
}
