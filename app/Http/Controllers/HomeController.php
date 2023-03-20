<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Post;
use App\Models\Team;
use App\Models\About;
use App\Models\Image;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    //
    public function index(Request $req){

        $links = Link::latest()->get()->take(4);
        $sitesetting = SiteSetting::first();
        $notices = Document::whereType('notice')->latest()->get()->take(5);
        $publications = Document::whereType('publication')->latest()->get()->take(5);
        $press = Information::whereType('pressrelease')->latest()->get()->take(5);
        $news = Other::whereType('news')->latest()->get()->take(5);

        return view('portal.index', [
            'coverimages' => $coverimages,
            'links' => $links,
            'images' => $images,
            'teams' => $teams,
            'about' => $about,
            'videos' => $videos,
            'posts' => $posts,
            'sitesetting' => $sitesetting,
            'notices' => $notices,
            'publications' => $publications,
            'press' => $press,
            'news' => $news
            
        ]);

    }

}


