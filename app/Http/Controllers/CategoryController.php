<?php

namespace App\Http\Controllers;

use App\Models\Sneaker;

class SneakerController extends Controller
{
    public function index()
    {
        $sneakers = Sneaker::all();
        return view('categories.index', compact('sneakers'));
    }

    public function show($id)
    {
        $sneaker = Sneaker::findOrFail($id);
        return view('categories.show', compact('sneaker'));
    }
}