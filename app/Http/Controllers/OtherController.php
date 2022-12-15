<?php

namespace App\Http\Controllers;

use App\Models\Other;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Other::whereType("news")->latest()->get()->take(5);
        $otheropt = Other::whereType("other")->latest()->get()->take(5);

        $others = Other::all();
        return view('admin.other.index', [
            "page_title" => "Others",
            "news" => $news,
            "otheropt" => $otheropt,
            "others" => $others

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.other.create', [
            "page_title" => "Create Other"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "type" => "string",
            "title" => "required|string",
            "description" => "required|string",
            "image" => "image|mimes:jpg,png,peg,gif,svg|max:2048",
            "file" => "required|file|max:4000"
        ]); 

        $newImage = time() . "-" . $request->title . "-" . $request->image->extension();
        $request->image->move(public_path('uploads/information/image'), $newImage);

        if ($request->hasFile('file')){
            $postPath = $request->title . '.' .$request->file->extension();
            $request->file->move(public_path('uploads/information/file'), $postPath );
        }else{
                $postPath = "NoFile";
        }

        $other = new Other();
        $other->type = $request->type;
        $other->title = $request->title;
        $other->slug = SlugService::createSlug(Other::class, 'slug', $request->title);
        $other->description = $request->description;

        $other->image = $newImage;
        $other->file = $postPath;

        $other->save();

        return redirect("admin/other/index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function show(Other $other )
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function edit(Other $other, $id)
    {
        $other = Other::find($id);

        return view('admin.other.update', [
            'other' => $other,
            'page_title' => "Other Update"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Other $other)
    {
        $request->validate([
            "type" => "string",
            "title" => "required|string",
            "description" => "required|string",
            "image" => "image|mimes:jpg,png,peg,gif,svg|max:2048",
            "file" => "required|file|max:4000"
        ]);

        $other = Other::find($request->id);

        if ($request->hasFile('file')){
            $postPath = $request->title . '.' .$request->file->extension();
            $request->file->move(public_path('uploads/other/file'), $postPath );
        }else {
                $postPath = "NoFile";
        }
        

        if ($request->hasFile('image')) {
            $newImageName = time() . '-' . $request->image->extension();
            $request->image->move(public_path('uploads/other/image'), $newImageName );
        }

        $other->image = $newImageName;
        $other->file = $postPath;
        $other->type = $request->type;
        $other->title = $request->title;
        $other->slug = SlugService::createSlug(Other::class, 'slug', $request->title);
        $other->description = $request->description;

        $other->save();

        return redirect("admin/other/index");
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function destroy(Other $other, $id)
    {
        $other = Other::find($id);
        $other->delete();

        return redirect("admin/other/index");
    }

   
    
}
