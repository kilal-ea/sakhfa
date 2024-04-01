<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class loginController extends Controller
{
    public function login(Request $req)
    {
        $email = $req->email;
        $password = $req->password;

        $credentials = ['email' => $email, 'password' => $password];

        
        if (Auth::attempt($credentials)) {

            $user = DB::table('users')->where('email', $email)->first();
            Session::put('user', $user);
            return redirect()->route('d');

        } else {
            return redirect()->back();
            ;
        }
    }
    public function logout(Request $req)
{
    Auth::logout(); 
    $req->session()->invalidate(); 
    $req->session()->regenerateToken(); 
    return redirect()->route('home');
}
}
