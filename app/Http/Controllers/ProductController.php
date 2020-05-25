<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function show($productId)
    {
        $product = Product::findOrFail($productId);

        return view('products.show', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        $product = Product::create(request()->all());

        return $product;
    }

    public function edit($productId)
    {
        $product = Product::findOrFail($productId);

        return view('products.edit', compact('product'));
    }

    public function update($productId)
    {
        $product = Product::findOrFail($productId);

        $product->update(request()->all());

        return $product;
    }

    public function destroy($productId)
    {
        $product = Product::findOrFail($productId);

        $product->delete();

        return $product;
    }
}
