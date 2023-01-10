<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UtilityFunctions;

class LinkController extends Controller
{
    //
    public function index(){
        $links = Link::paginate(50);
        return view('admin.link.index',  ['links' => $links, 'page_title' =>'Link']);

    }

    public function create()
    {
  
        return view('admin.link.create', [ 'page_title' =>'Create Link']);
    }


    public function store(Request $request)
    {
    

        $this->validate($request, [
            'link_title' => 'required|string',
            'link_url' => 'required|url',
        ]);

  



        $link = new Link;

    
            $link->link_title = $request->link_title;
            $link->link_url = $request->link_url;

        $link->save();

        return redirect('admin/link/index')->with(['successMessage' => 'Success !! Link created']);
    }


    public function edit($id){
        $link = Link::find($id);
        return view('admin.link.update',['link' => $link, 'page_title' => 'Update Link']);
    }

    public function update(Request $request, Link $link){
        $this ->validate($request,[
            'link_title' => 'required|string',
            'link_url' => 'required|url',
        ]);

        $link = Link::find($request->id);

        $link->link_title = $request->link_title;
        $link->link_url = $request->link_url;

        if ($link->save()) {
            return redirect('admin/link/index')->with(['successMessage' => 'Success !! Links Updated']);
        } else {
            return redirect()->back()->with(['errorMessage' => 'Error Links not updated']);
        }
    }

    public function destroy($id)
    {

        $link = Link::find($id);

        $link->delete();
        return redirect('admin/link/index')->with(['successmessage' => 'Success !! Link Deleted']);
    }
}
