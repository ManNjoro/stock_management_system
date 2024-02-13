<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', ['products' => $products]); // in the products folder
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $incomingData = $request->validate([
            'name' => 'required',
            'qty' => ['required', 'numeric'],
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        $newProduct = Product::create($incomingData);

        return redirect('/products')->with('success', 'Product Added Successfully');
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request)
    {
        $incomingData = $request->validate([
            'name' => 'required',
            'qty' => ['required', 'numeric'],
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        $product->update($incomingData);

        return redirect(route('product.index'))->with('success', 'Product Updated Successfully');
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect(route('product.index'))->with('success', 'Product delete successfully');
    }
}
