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
use App\Models\Coverimage;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    //
    public function index(Request $req){

        $coverimages = Coverimage::latest()->get()->take(5);
        $links = Link::latest()->get()->take(5);
        $images = MyImage::latest()->get()->take(5);
        $teams = Team::latest()->get()->take(3);
        $about = About::first();
        $videos = Video::latest()->get()->take(3);
        $posts = Post::latest()->get()->take(6);
        $sitesetting = SiteSetting::first();

        return view('portal.index', [
            'coverimages' => $coverimages,
            'links' => $links,
            'images' => $images,
            'teams' => $teams,
            'about' => $about,
            'videos' => $videos,
            'posts' => $posts,
            'sitesetting' => $sitesetting,
            
        ]);

    }

}
