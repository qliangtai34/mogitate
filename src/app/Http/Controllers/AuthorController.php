<?php

namespace App\Http\Controllers;

// Eloquentを使用できるようにAuthorモデルを読み込む
use App\Models\products;
use App\Models\seasons;
use App\Models\product_seasons;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
   

   public function store(Request $request)
     {
         $product = $request->only(['name', 'price', 'image', 'description']);
         products::create($product);
         $todo = $request->only(['product_id', 'season_id']);
         product_seasons::create($todo);
         return redirect('/book');
     }

public function index()
  {
    $todos =product_seasons::with('category')->get();
    $categories = seasons::all();
    $products = products::all();
    return view('products', compact('todos', 'categories', 'products'));
  }

 

}
