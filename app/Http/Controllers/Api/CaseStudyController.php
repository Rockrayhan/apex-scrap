<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{   
    public function index()
    {
        return CaseStudy::all();
    }


    public function show($id)
    {
        $blog = CaseStudy::findOrFail($id);
        return response()->json($blog);
    }


}
