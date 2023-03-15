<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UtilityFunctions;


class AboutController extends Controller
{
    public function index()
    {
        
        $abouts = About::paginate(50);

        return view('admin.about.index', ['abouts' => $abouts, 'page_title' =>'About']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  
        return view('admin.about.create', [ 'page_title' =>'Create About']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    


        $this->validate($request, [
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1536',
            'content' => 'required|string',
        ]);

        // $imagePath = $request->file('image')->storeAs('images/team', Carbon::now()  . '.' . $request->file('image')->getClientOriginalExtension(), 'public');
        $newImageName = time() . '-' . $request->title . '.' .$request->image->extension();
        $request->image->move(public_path('uploads/about/'), $newImageName );
     

        $about = new About;

    
            $about->title = $request->title;
            $about->image = $newImageName;
            $about->content = $request->content;
        $about->save();

        return redirect('admin/about/index')->with(['successMessage' => 'Success !! About Page created']);
       
        // try {
        //     $imagePath = $request->file('image')->storeAs('images/team', Carbon::now()  . '.' . $request->file('image')->getClientOriginalExtension(), 'public');
        //     $team = new Team;
        //     $team->role = $request->role;
        //     $team->name = $request->name;
        //     $team->position = $request->position;
        //     $team->image = $imagePath;
        //     $team->contact_number = $request->contact_number;
        //     $team->email = $request->email;

        //     if ($team->save()) {
         
        //         return redirect()->route('admin.team.index')->with(['successMessage' => 'Success !! Staff created']);
        //     } else {
        //         return redirect()->back()->with(['errorMessage' => 'Error Staff not created']);
        //     }
        // } catch (Exception $e) {
        //     return redirect()->back()->with(['errorMessage' => $e->getMessage()]);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
        $about = About::find($id);
        return view('admin.about.update', ['about' => $about, 'page_title' =>'Update About']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
     
        // $this->validate($request, [
        //     'title' => 'required|string',
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1536',
        //     'content' => 'required|string',
        // ]);
        $request->validate([
            'title' => 'required|string',
                'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:1536',
                'content' => 'required|string',
        ]);
       
            $about = About::find($request->id);
            
            if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->storeAs('images/team', Carbon::now()  . '.' . $request->file('image')->getClientOriginalExtension(), 'public');
            $newImageName = time() . '-' . $request->title . '.' .$request->image->extension();
            $request->image->move(public_path('uploads/about/'), $newImageName );
            Storage::delete('public/uploads/about/' . $about->image);
                $about->image = $newImageName;
            }
            

            $about->title = $request->title;
            $about->image = $newImageName;
            $about->content = $request->content;

            $about->save();

            return redirect('admin/about/index')->with(['successMessage' => 'Success !! About Page Updated']);
           
            // if ($about->save()) {
            //     return redirect()->route('admin/about/index')->with(['successMessage' => 'Success !! About Updated']);
            // } else {
            //     return redirect()->back()->with(['errorMessage' => 'Error About not updated']);
            // }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
       
            $about = About::find($id);

            $about->delete();

            return redirect('admin/about/index')->with(['successMessage' => 'Success !! About Page Updated']);

            // if ($about->delete()) {
            //     Storage::delete('public/uploads' . $about->image);
            //     return redirect()->route('admin.about.index')->with(['successMessage' => 'Success !! About Page Deleted']);
            // } else {
            //     return redirect()->back()->with(['errorMessage' => 'Error About Page can not Deleted']);
            // }
       
    }
}
