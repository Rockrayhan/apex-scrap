<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Services\TranslationService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->get();
        return view('products.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'category_id'     => 'required|exists:categories,id',
            'name_en'         => 'required|unique:products,name_en',
            'name_zh'         => 'required|string',
            'description_en'  => 'nullable|string',
            'description_zh'  => 'nullable|string',
            'image'           => 'nullable|image',
        ]);

        $filename = null;
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/products'), $filename);
            $filename = 'uploads/products/' . $filename;
        }

        $product = Product::create([
            'category_id'     => $request->category_id,
            'name_en'         => $request->name_en,
            'name_zh'         => $request->name_zh,
            'slug'            => Str::slug($request->name_en),
            'description_en'  => $request->description_en,
            'description_zh'  => $request->description_zh,
            'image'           => $filename,
        ]);

        return redirect()->route('admin.products.index')
            ->with('success', 'Product added!')
            ->with('newProductId', $product->id);
    }



    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'category_id'     => 'required|exists:categories,id',
            'name_en'         => 'required|unique:products,name_en,' . $id,
            'name_zh'         => 'nullable|string',
            'description_en'  => 'nullable|string',
            'description_zh'  => 'nullable|string',
            'image'           => 'nullable|image',
        ]);

        $filename = $product->image;
        if ($request->hasFile('image')) {
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/products'), $filename);
            $filename = 'uploads/products/' . $filename;
        }

        $product->update([
            'category_id'     => $request->category_id,
            'name_en'         => $request->name_en,
            'name_zh'         => $request->name_zh,
            'slug'            => Str::slug($request->name_en),
            'description_en'  => $request->description_en,
            'description_zh'  => $request->description_zh,
            'image'           => $filename,
        ]);

        return redirect()->route('admin.products.index')
            ->with('success', 'Product updated successfully!')
            ->with('newProductId', $product->id);
    }




    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted!');
    }
}
