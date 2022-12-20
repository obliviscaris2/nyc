<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Image;
use App\Models\SiteSetting;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    //
    public function index(Request $req){

        $links = Link::latest()->get()->take(4);
        $sitesetting = SiteSetting::first();
        $teams = Team::latest()->get()->take(3);


        return view('portal.index', [
            "links" => $links,
            "sitesetting" => $sitesetting,
            "teams" => $teams
            
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
