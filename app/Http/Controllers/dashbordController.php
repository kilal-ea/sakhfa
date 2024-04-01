<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class dashbordController extends Controller
{
    public function dashboard()
    {
        
        if (Session::has('user')) {
            
            $user = Session::get('user');

            return view('dash',['user'=>$user]);

        } else {

            return  redirect()->route('home');
        }
    }
    public function ds()
    {
        
        if (Session::has('user')) {
            
            $user = Session::get('user');

            return view('ds',['user'=>$user]);

        } else {

            return  redirect()->route('home');
        }
    }
}
