<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class SignupController extends Controller
{
    //
    public function index(Request $req){
        return view('auth.login');

    }

    public function save(Request $req){
        $validated = $req->validate([
            'name' => 'required|alpha_num',
            'email' => 'required|email|unique:users',
            'password' => 'required'

        ]);


        $date = date("Y-m-d H:i:s");
        $user = new User();
        $user->insert([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'password' => Hash::make($req->input('password')),
            'created_at' => $date,
            'updated_at' => $date
        ]);



        return redirect('admin/users');
    }
}
