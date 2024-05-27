<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create(){
        return view('product.create');
    }

    public function store(ProductRequest $request){
//        dd($request->all());
        Product::create($request->all());
        return redirect('product')->with('success', 'Product created successfully');
    }

    public function edit(Product $product){
        return view('product.edit', compact('product'));
    }

    public function delete(Product $product){
        $product->delete();
        return back()->with('success', 'deleted successfully');
    }

    public function update(ProductRequest $request, Product $product){
        $product->update($request->all());
        return redirect('product')->with('success', 'updated successfully');
    }
}
