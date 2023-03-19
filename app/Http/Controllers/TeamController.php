<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UtilityFunctions;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $teams = Team::paginate(10);

        return view('admin.team.index', ['teams' => $teams, 'page_title' =>'Team']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  
        return view('admin.team.create', [ 'page_title' =>'Create Team']);
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
            'role' => 'required|string',
            'name' => 'required|string',
            'position' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1536',
            'contact_number' => 'required|string',
            'email' => 'required|string',
        ]);

        // $imagePath = $request->file('image')->storeAs('images/team', Carbon::now()  . '.' . $request->file('image')->getClientOriginalExtension(), 'public');
        $newImageName = time() . '-' . $request->name . '.' .$request->image->extension();
        $request->image->move(public_path('uploads/team/'), $newImageName );
     




        $team = new Team;

        $team->role = $request->role;
            $team->name = $request->name;
            $team->position = $request->position;
            $team->image = $newImageName;
            $team->contact_number = $request->contact_number;
            $team->email = $request->email;
        $team->save();

        return redirect('admin/team/index')->with(['successMessage' => 'Success !! Staff created']);
       
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
    public function show(Team $team)
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
     
        $team = Team::find($id);
        return view('admin.team.update', ['team' => $team, 'page_title' =>'Update Team']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
     
        $this->validate($request, [
            'role' => 'sometimes|string',
            'name' => 'required|string',
            'position' => 'required|string',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:1536',
            'contact_number' => 'required|string',
            'email' => 'required|string',
        ]);
      
            $team = Team::find($request->id);
            if ($request->hasFile('image')) {
                $newImageName = time() . '-' . $request->name . '.' .$request->image->extension();
                $request->image->move(public_path('uploads/team'), $newImageName );
                             Storage::delete('public/uploads/team' . $team->image);
                $team->image = $newImageName;
            }

            $team->role = $request->role;
            $team->name = $request->name;
            $team->position = $request->position;
            $team->image = $newImageName;
            $team->contact_number = $request->contact_number;
            $team->email = $request->email;

            if ($team->save()) {
                return redirect('admin/team/index')->with(['successMessage' => 'Success !! Staff Updated']);
            } else {
                return redirect()->back()->with(['errorMessage' => 'Error Staff not updated']);
            }
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);

        $team->delete();

        return redirect('admin/team/index')->with(['successMessage' => 'Success !!Team Member Deleted']);
    }
}
