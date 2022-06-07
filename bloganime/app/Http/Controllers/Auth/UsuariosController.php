<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = \DB::table('users')->select('id','name','email')->get();
        return view('usuarios.index', compact('usuarios'));
    }
}
