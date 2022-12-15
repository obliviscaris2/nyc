<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(Request $req){

        $posts = Post::with('get_categories')->latest()->get()->take(5);
        return view('admin.post.index', [
            "posts" => $posts,
            "page_title" => "Posts"
        ]);

    }

    public function create(Request $req)
    {
        $categories = Category::all();
        return view('admin.post.create', [
            "categories" => $categories
        ]);
    }

    public function store(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:3000',
            'content' => 'required|string',
            'categories' => 'required'
        ]);

        $newImageName = time() . "-" . $request->title . "-" . $request->image->extension();
        $request->image->move(public_path('uploads/posts/image'), $newImageName);

        $post = new Post;
        $post->title = $request->title;
        $post->image = $newImageName;
        $post->content = $request->content;

        if ($post->save()){
            // dd($post);
            $post->get_categories()->sync($request->categories);
            return redirect('admin/posts/index');
        }
    }
    
}
