<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_seasons;
use App\Models\seasons;
use App\Models\products;

class TodoController extends Controller
{
   public function index()
  {
    $todos =product_seasons::with('category')->get();
    $categories = seasons::all();
    $products = products::all();
    return view('index', compact('todos', 'categories', 'products'));
  }
    public function store(Request $request)
   {
         $todo = $request->only(['product_id', 'season_id']);
         product_seasons::create($todo);

         return redirect('/');
   }
}
