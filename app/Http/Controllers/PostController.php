<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            "categories" => $categories,
            "page_title" => "Create Post"
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
        $request->image->move(public_path('uploads/posts/'), $newImageName);

        $post = new Post;
        $post->title = $request->title;
        $post->slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        $post->image = $newImageName;
        $post->content = $request->content;

        if ($post->save()){
            // dd($post);
            $post->get_categories()->sync($request->categories);
            return redirect('admin/posts/index');
        }
    }

    public function edit(Post $post, $id)
    {
        $post = Post::find($id);
        $categories = Category::all();

        return view('admin.post.update', [
            'post' => $post,
            "categories" => $categories,
            'page_title' => "Post Update"
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:3000',
            'content' => 'required|string',
            'categories' => 'required'
        ]);

        $post = Post::find($request->id);

        $newImageName = time() . "-" . $request->title . "-" . $request->image->extension();
        $request->image->move(public_path('uploads/posts/'), $newImageName);

        $post->title = $request->title;
        $post->image = $newImageName;
        $post->content = $request->content;


        if ($post->save()){
            $post->get_categories()->sync($request->categories);
            return redirect('admin/posts/index');
        }
        


    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if($post->delete()){
            $post->get_categories()->detach();
            Storage::delete('uploads/posts/image/' . $post->image);
            return redirect("admin/posts/index");
        }

        
    }
    
}
