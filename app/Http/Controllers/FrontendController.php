<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }


    public function about()
    {
        return view('frontend.about');
    }


    public function services()
    {
        return view('frontend.services');
    }

    public function materials()
    {
        $categories = Category::with('products')->get();
        return view('frontend.materials', compact('categories'));
    }

    public function insight()
    {
        $blogs = Blog::all();
        return view('frontend.insight', compact('blogs'));
    }


    public function categoryDetailsPage($id)
    {
        $category = Category::with('products')->findOrFail($id);
        return view('frontend.categoryDetails', compact('category'));
    }


    public function blogDetailsPage($id)
    {
        $blog = Blog::findOrFail($id);
        $relatedBlogs = Blog::where('id', '!=', $id)
            ->latest()
            ->take(3)
            ->get();
        return view('frontend.blogDetailsPage', compact('blog', 'relatedBlogs'));
    }
}
