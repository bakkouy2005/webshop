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
        /* $request->validate([
            'titel' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|decimal:2',
            'img_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // afbeelding validatie
            'gender' => 'required|string',
            'deals' => 'nullable|decimal:2',
            'quantity' => 'required|numeric',
            
        ]);
        */

        if ($request->hasFile('img_file')) {
            $image_file = $request->file('img_file')->store('images', 'public'); // sla de afbeelding op in de 'public' opslag
        } else {
            $image_file = null; // geen afbeelding geüpload
        }

        $product = new Product();
        $product->titel = $request->titel;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->img_file = $image_file;
        $product->gender = $request->gender;
        $product->deals = $request->deals;
        $product->quantity = $request->quantity;
        $product->save();

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
    /*$request->validate([
        'titel' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|decimal:2',
        'img_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // afbeelding validatie
        'gender' => 'required|string',
        'deals' => 'nullable|decimal:2',
        'quantity' => 'required|numeric',
    ]);*/

    $product = Product::findOrFail($id);

    
    if ($request->hasFile('img_file')) {
        
        if ($product->img_file && \Storage::disk('public')->exists($product->img_file)) {
            \Storage::disk('public')->delete($product->img_file);
        }

        $newImage = $request->file('img_file')->store('images', 'public');
        $product->img_file = $newImage; 
    }
    $product->titel = $request->titel;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->gender = $request->gender;
    $product->deals = $request->deals;
    $product->quantity = $request->quantity;
    $product->save();

    return redirect()->route('products.index')->with('success', 'Product bijgewerkt!');
}
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product verwijderd!');
    }
}
