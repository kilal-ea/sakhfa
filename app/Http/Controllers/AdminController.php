<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function sv(Request $req)
    {
        return view('up');
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

}
