<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seasons;
class CategoryController extends Controller
{
    public function index()
     {
         $categories = seasons::all();

         return view('category', compact('categories'));
     }

     public function store(Request $request)
{
  $category = $request->only(['name']);
  seasons::create($category);

  return redirect('/categories')->with('message', 'カテゴリを作成しました');
}

}
