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
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name_en' => 'required|unique:categories,name_en']);

        $translator = app(TranslationService::class);
        $name_zh = $translator->translate($request->name_en);

        Category::create([
            'name_en' => $request->name_en,
            'name_zh' => $name_zh,
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
        ]);

        $translator = app(TranslationService::class);
        $name_zh = $translator->translate($request->name_en);

        $category->update([
            'name_en' => $request->name_en,
            'name_zh' => $name_zh,
            'slug' => Str::slug($request->name_en),
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted!');
    }
}
