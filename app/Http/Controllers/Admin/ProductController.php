<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('Backend.product.index', compact('products'));
    }

    public function create()
    {
        return view('Backend.product.create');
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'slug' => str($request->name)->slug(),
            'attribute' => $request->attribute
        ]);
        return redirect()->route('admin.product.index');
    }

    function edit(Product $product)
    {
        return view('Backend.product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update([
            'name' => $request->name,
            'slug' => str($request->name)->slug(),
            'attribute' => $request->attribute
        ]);

        return redirect()->route('admin.product.index');
    }

    function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
