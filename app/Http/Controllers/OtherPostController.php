<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\OtherPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\UtilityFunctions;

class OtherPostController extends Controller{

public function index()
{

    $otherposts = OtherPost::latest()->paginate(50);
    return view('admin.otherpost.index',['otherposts' => $otherposts, 'page_title' =>'Other Post']);
}

/** 
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{

    return view('admin.otherpost.create', [ 'page_title' =>'Create Other Post']);
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{

    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'file' => 'required|file|max:10000',
        'type' => 'required',
    ]);
    // $imagePath = $request->file('image')->storeAs('images/post', Carbon::now()  . '.' . $request->file('image')->getClientOriginalExtension(), 'public');
   
    $otherpostPath = time() . '-' . $request->title . '.' .$request->file->extension();
    $request->file->move(public_path('uploads/otherpost/'), $otherpostPath );
 

    $otherpost = new OtherPost;
    $otherpost->title = $request->title;
    $otherpost->description = $request->description;
   $otherpost->type = $request->type;
    $otherpost->file = $otherpostPath;

    $otherpost->save();
    return redirect('admin/otherpost/index')->with(['successMessage' => 'Success !! Other Post created']);
   
}


/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Models\Post  $post
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{

    $otherpost = OtherPost::find($id);
    return view('admin.otherpost.update', ['otherpost' => $otherpost, 'page_title' =>'Update Other Posts']);
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\Post  $post
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, OtherPost $otherpost)
{

    $request->validate([
        'title' => 'required',
        'description' => 'required',
          'file' => 'required|file|max:10000',
        'type' => 'required',
    ]);
    $otherpost = OtherPost::find($request->id);
    // if ($request->hasFile('image')) {
    //     $imagePath = $request->file('image')->storeAs('images/post', Carbon::now() . substr(str_replace(['.', '?', '/'], '-', $request->title), 0, 50) . '.' . $request->file('image')->getClientOriginalExtension(), 'public');
    //     Storage::delete('public/' . $post->image);
    //     $post->image = $imagePath;
    // }
    if ($request->hasFile('file')) {
        $otherpostPath = time() . '-' . $request->title . '.' .$request->file->extension();
        $request->file->move(public_path('uploads/otherpost/'), $otherpostPath );
        Storage::delete('public/uploads/otherpost/' . $otherpost->file);
        $otherpost->file = $otherpostPath;  
    }
    $otherpost->title = $request->title;
    $otherpost->description = $request->description;
    $otherpost->type = $request->type;

 $otherpost->save();
 return redirect('admin/otherpost/index')->with(['successMessage' => 'Success!! Post Updated']);

 
}

/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Models\Post  $post
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{

    $otherpost = OtherPost::find($id);

    $otherpost->delete();
    return redirect('admin/otherpost/index')->with(['successmessage' => 'Success !! Otherpost Deleted']);


//     if ($post->delete()) {
//         if ($post->image) {
//             Storage::delete('public/' . $post->image);
//         }
//         UtilityFunctions::createHistory('Deleted Post with Id ' . $post->id . ' and title ' . $post->title, 1);
//         return redirect()->route('admin.posts.index')->with(['successMessage' => 'Success !! Post Deleted']);
//     } else {
//         return redirect()->back()->with(['errorMessage' => 'Error Post not Deleted']);
//     }
// }
// if ($otherpost->delete()) {
//     if ($otherpost->file) {
//         Storage::delete('public/' . $otherpost->file);
//     }
//     UtilityFunctions::createHistory('Deleted Post with Id ' . $otherpost->id . ' and title ' . $otherpost->title, 1);
//     return redirect()->route('admin.posts.index')->with(['successMessage' => 'Success !! Post Deleted']);
// } else {
//     return redirect()->back()->with(['errorMessage' => 'Error Post not Deleted']);
// }
}
}