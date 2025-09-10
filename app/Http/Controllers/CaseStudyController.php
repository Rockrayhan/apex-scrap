<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CaseStudyController extends Controller
{
    public function index()
    {
        $cases = CaseStudy::all();
        return view('casestudies.index', compact('cases'));
    }

    public function create()
    {
        return view('casestudies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'team_involvement' => 'required',
            'category' => 'required',
            'short_desc' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png,webp',
            'services_we_provided' => 'required',
            'industry' => 'required',
            'year' => 'required',
            'the_problem' => 'required',
            'the_solution' => 'required',
            'the_results' => 'required',
        ]);

        $filename = null;
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/casestudies'), $filename);
        }

        // dd($request->the_solution, json_decode($request->the_solution, true));

        CaseStudy::create([
            'title' => $request->title,
            'tags' => explode(',', $request->tags),
            'team_involvement' => $request->team_involvement,
            'category' => $request->category,
            'short_desc' => $request->short_desc,
            'image' => $filename ? '/uploads/casestudies/' . $filename : null,
            'services_we_provided' => explode(',', $request->services_we_provided),
            'industry' => $request->industry,
            'year' => $request->year,
            'the_problem' => $request->the_problem,
            'the_solution' => $request->the_solution,
            'the_results' => $request->the_results,
        ]);

        return redirect()->route('casestudy.index')->with('success', 'Case study added successfully.');
    }

    public function edit($id)
    {
        $case = CaseStudy::findOrFail($id);
        return view('casestudies.edit', compact('case'));
    }

    public function update(Request $request, $id)
    {
        $case = CaseStudy::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'team_involvement' => 'required',
            'category' => 'required',
            'short_desc' => 'required',
            'services_we_provided' => 'required',
            'industry' => 'required',
            'year' => 'required',
            'the_problem' => 'required',
            'the_solution' => 'required',
            'the_results' => 'required',
        ]);

        $filename = $case->image;
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/casestudies'), $filename);
        }

        $case->update([
            'title' => $request->title,
            'tags' => explode(',', $request->tags),
            'team_involvement' => $request->team_involvement,
            'category' => $request->category,
            'short_desc' => $request->short_desc,
            'image' => $filename ? '/uploads/casestudies/' . $filename : null,
            'services_we_provided' => explode(',', $request->services_we_provided),
            'industry' => $request->industry,
            'year' => $request->year,
            'the_problem' => $request->the_problem,
            'the_solution' => $request->the_solution,
            'the_results' => $request->the_results,
        ]);

        return redirect()->route('casestudy.index')->with('success', 'Case study updated successfully.');
    }

    public function destroy($id)
    {
        $case = CaseStudy::findOrFail($id);
        $case->delete();
        return redirect()->back()->with('success', 'Case study deleted.');
    }
}
