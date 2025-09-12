<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $blogs = Blog::all();
        return view('frontend.home', compact('blogs'));
    }


    public function about()
    {
        return view('frontend.about');
    }


    public function categoryDetailsPage($id)
    {
        $category = Category::with('products')->findOrFail($id);
        return view('frontend.categoryDetails', compact('category'));
    }
}
