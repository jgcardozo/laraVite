<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('title','asc')->get();
        return view('admin.category.index', compact('categories'));
    }


    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
   
    }

  
    public function show(Category $category)
    {
    
    }

 
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->title = $request->title;        
        $category->save();
        return redirect()->route('categories.index')->with('message', "category updated");
        //return Redirect::action([CategoryController::class,'index'])->with('message',"category updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with("message", "Category was deleted");
    }
}
