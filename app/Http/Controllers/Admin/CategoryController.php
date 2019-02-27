<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
      $categories = Category::all();

      return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
    {
       $formData = $request->all();
       $newCategory = new Category();
       $newCategory->fill($formData);
       $newCategory->slug = str_slug($newCategory->title);
       $newCategory->save();
       return redirect()->route('admin.categories.index');
    }


    public function show(Category $category)
    {
      if (!empty(Category::find($category->id))){
        return view('admin.categories.show', compact('category'));
      } else {
        return redirect()->back();
      }
    }

    public function edit(Category $category)
    {
      if (!empty(Category::find($category->id))){
        return view('admin.categories.edit', compact('category'));
      } else {
        abort(404);
      }
    }


    public function update(Request $request, Category $category)
    {
      if (!empty(Category::find($category->id))){

        $formData = $request->all();
        $formData['slug'] = str_slug($formData['title']);
        $category->update($formData);
        return redirect()->route('admin.categories.index');

      } else {
        abort(404);
      }
    }


    public function destroy($id)
    {
      if (!empty(Category::find($id))){

        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin.categories.index');

      } else {
        abort(404);
      }
    }
}
