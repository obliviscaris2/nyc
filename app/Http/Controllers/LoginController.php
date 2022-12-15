<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    function index(){
        return view('login');
    }


    public function save(Request $req){

        $validated = $req->validate([
          
            'email'=>'required|email',
            'password'=>'required'
        ]);

        

        if (Auth::attempt($validated,$req->input('remember'))) {

            //things went well 

            $req->session()->regenerate();
 
            return redirect()->intended('admin');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

        

    }

    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/admin');
    }
    


}
