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
       return view('admin.committeedetail.upload');
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
        $committeedetails = CommitteeDetail::all();
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
    public function edit(CommitteeDetail $committeeDetail)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommitteeDetail  $committeeDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommitteeDetail $committeeDetail)
    {
        //
    }
}
