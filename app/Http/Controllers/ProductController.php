<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{  
    public function index()
    {
        $products = Product::all(); // Fetch all products
        return view('products.index', compact('products')); // Send data to view
    }

    public function create()
    {
        return view('products.create'); // Return the view to create a new product
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image',
            'deskripsi' => 'required|string',
            'icon' => 'required|image',
        ]);

        // Save data
        $product = new Product();
        $product->name = $request->name;
        $product->image = $request->file('image')->store('images', 'public'); // Save image
        $product->deskripsi = $request->deskripsi;
        $product->icon = $request->file('icon')->store('icons', 'public'); // Save icon
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id); // Find the product by ID
        return view('products.edit', compact('product')); // Pass product to edit view
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'icon' => 'nullable|image|max:2048',
        ]);

        $product = Product::findOrFail($id); // Find the product

        $product->name = $request->name;
        $product->deskripsi = $request->deskripsi;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($product->image) {
                \Storage::disk('public')->delete($product->image);
            }
            // Store new image
            $product->image = $request->file('image')->store('images', 'public');
        }

        // Handle icon upload
        if ($request->hasFile('icon')) {
            // Delete old icon
            if ($product->icon) {
                \Storage::disk('public')->delete($product->icon);
            }
            // Store new icon
            $product->icon = $request->file('icon')->store('icons', 'public');
        }

        $product->save(); // Save the updated product

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id); // Find the product

        // Delete the images from storage
        if ($product->image) {
            \Storage::disk('public')->delete($product->image);
        }
        if ($product->icon) {
            \Storage::disk('public')->delete($product->icon);
        }

        $product->delete(); // Delete the product from the database

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
