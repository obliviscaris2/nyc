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
        $links = Link::latest()->get()->take(6);
        $categories = Category::all();
        $abouts = About::first();
        $teams = Team::latest()->get()->take(3);
        return view('portal.render_about', compact('abouts','teams','categories', 'sitesetting', 'links'));

    }


    public function render_team(){
        $sitesetting = SiteSetting::first();
        $links = Link::latest()->get()->take(6);
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
        $links = Link::latest()->get()->take(6);
        $notice =OtherPost::whereType('notice')->latest()->get()->take(5);
        $publication = OtherPost::whereType('publication')->latest()->get()->take(5);
        $tender = OtherPost::whereType('tender')->latest()->get()->take(5);
        $rules = OtherPost::whereType('rules')->latest()->get()->take(5);
        $directot = OtherPost::whereType('directot')->latest()->get()->take(5);
        $press = OtherPost::whereType('press')->latest()->get()->take(5);
        $news = OtherPost::whereType('news')->latest()->get()->take(5);
        $other = OtherPost::whereType('other')->latest()->get()->take(5);

        return view('portal.render_images', compact('images','notice','publication','tender','links','rules','directot','press','news','other', 'sitesetting'));
    }

    public function render_videos(){
        $sitesetting = SiteSetting::first();
        $videos = Video::all();
        $links = Link::latest()->get()->take(6);
        $notice =OtherPost::whereType('notice')->latest()->get()->take(5);
        $publication = OtherPost::whereType('publication')->latest()->get()->take(5);
        $tender = OtherPost::whereType('tender')->latest()->get()->take(5);
        $rules = OtherPost::whereType('rules')->latest()->get()->take(5);
        $directot = OtherPost::whereType('directot')->latest()->get()->take(5);
        $press = OtherPost::whereType('press')->latest()->get()->take(5);
        $news = OtherPost::whereType('news')->latest()->get()->take(5);
        $other = OtherPost::whereType('other')->latest()->get()->take(5);
       

        return view('portal.render_videos', compact('videos','notice','publication','links','tender','rules','directot','press','news','other', 'sitesetting'));

    }

    public function render_notice(){
        $sitesetting = SiteSetting::first();
        $notices = Document::whereType('notice')->latest()->get()->take(20);
        $links = Link::latest()->get()->take(6);

        return view('portal.render_notice', compact('notices', 'sitesetting', 'links'));

    }
    public function render_publication(){
        $sitesetting = SiteSetting::first();
        $publications = Document::whereType('publication')->latest()->get()->take(20);
        $links = Link::latest()->get()->take(6);

        return view('portal.render_publication', compact('publications', 'sitesetting', 'links'));

    }
    public function render_tender(){
        $sitesetting = SiteSetting::first();
        $tender = Document::whereType('tender')->latest()->get()->take(20);
        $links = Link::latest()->get()->take(6);

        return view('portal.render_tender', compact('tender', 'sitesetting', 'links'));

    }
    public function render_rules(){
        $sitesetting = SiteSetting::first();
        $links = Link::latest()->get()->take(6);

        $rules = Information::whereType('policy')->latest()->get()->take(20);
        return view('portal.render_rules', compact('rules', 'sitesetting', 'links'));

    }
    public function render_directot(){
        $sitesetting = SiteSetting::first();
        $directot =Information::whereType('directive')->latest()->get()->take(20);
        $links = Link::latest()->get()->take(6);

        return view('portal.render_directot', compact('directot', 'sitesetting', 'links'));

    }
    public function render_press(){
        $sitesetting = SiteSetting::first();
        $press =Information::whereType('pressrelease')->latest()->get()->take(20);
        $links = Link::latest()->get()->take(6);

        return view('portal.render_press', compact('press', 'sitesetting', 'links'));

    }
    public function render_news(){
        $sitesetting = SiteSetting::first();
        $news = Other::whereType('news')->latest()->get()->take(20);
        $links = Link::latest()->get()->take(6);

        return view('portal.render_news', compact('news', 'sitesetting', 'links'));

    }
    public function render_other(){
        $sitesetting = SiteSetting::first();
        $other = Other::whereType('other')->latest()->get()->take(20);
        $links = Link::latest()->get()->take(6);

        return view('portal.render_other', compact('other', 'sitesetting', 'links'));

    }
    public function render_otherpost(Request $req, $slug=''){
        $sitesetting = SiteSetting::first();
        $otherpost = Document::where("slug", $slug)->first();
        $links = Link::latest()->get()->take(6);

        return view('portal.render_otherpost', compact('otherpost','sitesetting', 'links'));

    }
    public function render_otherpost_news(Request $req, $id=''){
        $sitesetting = SiteSetting::first();
        $otherpost = Document::where("id", $id)->first();
        $links = Link::latest()->get()->take(6);

        
        return view('portal.render_otherpost_news', compact('otherpost','sitesetting', 'links'));

    }


    public function render_info(Request $req, $slug){
        $sitesetting = SiteSetting::first();
        $otherpost = Information::where("slug", $slug)->first();
        $links = Link::latest()->get()->take(6);

        return view('portal.includes.render_infopost', compact('otherpost', 'sitesetting', 'links'));
    }

    public function render_other_post(Request $req, $slug){
        $sitesetting = SiteSetting::first();
        $otherpost = Other::where("slug", $slug)->first();
        $links = Link::latest()->get()->take(6);

        return view('portal.includes.render_otherpost', compact('otherpost', 'sitesetting', 'links'));
    }
    
    public function render_committee()
    {
        $sitesetting = SiteSetting::first();
        $committee = CommitteeDetail::all();
        $links = Link::latest()->get()->take(6);

        return view('portal.render_committee', [
            "committee" => $committee,
            "sitesetting" => $sitesetting,
            "page_title" => "District Committees",
            "links" => $links,
        ]);
    }

    public function render_administrative()
    {
        $sitesetting = SiteSetting::first();
        $administrative = Message::whereType('administrativehead')->latest()->get()->take(1);
        $links = Link::latest()->get()->take(6);

        return view('portal.render_administrative', [
            "administrative" => $administrative,
            "sitesetting" => $sitesetting,
            "page_title" => "Message from the Administrative Head",
            "links" => $links,
        ]);
    }

    public function render_chairperson()
    {
        $sitesetting = SiteSetting::first();
        $chairperson = Message::whereType('chairperson')->latest()->get()->take(1);
        $links = Link::latest()->get()->take(6);

        return view('portal.render_chairperson', [
            "chairperson" => $chairperson,
            "sitesetting" => $sitesetting,
            "page_title" => "Message from Chairperson",
            "links" => $links,

        ]);
    }

    public function contact_page(){
       
        $sitesetting = SiteSetting::first();
        $links = Link::latest()->get()->take(6);

        return view('portal.contact_page', [
            'sitesetting' => $sitesetting,
            "links" => $links,
        ]);

    }

    public function render_executive_members()
    {
        $sitesetting = SiteSetting::first();
        $executivedetail = ExecutiveDetail::all();
        $links = Link::latest()->get()->take(6);

        return view('portal.render_executive_members', [
            'executivedetail' => $executivedetail,
            'sitesetting' => $sitesetting,
            'page_title' => "Council Members",
            "links" => $links,
        ]);
    }
 
}
