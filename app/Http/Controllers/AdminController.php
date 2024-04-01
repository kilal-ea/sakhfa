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
                return view('admin.adduser');
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
    return redirect()->back();
}
public function userdeletev(Request $req)
{
    $user = Session::get('user');
    if (Session::has('user')) {
        if ($user->roles == 'admin') {
            $users = DB::table('users')->get();
            return view('admin.deleteuser',['users'=>$users]);
        }
        else{
            return redirect()->back();
        }
    }
    else{
        return redirect()->back();
    }
}
public function destroy(Request $request)
{
    $user = Session::get('user');
    if (Session::has('user')) {
        if ($user->roles == 'admin') {
            $userId = $request->route('user');

            DB::table('users')->where('id', $userId)->delete();
        
            return redirect()->back()->with('success', 'User deleted successfully.');
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
