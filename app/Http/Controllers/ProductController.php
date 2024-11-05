<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function showAllProducts()
{
    $products = Product::all();
    return view('kit', compact('products'));
}

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titel' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'img_file' => 'string',
            'gender' => 'required|string',
            'choose_patch' => 'required|string',
            'size' => 'required|string',
            'quantity' => 'required|numeric',

        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product toegevoegd!');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titel' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'img_file' => 'string',
            'gender' => 'required|string',
            'choose_patch' => 'required|string',
            'size' => 'required|string',
            'quantity' => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product bijgewerkt!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product verwijderd!');
    }
}
