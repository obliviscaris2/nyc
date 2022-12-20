<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Team;
use App\Models\OtherPost;
use App\Models\Category;
use App\Models\CommitteeDetail;
use App\Models\Document;
use App\Models\ExecutiveDetail;
use App\Models\Information;
use App\Models\Link;
use App\Models\Message;
use App\Models\Post;
use App\Models\Video;
use App\Models\MyImage;
use App\Models\Other;
use App\Models\SiteSetting;

class RenderController extends Controller
{
    //
    public function render_about(){
        $sitesetting = SiteSetting::first();
        $links = Link::latest();
        $categories = Category::all();
        $abouts = About::first();
        $teams = Team::latest()->get()->take(3);
        return view('portal.render_about', compact('abouts','teams','categories', 'sitesetting', 'links'));

    }


    public function render_team(){
        $sitesetting = SiteSetting::first();
        $links = Link::latest();
        $categories = Category::all();
        $abouts = About::latest()->get()->take(1);
        $teams = Team::all();
        $notice =OtherPost::whereType('notice')->latest()->get()->take(5);
        $publication = OtherPost::whereType('publication')->latest()->get()->take(5);
        $tender = OtherPost::whereType('tender')->latest()->get()->take(5);
        $rules = OtherPost::whereType('rules')->latest()->get()->take(5);
        $directot = OtherPost::whereType('directot')->latest()->get()->take(5);
        $press = OtherPost::whereType('press')->latest()->get()->take(5);
        $news = OtherPost::whereType('news')->latest()->get()->take(5);
        $other = OtherPost::whereType('other')->latest()->get()->take(5);
        $videos = Video::latest()->get()->take(3);
        $images = MyImage::latest()->get()->take(20); 

        return view('portal.render_team', compact('teams','categories','abouts','notice','publication','tender','rules','directot','press','news','other','videos','images', 'sitesetting', 'links'));

    }

    public function render_images(){
        $sitesetting = SiteSetting::first();
        $images = MyImage::all();
        $notice =OtherPost::whereType('notice')->latest()->get()->take(5);
        $publication = OtherPost::whereType('publication')->latest()->get()->take(5);
        $tender = OtherPost::whereType('tender')->latest()->get()->take(5);
        $rules = OtherPost::whereType('rules')->latest()->get()->take(5);
        $directot = OtherPost::whereType('directot')->latest()->get()->take(5);
        $press = OtherPost::whereType('press')->latest()->get()->take(5);
        $news = OtherPost::whereType('news')->latest()->get()->take(5);
        $other = OtherPost::whereType('other')->latest()->get()->take(5);

        return view('portal.render_images', compact('images','notice','publication','tender','rules','directot','press','news','other', 'sitesetting'));
    }

    public function render_videos(){
        $sitesetting = SiteSetting::first();
        $videos = Video::all();
        $notice =OtherPost::whereType('notice')->latest()->get()->take(5);
        $publication = OtherPost::whereType('publication')->latest()->get()->take(5);
        $tender = OtherPost::whereType('tender')->latest()->get()->take(5);
        $rules = OtherPost::whereType('rules')->latest()->get()->take(5);
        $directot = OtherPost::whereType('directot')->latest()->get()->take(5);
        $press = OtherPost::whereType('press')->latest()->get()->take(5);
        $news = OtherPost::whereType('news')->latest()->get()->take(5);
        $other = OtherPost::whereType('other')->latest()->get()->take(5);
       

        return view('portal.render_videos', compact('videos','notice','publication','tender','rules','directot','press','news','other', 'sitesetting'));

    }

    public function render_notice(){
        $sitesetting = SiteSetting::first();
        $notices = Document::whereType('notice')->latest()->get()->take(20);
        return view('portal.render_notice', compact('notices', 'sitesetting'));

    }
    public function render_publication(){
        $sitesetting = SiteSetting::first();
        $publications = Document::whereType('publication')->latest()->get()->take(20);
        return view('portal.render_publication', compact('publications', 'sitesetting'));

    }
    public function render_tender(){
        $sitesetting = SiteSetting::first();
        $tender = Document::whereType('tender')->latest()->get()->take(20);
        return view('portal.render_tender', compact('tender', 'sitesetting'));

    }
    public function render_rules(){
        $sitesetting = SiteSetting::first();
        $rules = Information::whereType('policy')->latest()->get()->take(20);
        return view('portal.render_rules', compact('rules', 'sitesetting'));

    }
    public function render_directot(){
        $sitesetting = SiteSetting::first();
        $directot =Information::whereType('directive')->latest()->get()->take(20);
        return view('portal.render_directot', compact('directot', 'sitesetting'));

    }
    public function render_press(){
        $sitesetting = SiteSetting::first();
        $press =Information::whereType('pressrelease')->latest()->get()->take(20);
        return view('portal.render_press', compact('press', 'sitesetting'));

    }
    public function render_news(){
        $sitesetting = SiteSetting::first();
        $news = Other::whereType('news')->latest()->get()->take(20);
        return view('portal.render_news', compact('news', 'sitesetting'));

    }
    public function render_other(){
        $sitesetting = SiteSetting::first();
        $other = Other::whereType('other')->latest()->get()->take(20);
        return view('portal.render_other', compact('other', 'sitesetting'));

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
        $sitesetting = SiteSetting::first();
        $otherpost = Other::where("slug", $slug)->first();
        return view('portal.includes.render_otherpost', compact('otherpost', 'sitesetting'));
    }
    
    public function render_committee()
    {
        $sitesetting = SiteSetting::first();
        $committee = CommitteeDetail::all();
        return view('portal.render_committee', [
            "committee" => $committee,
            "sitesetting" => $sitesetting,
            "page_title" => "जिल्ला समितीहरु"
        ]);
    }

    public function render_administrative()
    {
        $sitesetting = SiteSetting::first();
        $administrative = Message::whereType('administrativehead')->latest()->get()->take(1);
        return view('portal.render_administrative', [
            "administrative" => $administrative,
            "sitesetting" => $sitesetting,
            "page_title" => "प्रशासकीय प्रमुखको सन्देश",
        ]);
    }

    public function render_chairperson()
    {
        $sitesetting = SiteSetting::first();
        $chairperson = Message::whereType('chairperson')->latest()->get()->take(1);
        return view('portal.render_chairperson', [
            "chairperson" => $chairperson,
            "sitesetting" => $sitesetting,
            "page_title" => "अध्यक्षको सन्देश"
        ]);
    }

    public function contact_page(){
       
        $sitesetting = SiteSetting::first();
        return view('portal.contact_page', [
            'sitesetting' => $sitesetting
        ]);

    }

    public function render_executive_members()
    {
        $sitesetting = SiteSetting::first();
        $executivedetail = ExecutiveDetail::all();
        return view('portal.render_executive_members', [
            'executivedetail' => $executivedetail,
            'sitesetting' => $sitesetting,
            'page_title' => "परिषद् सदस्य"
        ]);
    }
 
}
