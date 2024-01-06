<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer'
        ]);

        $product = Product::create($validatedData);
        return response()->json($product, 201);
    }

    public function show(Product $product)
       {
           return response()->json($product);
       }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
      {
          $validatedData = $request->validate([
              'name' => 'sometimes|required|max:255',
              'description' => 'nullable',
              'price' => 'sometimes|required|numeric',
              'stock' => 'sometimes|required|integer'
          ]);

          $product->update($validatedData);
          return response()->json($product);
      }

      public function destroy(Product $product)
      {
          $product->delete();
          return response()->json(null, 204);
      }
}
