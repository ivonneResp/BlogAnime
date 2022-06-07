<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=>'admin']);
    }
    //
    

    public function admin(){
        return view('dashboard');
    }

    public function getUser(){
        return view('homeusers');
    }
    public function public(){
        return view('home');
    }
    
}
