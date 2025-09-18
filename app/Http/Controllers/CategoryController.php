<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\TranslationService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        // Paginate the results
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|unique:categories,name_en',
            'name_zh' => 'required',
        ]);

        Category::create([
            'name_en' => $request->name_en,
            'name_zh' => $request->name_zh,
            'slug' => Str::slug($request->name_en),
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category added!');
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }



    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name_en' => 'required|unique:categories,name_en,' . $id,
            'name_zh' => 'required',
        ]);

        $category->update([
            'name_en' => $request->name_en,
            'name_zh' => $request->name_zh,
            'slug' => Str::slug($request->name_en),
        ]);


        return redirect()->route('admin.categories.index')
            ->with('success', 'Category updated successfully!')
            ->with('newCategoryId', $category->id);
    }



    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted!');
    }
}
