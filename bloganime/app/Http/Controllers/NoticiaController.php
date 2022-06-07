<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
   //
    public function public(){
        return view('noticia');
    } 
}
