<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Team;
use App\Models\OtherPost;
use App\Models\Category;
use App\Models\Document;
use App\Models\Information;
use App\Models\Post;
use App\Models\Video;
use App\Models\MyImage;
use App\Models\Other;

class RenderController extends Controller
{
    //
    public function render_about(){
        
        $categories = Category::all();
        $abouts = About::first();
        $teams = Team::first()->get()->take(3);
        return view('portal.render_about', compact('abouts','teams','categories'));

    }


    public function render_team(){
        $categories = Category::all();
        $abouts = About::first();
        $teams = Team::all();
        $notice =OtherPost::whereType('notice')->latest()->get()->take(5);
        $publication = OtherPost::whereType('publication')->latest()->get()->take(5);
        $tender = OtherPost::whereType('tender')->latest()->get()->take(5);
        $rules = OtherPost::whereType('rules')->latest()->get()->take(5);
        $directot = OtherPost::whereType('directot')->latest()->get()->take(5);
        $press = OtherPost::whereType('press')->latest()->get()->take(5);
        $news = OtherPost::whereType('news')->latest()->get()->take(5);
        $other = OtherPost::whereType('other')->latest()->get()->take(5);
        $videos = Video::first()->get()->take(3);
        $images = MyImage::latest()->get()->take(20); 

        return view('portal.render_team', compact('teams','categories','abouts','notice','publication','tender','rules','directot','press','news','other','videos','images'));

    }

    public function render_images(){
        $images = MyImage::all();
        $notice =OtherPost::whereType('notice')->latest()->get()->take(5);
        $publication = OtherPost::whereType('publication')->latest()->get()->take(5);
        $tender = OtherPost::whereType('tender')->latest()->get()->take(5);
        $rules = OtherPost::whereType('rules')->latest()->get()->take(5);
        $directot = OtherPost::whereType('directot')->latest()->get()->take(5);
        $press = OtherPost::whereType('press')->latest()->get()->take(5);
        $news = OtherPost::whereType('news')->latest()->get()->take(5);
        $other = OtherPost::whereType('other')->latest()->get()->take(5);

        return view('portal.render_images', compact('images','notice','publication','tender','rules','directot','press','news','other'));
    }

    public function render_videos(){
        $videos = Video::all();
        $notice =OtherPost::whereType('notice')->latest()->get()->take(5);
        $publication = OtherPost::whereType('publication')->latest()->get()->take(5);
        $tender = OtherPost::whereType('tender')->latest()->get()->take(5);
        $rules = OtherPost::whereType('rules')->latest()->get()->take(5);
        $directot = OtherPost::whereType('directot')->latest()->get()->take(5);
        $press = OtherPost::whereType('press')->latest()->get()->take(5);
        $news = OtherPost::whereType('news')->latest()->get()->take(5);
        $other = OtherPost::whereType('other')->latest()->get()->take(5);
       

        return view('portal.render_videos', compact('videos','notice','publication','tender','rules','directot','press','news','other'));

    }

    public function render_notice(){
        $notices = Document::whereType('notice')->latest()->get()->take(20);
        return view('portal.render_notice', compact('notices'));

    }
    public function render_publication(){
        $publications = Document::whereType('publication')->latest()->get()->take(20);
        return view('portal.render_publication', compact('publications'));

    }
    public function render_tender(){
        $tender = Document::whereType('tender')->latest()->get()->take(20);
        return view('portal.render_tender', compact('tender'));

    }
    public function render_rules(){
        $rules = Information::whereType('policy')->latest()->get()->take(20);
        return view('portal.render_rules', compact('rules'));

    }
    public function render_directot(){
        $directot =Information::whereType('directive')->latest()->get()->take(20);
        return view('portal.render_directot', compact('directot'));

    }
    public function render_press(){
        $press =Information::whereType('pressrelease')->latest()->get()->take(20);
        return view('portal.render_press', compact('press'));

    }
    public function render_news(){
        $news = Other::whereType('news')->latest()->get()->take(20);
        return view('portal.render_news', compact('news'));

    }
    public function render_other(){
        $other = Other::whereType('other')->latest()->get()->take(20);
        return view('portal.render_other', compact('other'));

    }
    public function render_otherpost(Request $req, $slug=''){
        $otherpost = Document::where("slug", $slug)->first();
        return view('portal.render_otherpost', compact('otherpost'));

    }

    public function render_info(Request $req, $slug){
        $otherpost = Information::where("slug", $slug)->first();
        return view('portal.includes.render_infopost', compact('otherpost'));
    }

    public function render_other_post(Request $req, $slug){
        $otherpost = Other::where("slug", $slug)->first();
        return view('portal.includes.render_otherpost', compact('otherpost'));
    }
    
 

    public function contact_page(){
       
        return view('portal.contact_page');

    }
 
}
