<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', [
            'categories' => $categories,
            "page_title" => "Categories"
        ]);
    }

    public function create()
    {
        return view('admin.categories.create',[
            'page_title' => 'Create Category'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $category = new Category();
        $category->title = $request->title;
        $category->save();
        
        return redirect(route('admin.categories.index'));
        
    }

    public function edit(Category $category, $id)
    {
        $category = Category::find($id);
        return view('admin.categories.update', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);

        $category = Category::find($request->id);
        $category->title = $request->title;

        $category->save();

        return redirect(route('admin.categories.index'));

    }

    public function destroy(Category $category, $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect((route('admin.categories.index')));
    }
    
}
