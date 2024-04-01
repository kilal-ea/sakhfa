<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    public function sv(Request $req)
    {
        $user = Session::get('user');
        if (Session::has('user')) {
            if ($user->roles == 'admin') {
                return view('up');
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect()->back();
        }
        
    }
    public function singup(Request $req)
{
    
    $name = $req->input('name');
    $email = $req->input('email');
    $password = $req->input('password');
    $role = $req->input('role');
    $tocken = $req->input('_token');
    
    
    $req->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
        'role' => 'required|string|in:admin,assistance,vendeur,magasiniere',
    ]);


    DB::table('users')->insert([
        'name' => $name,
        'email' => $email,
        'password' => bcrypt($password),
        'roles' => $role,
        'remember_token'=>$tocken,
        'created_at' => now(),
    ]);
    return redirect()->route('d');
}
public function userdeletev(Request $req)
{
    $user = Session::get('user');
    if (Session::has('user')) {
        if ($user->roles == 'admin') {
            return view('admin.deleteuser');
        }
        else{
            return redirect()->back();
        }
    }
    else{
        return redirect()->back();
    }
}

}
