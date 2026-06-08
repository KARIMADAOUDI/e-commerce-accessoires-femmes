<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductAdminController extends Controller
{
    public function index()
    {
        $products = Product::with('category')
            ->latest()
            ->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
        {
            $data = $request->validate([
                'category_id' => 'required|exists:categories,id',
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'old_price' => 'nullable|numeric|min:0',
                'stock' => 'nullable|integer|min:0',
                'short_description' => 'nullable|string',
                'description' => 'nullable|string',
                'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            ]);

            $data['slug'] = Str::slug($data['name']);
            $data['is_featured'] = $request->has('is_featured');
            $data['is_new'] = $request->has('is_new');
            $data['status'] = $request->has('status');

            if ($request->hasFile('main_image')) {
                $data['main_image'] = $request->file('main_image')->store('products', 'public');
            }

            Product::create($data);

            return redirect()
                ->route('admin.products.index')
                ->with('success', 'Produit ajouté avec succès.');
        }

    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'old_price' => 'nullable|numeric|min:0',
            'stock' => 'nullable|integer|min:0',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data['slug'] = Str::slug($data['name']);
        $data['is_featured'] = $request->has('is_featured');
        $data['is_new'] = $request->has('is_new');
        $data['status'] = $request->has('status');

        if ($request->hasFile('main_image')) {
            $data['main_image'] = $request->file('main_image')->store('products', 'public');
        }

        $product->update($data);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Produit modifié avec succès.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Produit supprimé avec succès.');
    }
}