<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Models\CommitteeDetail;
use Maatwebsite\Excel\Facades\Excel;

class CommitteeDetailController extends Controller
{

    public function fileImportExport()
    {
       return view('admin.committeedetail.upload', [
        "page_title" => "Import Committee Members"
       ]);
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request) 
    {
        Excel::import(new UsersImport, $request->file('file')->store('temp'));
        return back();
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport() 
    {
        return Excel::download(new UsersExport, 'users-collection.xlsx');
    }    



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $committeedetails = CommitteeDetail::paginate(10);
        return view('admin.committeedetail.index',[
            "page_title" => "Committee Details",
            "committeedetails" => $committeedetails
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommitteeDetail  $committeeDetail
     * @return \Illuminate\Http\Response
     */
    public function show(CommitteeDetail $committeeDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommitteeDetail  $committeeDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(CommitteeDetail $committeeDetail, $id)
    {
        $committeedetail = CommitteeDetail::find($id);

        return view('admin.committeedetail.update', [
            'committeedetail' => $committeedetail,
            'page_title' => "Committee Update"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CommitteeDetail  $committeeDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommitteeDetail $committeeDetail)
    {
        $request->validate([
            "district" => "required|string",
            "name" => "required|string",
            "address" => 'required|string',
            "phone" => 'required|string'
        ]);

        $committeedetail = CommitteeDetail::find($request->id);

        $committeedetail->district = $request->district;
        $committeedetail->name = $request->name;
        $committeedetail->address = $request->address;
        $committeedetail->phone = $request->phone;

        $committeedetail->save();

        return redirect("admin/committeedetails/index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommitteeDetail  $committeeDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommitteeDetail $committeeDetail, $id)
    {
        $committeeDetail = CommitteeDetail::find($id);
        $committeeDetail->delete();

        return redirect('admin/committeedetails/index');
    }
}
