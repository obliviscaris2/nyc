<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Post;
use App\Models\SiteSetting;

class SingleController extends Controller
{
    //
    public function index(Request $req, $slug)
    {
        $sitesetting = SiteSetting::first();
        $post = Post::where("slug", $slug)->first();
        $category = Category::find($slug);

        return view('portal.single' , [
            "post" => $post,
            "category" => $category,
            "sitesetting" => $sitesetting
        ]);


    //     $query = "select * from posts where slag= :slag limit 1";
    //     $row = DB::select($query, ['slag'=>$id]);

    //     if($row){
    //         $query = "select * from categories where id = :id limit 1";
    //         $category = DB::select($query,['id'=>$row[0]->id]);

    //         $data['row'] = $row[0];

    //         if(!empty($category)){
    //             $data['category'] = $category[0];
    //         }
            
    
    //     }

    //     $query = "select * from categories order by id desc";
    //     $categories = DB::select($query);

        
       
    //     $data['categories'] = $categories;
       
    //     return view('portal.single', $data);

    // }

    // public function save(Request $req){
    //     $validate = $req->validate([
    //         'key' => 'required|string',
    //         'key' => 'required|image'
    //     ]);
    //     return view('portal.single');
    }
}
