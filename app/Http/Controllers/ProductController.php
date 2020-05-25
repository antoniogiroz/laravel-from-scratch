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
        //
    }

    public function edit($product)
    {
        return view('products.edit');
    }

    public function update($product)
    {
        //
    }

    public function destroy($product)
    {
        //
    }
}
