<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoriesController extends Controller
{
    //
    public function public(){
        return view('historia');
    }
}
