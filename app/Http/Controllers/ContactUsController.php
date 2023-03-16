<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactUs::all();
        return view('admin.contactus.index', [
            "contacts" => $contacts,
            "page_title" => "Contact Us"
        ]);
    }

    public function show($id)
    {
        $contact = ContactUs::find($id);
        return view('admin.contactus.show', [
            "contact" => $contact,
            "page_title" => "Contact Details"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|string",
            'email' => "required|string",
            'phone' => "required|integer",
            'message' => "required|string",
            
        ]);

        $contact = new ContactUs();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();
        return redirect('/');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contactUs, $id)
    {
        $contacts = ContactUs::find($id);
        $contacts->delete();

        return redirect('admin/contactus/index');
    }
}
