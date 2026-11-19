<?php

namespace App\Http\Controllers;

use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();

        return view('categories.index', compact('brands'));
    }
    public function show($id)
    {
        $brands = Brand::findOrFail($id);
        return view('brands.show', compact('brands'));
    }
    
}