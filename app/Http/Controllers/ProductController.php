<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.admin.product.products', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $value = '';
        return view('pages.admin.product.create-product', compact('value'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->productName = $request->name;
        $product->gender = $request->gender;
        $product->status = $request->status;
        $product->dob = $request->date;
        $product->description = $request->description;
        $product->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        
        return view('pages.admin.product.update-product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->productName = $request->name;
        $product->gender = $request->gender;
        $product->status = $request->status;
        $product->dob = $request->date;
        $product->description = $request->description;
        $product->save();

        return view('pages.admin.product.update-product', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}
