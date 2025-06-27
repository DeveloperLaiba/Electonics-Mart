<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('Category.Form');
    }
    public function store(Request $request)
    {
        $category = new Category();
        $category->category = $request->category;
        $category->save();
    
        return redirect()->route('table.Category');
    }
    
    public function Table(){
        $category = Category::all();
        return view('Category.Table',compact('category'));
    }
    public function edit($id){
        $category= Category::find($id);
        return view('Category.Edit',compact('category'));
     }
     public function update(Request $request,$id){
        $category = Category::find($id);
        $category->category = $request->category;
        $category->update();
        return redirect()->route('table.Category');
     }
     public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('table.Category');
     }
}

