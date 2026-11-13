<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
  public function sneakers()
{
    $sneakers = Category::all();
    return view('categories.sneakers', compact('sneakers'));
}
  public function index()
{
    // Lijst alle categorieën ophalen
    $categories = Category::all();
    return view('categories.index', compact('categories'));
}
}
