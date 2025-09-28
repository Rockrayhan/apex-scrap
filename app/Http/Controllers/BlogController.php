<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CaseStudy;
use App\Services\TranslationService;
use Illuminate\Http\Request;

class BlogController extends Controller
{


    // public function index()
    // {
    //     $blogs = Blog::latest()->paginate(5);
    //     return view('blogs.index', compact('blogs'))->with('i', (request()->input('page', 1) - 1) * 5);
    // }



    public function index()
    {
        $search = request('search');

        $blogs = Blog::query()
            ->when($search, function ($query, $search) {
                return $query->where('title_en', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(5);

        return view('blogs.index', compact('blogs', 'search'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('blogs.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required',
            'title_en' => 'required',
            'category' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp|max:2048',
            'description_en' => 'required',
            'featured_in_home' => 'required|boolean',
        ]);

        $filename = null;
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/blogs'), $filename);
        }

        // Translate English to Chinese
        $translator = app(TranslationService::class);
        $title_zh = $translator->translate($request->title_en);
        $description_zh = $translator->translate($request->description_en);

        $blog =  Blog::create([
            'author' => $request->author,
            'title_en' => $request->title_en,
            'title_zh' => $title_zh,
            'category' => $request->category,
            'image' => $filename ? '/uploads/blogs/' . $filename : null,
            'description_en' => $request->description_en,
            'description_zh' => $description_zh,
            'featured_in_home' => $request->featured_in_home,
        ]);

        // return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
        return redirect()->route('blogs.index')
            ->with('success', 'Blog created successfully.!')
            ->with('newItemId', $blog->id);
    }



    // Show edit form
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }




    // Update blog
    public function update(Request $request, $id)
    {
        $request->validate([
            'author' => 'required',
            'title_en' => 'required',
            'category' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp|max:2048',
            'description_en' => 'required',
            'featured_in_home' => 'required|boolean',
        ]);

        $blog = Blog::findOrFail($id);

        $filename = $blog->image;
        if ($request->hasFile('image')) {
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }
            $filename = '/uploads/blogs/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/blogs'), basename($filename));
        }

        // Re-translate
        $translator = app(\App\Services\TranslationService::class);
        $title_zh = $translator->translate($request->title_en);
        $description_zh = $translator->translate($request->description_en);

        $blog->update([
            'author' => $request->author,
            'title_en' => $request->title_en,
            'title_zh' => $title_zh,
            'category' => $request->category,
            'image' => $filename,
            'description_en' => $request->description_en,
            'description_zh' => $description_zh,
            'featured_in_home' => $request->featured_in_home,
        ]);

        // return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');

        return redirect()->route('blogs.index')
            ->with('success', 'Blog updated successfully.')
            ->with('newItemId', $blog->id);
    }





    // Delete blog
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        // Delete image if exists
        if ($blog->image && file_exists(public_path($blog->image))) {
            unlink(public_path($blog->image));
        }
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
