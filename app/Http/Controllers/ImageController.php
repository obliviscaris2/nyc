<?php

namespace App\Http\Controllers;


use Exception;
use Carbon\Carbon;
use App\Models\MyImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UtilityFunctions;

class ImageController extends Controller
{
    //
    public function index(){
        $images = MyImage::paginate(50);
        return view('admin.image.index', ['images' => $images, 'page_title' => 'Image']);

    }

    public function create()
    {
  
        return view('admin.image.create', [ 'page_title' =>'Create Images']);
    }

    public function store(Request $request)
    {
    
       
        $this->validate($request, [
            'img_desc' => 'required|string',
            'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1536',
        ]);

  
        $newImageName = time() . '-' . $request->img_desc . '.' .$request->img->extension();
        $request->img->move(public_path('uploads/image/'), $newImageName );



        $image = new MyImage;

    
            $image->img_desc = $request->img_desc;
            
            $image->img =$newImageName;
            
        $image->save();

        return redirect('admin/image/index')->with(['successMessage' => 'Success !! Image created']);
    }

    public function destroy($id){
        $image = MyImage::find($id);

        $image->delete();

        return redirect('admin/image/index')->with(['successMessage' => 'Success !!Image Deleted']);
    }
}
