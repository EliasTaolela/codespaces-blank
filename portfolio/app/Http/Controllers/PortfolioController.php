<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{public function index() {
    $projects = Portfolio::all();
    return view('portfolio.index', compact('projects'));
}

public function store(Request $request) {
    $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'github_link' => 'required|url',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    
    $portfolio = new Portfolio();
    $portfolio->title = $request->input('title');
    $portfolio->description = $request->input('description');
    $portfolio->github_link = $request->input('github_link');
    if ($request->hasFile('image')) {
        $portfolio->image_path = $request->file('image')->store('images');
    }
    $portfolio->save();
    return redirect()->route('portfolio.index');
}
}
