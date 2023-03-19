<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExecutiveDetail;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExecutiveDetailExport;
use App\Imports\ExecutiveDetailImport;

class ExecutiveDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function fileImportExport()
    {
        
        return view('admin.executivedetail.upload', [
            "page_title" => "Import Executive members"
        ]);
    }

    public function fileImport(Request $request) 
    {
        Excel::import(new ExecutiveDetailImport, $request->file('file')->store('temp'));
        return back();
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport() 
    {
        return Excel::download(new ExecutiveDetailExport, 'users-collection.xlsx');
    }  
    
    public function index()
    {
        $executivedetails = ExecutiveDetail::paginate(10);
        return view('admin.executivedetail.index', [
            "page_title" => "Executive Details",
            "executivedetails" => $executivedetails
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
     * @param  \App\Models\ExecutiveDetail  $executiveDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ExecutiveDetail $executiveDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExecutiveDetail  $executiveDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ExecutiveDetail $executiveDetail, $id)
    {
        $executivedetail = ExecutiveDetail::find($id);
        return view('admin.executivedetail.update', [
            'executivedetail' => $executivedetail,
            'page_title' => "Executive Update"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExecutiveDetail  $executiveDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExecutiveDetail $executiveDetail)
    {
        $request->validate([
            "name" => "required|string",
            "image" => "required|string",
            "phone" => 'required|string',
            "email" => 'required|string',
            "position" => 'required|string',
        ]);

        $executivedetail = ExecutiveDetail::find($request->id);

        $executivedetail->name = $request->name;
        $executivedetail->image = $request->image;
        $executivedetail->phone = $request->phone;
        $executivedetail->email = $request->email;
        $executivedetail->position = $request->position;

        $executivedetail->save();

        return redirect("admin/executivedetails/index");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExecutiveDetail  $executiveDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExecutiveDetail $executiveDetail, $id)
    {
        $executivedetail = ExecutiveDetail::find($id);
        $executivedetail->delete();

        return redirect('admin/executivedetails/index');
    }
}
