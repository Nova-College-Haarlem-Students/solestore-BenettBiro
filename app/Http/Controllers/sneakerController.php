<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Sneaker;


class sneakerController extends Controller
{
  public function sneakers()
{
    $sneakers = Sneaker::all();
    return view('categories.sneakers', compact('sneakers'));
}
 
}
