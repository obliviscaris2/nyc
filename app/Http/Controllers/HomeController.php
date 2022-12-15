<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    //
    public function index(Request $req){

        $link = Link::first()->get()->take(5);

        return view('portal.index', [
            "link" => $link,
            
        ]);
        
        // if($req->input('find'))
        // {

        //     $query ="select posts.*, categories.category from posts join categories on posts.category_id = categories.id
        //      where title like :title";
        //      $title = "%" . $req->input('find') . "%";
        //     $rows = DB::select($query,['title'=>$title]);
        // }
        // else{
        //     $query ="select posts.*, categories.category from posts join categories on posts.category_id = categories.id";
        //     $rows = DB::select($query);
        // }

        // $img = new Image();
      

        // foreach($rows as $key => $row){
        //     $rows[$key]->image = $img->get_thumb_post('uploads/'.$row->image);
        // }

        // $query = "select * from categories order by id desc";
        // $categories = DB::select($query);
        // $data['rows'] = $rows;
        // $data['categories'] = $categories;
        // $data['page_title'] = 'Home';




    }

}
