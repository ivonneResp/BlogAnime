<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    //
    
    public function public(){
        return view('home');
    }

    public function postuser(){
        return view('postsusers');
    }

    public function bloguser(){
        return view('blogusers');
    }
    
    
}
