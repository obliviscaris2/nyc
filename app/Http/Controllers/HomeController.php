<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Post;
use App\Models\Team;
use App\Models\About;
use App\Models\Image;
use App\Models\SiteSetting;
use App\Models\Video;
use App\Models\MyImage;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    //
    public function index(Request $req){


        $links = Link::latest()->get()->take(5);
        $images = MyImage::latest()->get()->take(5);
        $teams = Team::latest()->get()->take(3);
        $abouts = About::latest()->get()->take(1);
        $videos = Video::latest()->get()->take(3);
        $posts = Post::latest()->get()->take(6);
        $sitesetting = SiteSetting::first();

        return view('portal.index', [
            'links' => $links,
            'images' => $images,
            'teams' => $teams,
            'abouts' => $abouts,
            'videos' => $videos,
            'posts' => $posts,
            'sitesetting' => $sitesetting,
            
        ]);

    }

}
