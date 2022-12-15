<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $req){
        $users = User::all();
        return view('admin.user.index', [
            "users" => $users,
            "page_title" => "Users"
        ]);

    }

    

    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect('admin.user.index');

    }
}
